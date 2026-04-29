import { useEffect, useState } from 'react'
import { Link, useParams } from 'react-router-dom'
import { api } from '../services/api'

function JornadaDetail() {
    const { id } = useParams()

    const [jornada, setJornada] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarJornada = async () => {
            try {
                setLoading(true)
                setError('')

                const data = await api.getJornada(id)
                setJornada(data)
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar la jornada.')
            } finally {
                setLoading(false)
            }
        }

        carregarJornada()
    }, [id])

    if (loading) {
        return (
            <div className="container mt-4">
                <p>Carregant jornada...</p>
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

    if (!jornada) {
        return (
            <div className="container mt-4">
                <p>No s’ha trobat la jornada.</p>
            </div>
        )
    }

    const partits = jornada.partits || []
    const competicioId = jornada.competicio_id || jornada.competicio?.id

    return (
        <div className="container mt-4">
            <div className="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-4">
                <div>
                    <h2 className="mb-2">Jornada {jornada.numero}</h2>
                    <p className="mb-1">
                        <strong>Competició:</strong> {jornada.competicio?.nom || '-'}
                    </p>
                    <p className="mb-1">
                        <strong>Inici:</strong> {formatData(jornada.data_inici)}
                    </p>
                    <p className="mb-0">
                        <strong>Fi:</strong> {formatData(jornada.data_fi)}
                    </p>
                </div>

                {competicioId && (
                    <Link
                        to={`/competicions/${competicioId}`}
                        className="btn btn-outline-secondary"
                    >
                        Tornar a competició
                    </Link>
                )}
            </div>

            <h3 className="mb-3">Partits</h3>

            <div className="row">
                {partits.map((partit) => {
                    const equipLocal = partit.equip_local || partit.equipLocal
                    const equipVisitant = partit.equip_visitant || partit.equipVisitant

                    return (
                        <div className="col-md-6 col-xl-4 mb-4" key={partit.id}>
                            <div className="card h-100 shadow-sm">
                                <div className="card-body">
                                    <h5 className="card-title mb-3">
                                        {equipLocal?.nom || 'Equip local'} vs {equipVisitant?.nom || 'Equip visitant'}
                                    </h5>

                                    <p className="mb-2">
                                        <strong>Data:</strong> {formatDataHora(partit.data_hora)}
                                    </p>

                                    <p className="mb-0">
                                        <strong>Resultat:</strong> {partit.resultat || 'Encara no disponible'}
                                    </p>
                                </div>
                            </div>
                        </div>
                    )
                })}
            </div>

            {partits.length === 0 && (
                <div className="alert alert-info">
                    Aquesta jornada encara no té partits carregats.
                </div>
            )}
        </div>
    )
}

function formatData(dataIso) {
    if (!dataIso) return '-'

    const data = new Date(dataIso)

    if (Number.isNaN(data.getTime())) return dataIso

    return data.toLocaleDateString('ca-ES', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    })
}

function formatDataHora(dataIso) {
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

export default JornadaDetail