import { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { api } from '../services/api'

function Competicions() {
    const [competicions, setCompeticions] = useState([])
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarCompeticions = async () => {
            try {
                setLoading(true)
                setError('')

                const response = await api.getCompeticions()
                const data = Array.isArray(response) ? response : response.data || []

                const competicionsAdaptades = data.map((competicio) => ({
                    id: competicio.id,
                    nom: competicio.nom,
                    temporada: competicio.temporada || '2025/2026',
                    nombreEquips: competicio.equips_reals?.length || 0,
                    nombreJornades: competicio.jornades?.length || 0
                }))

                setCompeticions(competicionsAdaptades)
            } catch (err) {
                console.error(err)
                setError('No s’han pogut carregar les competicions.')
            } finally {
                setLoading(false)
            }
        }

        carregarCompeticions()
    }, [])

    if (loading) {
        return (
            <div className="container mt-4">
                <p>Carregant competicions...</p>
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
            <h2 className="mb-4 fw-bold">Competicions</h2>

            <div className="row">
                {competicions.map((competicio) => (
                    <div className="col-md-6 col-lg-5 mb-3" key={competicio.id}>
                        <div className="card h-100 shadow-sm rounded-4">
                            <div className="card-body">
                                <h5 className="card-title">{competicio.nom}</h5>

                                <p className="card-text mb-1">
                                    <strong>Temporada:</strong> {competicio.temporada}
                                </p>

                                <p className="card-text mb-1">
                                    <strong>Equips:</strong> {competicio.nombreEquips}
                                </p>

                                <p className="card-text mb-3">
                                    <strong>Jornades:</strong> {competicio.nombreJornades}
                                </p>

                                <Link className="btn btn-primary" to={`/competicions/${competicio.id}`}>
                                    Veure detall
                                </Link>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default Competicions