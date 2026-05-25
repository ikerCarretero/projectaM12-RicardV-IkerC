import { useEffect, useState } from 'react'
import { Link, useParams } from 'react-router-dom'
import { api, getImageUrl } from '../services/api'
import './CompeticioDetail.css'

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

                const data = await api.getCompeticio(id)
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
    const visualUrl = obtenirBanderaCompeticio(competicio)

    return (
        <div className="competicio-detail-page">
            <div className="competicio-detail-header">
                <div className="competicio-detail-header-left">
                    <div className="competicio-detail-visual">
                        {visualUrl ? (
                            <img
                                src={visualUrl}
                                alt={competicio.nom}
                                className="competicio-detail-logo"
                            />
                        ) : (
                            <div className="competicio-detail-placeholder">
                                {obtenirInicials(competicio.nom)}
                            </div>
                        )}
                    </div>

                    <div>
                        <h2>{competicio.nom}</h2>
                        <p className="mb-1">
                            <strong>Temporada:</strong> {competicio.temporada || '2025-2026'}
                        </p>
                        <p className="mb-1">
                            <strong>Equips participants:</strong> {equips.length}
                        </p>
                        <p className="mb-0">
                            <strong>Jornades:</strong> {jornades.length}
                        </p>
                    </div>
                </div>
            </div>

            <section className="competicio-detail-section">
                <div className="section-title-row">
                    <h3>Equips participants</h3>
                    <span className="section-badge">{equips.length} equips</span>
                </div>

                <div className="row">
                    {equips.map((equip) => {
                        const escut = obtenirEscutEquip(equip)

                        return (
                            <div className="col-md-6 col-lg-4 mb-4" key={equip.id}>
                                <Link
                                    to={`/equips-reals/${equip.id}`}
                                    className="competicio-team-link"
                                >
                                    <div className="competicio-team-card">
                                        <div className="competicio-team-head">
                                            {escut ? (
                                                <img
                                                    src={escut}
                                                    alt={equip.nom}
                                                    className="competicio-team-crest"
                                                />
                                            ) : (
                                                <div className="competicio-team-crest-placeholder">
                                                    {obtenirInicials(equip.nom)}
                                                </div>
                                            )}

                                            <div className="competicio-team-info">
                                                <h5 className="card-title mb-1">{equip.nom}</h5>
                                                <p className="mb-0">
                                                    <strong>País:</strong> {equip.pais}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        )
                    })}
                </div>

                {equips.length === 0 && (
                    <div className="alert alert-info">
                        Aquesta competició encara no té equips registrats.
                    </div>
                )}
            </section>

            <section className="competicio-detail-section">
                <div className="section-title-row">
                    <h3>Jornades</h3>
                    <span className="section-badge">{jornades.length} jornades</span>
                </div>

                <div className="row">
                    {jornades.map((jornada) => (
                        <div className="col-md-6 col-lg-4 mb-4" key={jornada.id}>
                            <div className="competicio-jornada-card">
                                <div className="competicio-jornada-number">
                                    Jornada {jornada.numero}
                                </div>

                                <p className="mb-1">
                                    <strong>Inici:</strong> {formatData(jornada.data_inici)}
                                </p>

                                <p className="mb-0">
                                    <strong>Fi:</strong> {formatData(jornada.data_fi)}
                                </p>
                            </div>
                        </div>
                    ))}
                </div>

                {jornades.length === 0 && (
                    <div className="alert alert-info">
                        Aquesta competició encara no té jornades disponibles.
                    </div>
                )}
            </section>
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

const obtenirBanderaCompeticio = (competicio) => {
    const path =
        competicio.bandera_url ||
        competicio.bandera ||
        competicio.img ||
        ''

    return getImageUrl(path)
}

const obtenirEscutEquip = (equip) => {
    const path =
        equip.escut_url ||
        equip.escut ||
        equip.logo_url ||
        equip.logo ||
        equip.img ||
        ''

    return getImageUrl(path)
}

function obtenirInicials(text = '') {
    return text
        .split(' ')
        .filter(Boolean)
        .slice(0, 2)
        .map((part) => part[0]?.toUpperCase() || '')
        .join('')
}

export default CompeticioDetail