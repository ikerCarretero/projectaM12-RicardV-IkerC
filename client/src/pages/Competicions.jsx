import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { api } from '../services/api'
import './Competicions.css'

function Competicions() {
    const [competicions, setCompeticions] = useState([])
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarCompeticions = async () => {
            try {
                setLoading(true)
                setError('')

                const data = await api.getCompeticions()
                setCompeticions(Array.isArray(data) ? data : [])
            } catch (err) {
                console.error(err)
                setError('No s’han pogut carregar les competicions.')
            } finally {
                setLoading(false)
            }
        }

        carregarCompeticions()
    }, [])

    const resum = useMemo(() => {
        const totalEquips = competicions.reduce(
            (acc, competicio) => acc + (competicio.equips_reals?.length || 0),
            0
        )

        const totalJornades = competicions.reduce(
            (acc, competicio) => acc + (competicio.jornades?.length || 0),
            0
        )

        return {
            totalCompeticions: competicions.length,
            totalEquips,
            totalJornades
        }
    }, [competicions])

    if (loading) {
        return <p>Carregant competicions...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    return (
        <div className="competicions-page">
            <div className="competicions-header">
                <div>
                    <h1 className="competicions-title">Competicions</h1>
                    <p className="competicions-subtitle">
                        Explora les grans competicions europees, els equips participants i les jornades disponibles.
                    </p>
                </div>
            </div>

            <div className="competicions-stats-grid">
                <div className="competicions-stat-card">
                    <span>Competicions</span>
                    <strong>{resum.totalCompeticions}</strong>
                </div>

                <div className="competicions-stat-card">
                    <span>Equips totals</span>
                    <strong>{resum.totalEquips}</strong>
                </div>

                <div className="competicions-stat-card">
                    <span>Jornades</span>
                    <strong>{resum.totalJornades}</strong>
                </div>
            </div>

            {competicions.length === 0 ? (
                <div className="competicions-empty-card">
                    <h3>Encara no hi ha competicions disponibles</h3>
                    <p>
                        Quan el backend tingui les competicions registrades, aquí apareixeran totes amb el seu detall.
                    </p>
                </div>
            ) : (
                <div className="competicions-grid">
                    {competicions.map((competicio) => {
                        const totalEquips = competicio.equips_reals?.length || 0
                        const totalJornades = competicio.jornades?.length || 0
                        const visualUrl = obtenirImatgeCompeticio(competicio)

                        return (
                            <div className="competicio-card" key={competicio.id}>
                                <div className="competicio-card-header">
                                    <div className="competicio-visual">
                                        {visualUrl ? (
                                            <img
                                                src={visualUrl}
                                                alt={competicio.nom}
                                                className="competicio-logo"
                                            />
                                        ) : (
                                            <div className="competicio-placeholder">
                                                {obtenirInicials(competicio.nom)}
                                            </div>
                                        )}
                                    </div>

                                    <div className="competicio-card-top-text">
                                        <div className="competicio-card-top">
                                            <span className="competicio-pill">Competició</span>
                                            <span className="competicio-season">
                                                {competicio.temporada || '-'}
                                            </span>
                                        </div>

                                        <h3>{competicio.nom}</h3>
                                    </div>
                                </div>

                                <p>
                                    Visualitza els equips participants, consulta la plantilla de cada club
                                    i entra al detall de la competició.
                                </p>

                                <div className="competicio-meta">
                                    <div className="competicio-meta-item">
                                        <span>Equips</span>
                                        <strong>{totalEquips}</strong>
                                    </div>

                                    <div className="competicio-meta-item">
                                        <span>Jornades</span>
                                        <strong>{totalJornades}</strong>
                                    </div>
                                </div>

                                <Link
                                    to={`/competicions/${competicio.id}`}
                                    className="competicio-link"
                                >
                                    Veure detall
                                </Link>
                            </div>
                        )
                    })}
                </div>
            )}
        </div>
    )
}

function obtenirImatgeCompeticio(competicio) {
    return (
        competicio.logo_url ||
        competicio.logo ||
        competicio.bandera_url ||
        competicio.bandera ||
        competicio.img ||
        ''
    )
}

function obtenirInicials(text = '') {
    return text
        .split(' ')
        .filter(Boolean)
        .slice(0, 2)
        .map((part) => part[0]?.toUpperCase() || '')
        .join('')
}

export default Competicions