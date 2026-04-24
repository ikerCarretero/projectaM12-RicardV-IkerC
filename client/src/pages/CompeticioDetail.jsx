import { useEffect, useState } from 'react'
import { useParams, Link } from 'react-router-dom'
import { api } from '../services/api'

function CompeticioDetail() {
    const { id } = useParams()

    const [competicio, setCompeticio] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarCompeticio = async () => {
            try {
                setLoading(true)
                setError('')

                const response = await api.getCompeticio(id)
                const data = response?.data || response

                setCompeticio(data)
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar el detall de la competició.')
            } finally {
                setLoading(false)
            }
        }

        carregarCompeticio()
    }, [id])

    if (loading) {
        return (
            <div className="container mt-4">
                <p>Carregant detall...</p>
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

    if (!competicio) {
        return (
            <div className="container mt-4">
                <p>No s’ha trobat la competició.</p>
            </div>
        )
    }

    const equips = competicio.equips_reals || []
    const jornades = competicio.jornades || []

    return (
        <div className="container mt-4">
            <div className="mb-4">
                <h2>{competicio.nom}</h2>
                <p className="mb-1">
                    <strong>Temporada:</strong> {competicio.temporada || '2025/2026'}
                </p>
                <p className="mb-1">
                    <strong>Equips participants:</strong> {equips.length}
                </p>
                <p className="mb-0">
                    <strong>Jornades:</strong> {jornades.length}
                </p>
            </div>

            <h3 className="mb-3">Equips participants</h3>

            <div className="row mb-4">
                {equips.map((equip) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={equip.id}>
                        <Link
                            to={`/equips-reals/${equip.id}`}
                            className="text-decoration-none text-dark"
                        >
                            <div className="card h-100 shadow-sm">
                                <div className="card-body">
                                    <h5 className="card-title">{equip.nom}</h5>
                                    <p className="mb-0">
                                        <strong>País:</strong> {equip.pais}
                                    </p>
                                </div>
                            </div>
                        </Link>
                    </div>
                ))}
            </div>

            <h3 className="mb-3">Jornades</h3>

            <div className="row">
                {jornades.map((jornada) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={jornada.id}>
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <h5 className="card-title">Jornada {jornada.numero}</h5>
                                <p className="mb-1">
                                    <strong>Inici:</strong> {formatData(jornada.data_inici)}
                                </p>
                                <p className="mb-0">
                                    <strong>Fi:</strong> {formatData(jornada.data_fi)}
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
        year: 'numeric'
    })
}

export default CompeticioDetail