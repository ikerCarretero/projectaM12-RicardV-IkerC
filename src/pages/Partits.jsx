import { useEffect, useState } from 'react'
import { api } from '../services/api'

function Partits() {
    const [partits, setPartits] = useState([])
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarPartits = async () => {
            try {
                setLoading(true)
                setError('')

                const response = await api.getPartits()
                const data = Array.isArray(response) ? response : response.data || []

                const partitsAdaptats = data.map((partit) => ({
                    id: partit.id,
                    jornada: partit.jornada?.numero || '-',
                    dataHora: formatData(partit.data_hora),
                    local: partit.equip_local?.nom || 'Equip local',
                    visitant: partit.equip_visitant?.nom || 'Equip visitant',
                    resultat: partit.resultat || 'Pendent'
                }))

                setPartits(partitsAdaptats)
            } catch (err) {
                console.error(err)
                setError('No s’han pogut carregar els partits.')
            } finally {
                setLoading(false)
            }
        }

        carregarPartits()
    }, [])

    if (loading) {
        return (
            <div className="container mt-4">
                <p>Carregant partits...</p>
            </div>
        )
    }

    if (error) {
        return (
            <div className="container mt-4">
                <div className="alert alert-danger">{error}</div>
            </div>
        )
    }

    return (
        <div className="container mt-4">
            <h2 className="mb-4">Partits</h2>

            <div className="row">
                {partits.map((partit) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={partit.id}>
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <p className="text-muted mb-2">
                                    <strong>Jornada {partit.jornada}</strong>
                                </p>

                                <h5 className="card-title mb-3">
                                    {partit.local} vs {partit.visitant}
                                </h5>

                                <p className="mb-1">
                                    <strong>Data:</strong> {partit.dataHora}
                                </p>

                                <p className="mb-0">
                                    <strong>Resultat:</strong> {partit.resultat}
                                </p>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

function formatData(dataIso) {
    if (!dataIso) return '-'

    const data = new Date(dataIso)

    if (Number.isNaN(data.getTime())) return dataIso

    return data.toLocaleString('ca-ES', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    })
}

export default Partits