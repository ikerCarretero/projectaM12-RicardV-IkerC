import { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import { getLliguesPrivades } from '../services/lligaPrivadaService'
import './Lligues.css'

function Lligues() {
    const [lligues, setLligues] = useState([])
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        carregarLligues()
    }, [])

    const carregarLligues = async () => {
        setLoading(true)
        setError('')

        try {
            const data = await getLliguesPrivades()

            const lliguesData =
                data?.lligues ||
                data?.lligues_privades ||
                data?.data ||
                data ||
                []

            setLligues(Array.isArray(lliguesData) ? lliguesData : [])
        } catch (error) {
            setError(error.message)
        } finally {
            setLoading(false)
        }
    }

    const getNomLliga = (lliga) => {
        return lliga?.nom || lliga?.name || 'Lliga privada'
    }

    const getDescripcioLliga = (lliga) => {
        return (
            lliga?.descripcio ||
            lliga?.description ||
            'Lliga privada per competir amb amics dins del fantasy.'
        )
    }

    const getCodiLliga = (lliga) => {
        return (
            lliga?.codi ||
            lliga?.codi_invitacio ||
            lliga?.codi_acces ||
            lliga?.invite_code ||
            'Pendent'
        )
    }

    const getMembresActuals = (lliga) => {
        if (Array.isArray(lliga?.membres)) {
            return lliga.membres.length
        }

        if (Array.isArray(lliga?.usuaris)) {
            return lliga.usuaris.length
        }

        if (Array.isArray(lliga?.participants)) {
            return lliga.participants.length
        }

        return (
            lliga?.membres_count ||
            lliga?.participants_count ||
            lliga?.num_membres ||
            0
        )
    }

    const getMaxParticipants = (lliga) => {
        return (
            lliga?.max_participants ||
            lliga?.participants_maxims ||
            lliga?.limit_participants ||
            lliga?.maxim_participants ||
            null
        )
    }

    const getEquipsFantasy = (lliga) => {
        if (Array.isArray(lliga?.equips_fantasy)) {
            return lliga.equips_fantasy.length
        }

        if (Array.isArray(lliga?.equipsFantasy)) {
            return lliga.equipsFantasy.length
        }

        if (Array.isArray(lliga?.equips)) {
            return lliga.equips.length
        }

        return lliga?.equips_fantasy_count || lliga?.equips_count || 0
    }

    const getPressupost = (lliga) => {
        return lliga?.pressupost_inicial || lliga?.pressupost || null
    }

    const formatPressupost = (value) => {
        if (!value) {
            return 'Pendent'
        }

        return new Intl.NumberFormat('ca-ES', {
            style: 'currency',
            currency: 'EUR',
            maximumFractionDigits: 0,
        }).format(value)
    }

    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Lligues privades"
                title="Les meves lligues"
                subtitle="Gestiona les teves lligues d’amics, crea una competició privada o uneix-te amb un codi d’invitació."
                actions={
                    <div className="lliga-header-actions">
                        <Link to="/lligues/crear" className="app-btn app-btn-primary">
                            Crear lliga
                        </Link>

                        <Link to="/lligues/unir" className="app-btn app-btn-secondary">
                            Unir-me amb codi
                        </Link>
                    </div>
                }
            />

            {loading && (
                <section className="app-card">
                    <div className="lliga-loading-box">
                        Carregant les teves lligues...
                    </div>
                </section>
            )}

            {!loading && error && (
                <section className="app-card">
                    <div className="lliga-error">
                        {error}
                    </div>

                    <p className="lliga-description">
                        Si aquesta pantalla encara no carrega dades, segurament falta
                        preparar la ruta del backend:
                    </p>

                    <div className="app-info-box">
                        <strong>Ruta esperada</strong>
                        <span>GET /api/lligues-privades</span>
                    </div>
                </section>
            )}

            {!loading && !error && lligues.length === 0 && (
                <section className="lligues-empty-card">
                    <h2>Encara no formes part de cap lliga</h2>

                    <p>
                        Crea una lliga privada per jugar amb els teus amics o uneix-te
                        a una lliga existent introduint el codi d’invitació.
                    </p>

                    <div className="lligues-empty-actions">
                        <Link to="/lligues/crear" className="lligues-main-btn">
                            Crear la meva lliga
                        </Link>

                        <Link to="/lligues/unir" className="lligues-secondary-btn">
                            Tinc un codi
                        </Link>
                    </div>
                </section>
            )}

            {!loading && !error && lligues.length > 0 && (
                <section className="lligues-grid">
                    {lligues.map((lliga) => {
                        const membresActuals = getMembresActuals(lliga)
                        const maxParticipants = getMaxParticipants(lliga)
                        const equipsFantasy = getEquipsFantasy(lliga)
                        const pressupost = getPressupost(lliga)

                        return (
                            <article className="lliga-card" key={lliga.id}>
                                <div className="lliga-card-top">
                                    <div>
                                        <p className="app-page-kicker">
                                            Lliga d’amics
                                        </p>

                                        <h2>{getNomLliga(lliga)}</h2>
                                    </div>

                                    <div className="lliga-code">
                                        <span>Codi</span>
                                        <strong>{getCodiLliga(lliga)}</strong>
                                    </div>
                                </div>

                                <p className="lliga-description">
                                    {getDescripcioLliga(lliga)}
                                </p>

                                <div className="lliga-info-grid">
                                    <div>
                                        <span>Membres</span>
                                        <strong>
                                            {membresActuals}
                                            {maxParticipants ? ` / ${maxParticipants}` : ''}
                                        </strong>
                                    </div>

                                    <div>
                                        <span>Equips fantasy</span>
                                        <strong>{equipsFantasy}</strong>
                                    </div>

                                    <div>
                                        <span>Pressupost</span>
                                        <strong>{formatPressupost(pressupost)}</strong>
                                    </div>

                                    <div>
                                        <span>Estat</span>
                                        <strong>
                                            {lliga?.estat || lliga?.status || 'Activa'}
                                        </strong>
                                    </div>
                                </div>

                                <Link
                                    to={`/lligues/${lliga.id}`}
                                    className="lligues-main-btn"
                                >
                                    Entrar a la lliga
                                </Link>
                            </article>
                        )
                    })}
                </section>
            )}
        </main>
    )
}

export default Lligues