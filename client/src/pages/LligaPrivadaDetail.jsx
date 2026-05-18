import { useEffect, useState } from 'react'
import { Link, useNavigate, useParams } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import {
    getLligaPrivada,
    eliminarLligaPrivada,
} from '../services/lligaPrivadaService'
import { lligaActivaService } from '../services/lligaActivaService'
import './Lligues.css'

function LligaPrivadaDetail() {
    const navigate = useNavigate()
    const { id } = useParams()

    const [lliga, setLliga] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [copiat, setCopiat] = useState(false)
    const [eliminant, setEliminant] = useState(false)

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const rol = String(usuari?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin'

    const esLligaActiva = lliga ? lligaActivaService.esActiva(lliga.id) : false

    useEffect(() => {
        const carregarLliga = async () => {
            try {
                setLoading(true)
                setError('')

                const data = await getLligaPrivada(id)
                const lligaData = data?.lliga || data?.data || data

                setLliga(lligaData)
            } catch (err) {
                setError(err.message || 'No s’ha pogut carregar la lliga.')
            } finally {
                setLoading(false)
            }
        }

        carregarLliga()
    }, [id])

    const entrarALliga = () => {
        if (!lliga) {
            return
        }

        lligaActivaService.guardar(lliga)
        navigate('/dashboard')
    }

    const anarAlMercat = () => {
        if (!lliga) {
            return
        }

        lligaActivaService.guardar(lliga)
        navigate('/mercat')
    }

    const copiarCodi = async () => {
        const codi = obtenirCodiLliga(lliga)

        if (!codi) {
            return
        }

        try {
            await navigator.clipboard.writeText(codi)
            setCopiat(true)

            setTimeout(() => {
                setCopiat(false)
            }, 1600)
        } catch (err) {
            setCopiat(false)
        }
    }

    const eliminarLliga = async () => {
        if (!lliga) {
            return
        }

        const confirmar = window.confirm(
            `Segur que vols eliminar la lliga "${lliga.nom}"? Aquesta acció no es pot desfer.`
        )

        if (!confirmar) {
            return
        }

        try {
            setEliminant(true)
            await eliminarLligaPrivada(lliga.id)

            if (lligaActivaService.esActiva(lliga.id)) {
                lligaActivaService.eliminar()
            }

            navigate('/lligues')
        } catch (err) {
            setError(err.message || 'No s’ha pogut eliminar la lliga.')
        } finally {
            setEliminant(false)
        }
    }

    if (loading) {
        return (
            <main className="app-page lligues-page">
                <div className="lliga-loading-box">
                    Carregant informació de la lliga...
                </div>
            </main>
        )
    }

    if (error) {
        return (
            <main className="app-page lligues-page">
                <section className="lligues-empty-card">
                    <h2>No s’ha pogut carregar la lliga</h2>
                    <p>{error}</p>

                    <Link to="/lligues" className="lligues-secondary-btn">
                        Tornar a lligues
                    </Link>
                </section>
            </main>
        )
    }

    if (!lliga) {
        return (
            <main className="app-page lligues-page">
                <section className="lligues-empty-card">
                    <h2>Lliga no trobada</h2>
                    <p>No hem pogut trobar la informació d’aquesta lliga.</p>

                    <Link to="/lligues" className="lligues-secondary-btn">
                        Tornar a lligues
                    </Link>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Detall de lliga"
                title={lliga.nom || 'Lliga privada'}
                subtitle="Aquí es mostrarà la informació de la lliga, membres, equips fantasy i classificació."
                actions={
                    <div className="lliga-header-actions">
                        <button
                            type="button"
                            className="lligues-main-btn"
                            onClick={entrarALliga}
                        >
                            {esLligaActiva ? 'Lliga activa' : 'Entrar a la lliga'}
                        </button>

                        <button
                            type="button"
                            className="lligues-secondary-btn"
                            onClick={anarAlMercat}
                        >
                            Anar al mercat
                        </button>

                        <Link to="/lligues" className="lligues-secondary-btn">
                            Tornar a lligues
                        </Link>

                        {esAdmin && (
                            <button
                                type="button"
                                className="app-btn app-btn-danger"
                                onClick={eliminarLliga}
                                disabled={eliminant}
                            >
                                {eliminant ? 'Eliminant...' : 'Eliminar lliga'}
                            </button>
                        )}
                    </div>
                }
            />

            {esLligaActiva && (
                <section className="lliga-active-banner">
                    <strong>Aquesta és la teva lliga activa.</strong>
                    <span>
                        El mercat, la plantilla, el pressupost i l’alineació es calcularan amb
                        aquesta lliga.
                    </span>
                </section>
            )}

            <section className="lliga-detail-grid">
                <article className="app-card">
                    <p className="app-page-kicker">Informació</p>
                    <h2 className="mb-3">Dades de la lliga</h2>

                    <div className="app-info-grid">
                        <div className="app-info-box">
                            <strong>Membres</strong>
                            <span>{lliga.membres_count || lliga.membres?.length || 1}</span>
                        </div>

                        <div className="app-info-box">
                            <strong>Equips fantasy</strong>
                            <span>
                                {lliga.equips_fantasy_count ||
                                    lliga.equips_fantasy?.length ||
                                    'Encara no hi ha equips'}
                            </span>
                        </div>

                        <div className="app-info-box">
                            <strong>Pressupost inicial</strong>
                            <span>
                                {formatMoney(
                                    lliga.pressupost_inicial ||
                                    lliga.pressupost ||
                                    250000000
                                )}
                            </span>
                        </div>
                    </div>

                    <div className="lliga-code-banner">
                        <div>
                            <strong>Codi d’invitació</strong>
                            <span>{obtenirCodiLliga(lliga)}</span>
                        </div>

                        <button
                            type="button"
                            className="lliga-copy-btn"
                            onClick={copiarCodi}
                        >
                            {copiat ? 'Copiat!' : 'Copiar codi'}
                        </button>
                    </div>
                </article>

                <article className="app-card">
                    <p className="app-page-kicker">Membres</p>
                    <h2 className="mb-3">Participants</h2>

                    <div className="app-info-box">
                        <strong>Encara no hi ha membres visibles</strong>
                        <span>
                            Quan els usuaris s’uneixin amb el codi, apareixeran aquí.
                        </span>
                    </div>
                </article>

                <article className="app-card lliga-ranking-card">
                    <p className="app-page-kicker">Classificació</p>
                    <h2 className="mb-3">Rànquing de la lliga</h2>

                    <div className="app-info-box">
                        <strong>Encara no hi ha dades</strong>
                        <span>
                            Quan hi hagi equips i jornades, aquí es mostrarà la classificació.
                        </span>
                    </div>
                </article>
            </section>
        </main>
    )
}

const obtenirCodiLliga = (lliga) => {
    return (
        lliga?.codi ||
        lliga?.codi_invitacio ||
        lliga?.invitation_code ||
        'Pendent'
    )
}

const formatMoney = (value) => {
    const numberValue = Number(value || 0)

    return new Intl.NumberFormat('ca-ES', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0,
    }).format(numberValue)
}

export default LligaPrivadaDetail