import { useEffect, useState } from 'react'
import { Link, useNavigate, useParams } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import {
    getLligaPrivada,
    eliminarLligaPrivada,
} from '../services/lligaPrivadaService'
import './Lligues.css'

function LligaPrivadaDetail() {
    const { id } = useParams()
    const navigate = useNavigate()

    const [lliga, setLliga] = useState(null)
    const [loading, setLoading] = useState(true)
    const [deleting, setDeleting] = useState(false)
    const [error, setError] = useState('')

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const rol = (usuari?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin'

    useEffect(() => {
        carregarLliga()
    }, [id])

    const carregarLliga = async () => {
        setLoading(true)
        setError('')

        try {
            const data = await getLligaPrivada(id)
            const lligaData = data?.lliga || data?.data || data

            setLliga(lligaData)
        } catch (error) {
            setError(error.message)
        } finally {
            setLoading(false)
        }
    }

    const handleEliminarLliga = async () => {
        const confirmacio = window.confirm(
            'Segur que vols eliminar aquesta lliga? Aquesta acció no es pot desfer.'
        )

        if (!confirmacio) {
            return
        }

        setDeleting(true)
        setError('')

        try {
            await eliminarLligaPrivada(id)

            alert('Lliga eliminada correctament.')
            navigate('/lligues')
        } catch (error) {
            setError(error.message)
        } finally {
            setDeleting(false)
        }
    }

    const copiarCodi = async () => {
        const codi =
            lliga?.codi ||
            lliga?.codi_invitacio ||
            lliga?.codi_acces ||
            lliga?.invite_code

        if (!codi) {
            return
        }

        await navigator.clipboard.writeText(codi)
        alert('Codi copiat al porta-retalls.')
    }

    const getNomLliga = () => {
        return lliga?.nom || lliga?.name || 'Lliga privada'
    }

    const getCodiLliga = () => {
        return (
            lliga?.codi ||
            lliga?.codi_invitacio ||
            lliga?.codi_acces ||
            lliga?.invite_code ||
            'Pendent'
        )
    }

    const getMembres = () => {
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

    const getEquipsFantasy = () => {
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

    const getPressupost = () => {
        const pressupost = lliga?.pressupost_inicial || lliga?.pressupost

        if (!pressupost) {
            return 'Pendent de definir'
        }

        return new Intl.NumberFormat('ca-ES', {
            style: 'currency',
            currency: 'EUR',
            maximumFractionDigits: 0,
        }).format(pressupost)
    }

    if (loading) {
        return (
            <main className="app-page lligues-page">
                <section className="app-card">
                    <p>Carregant la lliga...</p>
                </section>
            </main>
        )
    }

    if (error && !lliga) {
        return (
            <main className="app-page lligues-page">
                <PageHeader
                    kicker="Detall de lliga"
                    title="No s’ha pogut carregar la lliga"
                    subtitle={error}
                    actions={
                        <Link to="/lligues" className="app-btn app-btn-secondary">
                            Tornar a lligues
                        </Link>
                    }
                />
            </main>
        )
    }

    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Detall de lliga"
                title={getNomLliga()}
                subtitle="Aquí es mostrarà la informació de la lliga, membres, equips fantasy i classificació."
                actions={
                    <div className="lliga-header-actions">
                        <Link to="/lligues" className="app-btn app-btn-secondary">
                            Tornar a lligues
                        </Link>

                        {esAdmin && (
                            <button
                                type="button"
                                className="app-btn app-btn-danger"
                                onClick={handleEliminarLliga}
                                disabled={deleting}
                            >
                                {deleting ? 'Eliminant...' : 'Eliminar lliga'}
                            </button>
                        )}
                    </div>
                }
            />

            {error && (
                <div className="lliga-error">
                    {error}
                </div>
            )}

            {esAdmin && (
                <section className="lliga-admin-warning">
                    <strong>Zona d’administrador</strong>
                    <span>
                        Pots eliminar aquesta lliga perquè el teu compte té rol d’admin.
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
                            <span>{getMembres()}</span>
                        </div>

                        <div className="app-info-box">
                            <strong>Equips fantasy</strong>
                            <span>
                                {getEquipsFantasy() > 0
                                    ? getEquipsFantasy()
                                    : 'Encara no hi ha equips'}
                            </span>
                        </div>

                        <div className="app-info-box">
                            <strong>Pressupost inicial</strong>
                            <span>{getPressupost()}</span>
                        </div>
                    </div>

                    <div className="lliga-code-banner">
                        <div>
                            <strong>Codi d’invitació</strong>
                            <span>{getCodiLliga()}</span>
                        </div>

                        <button
                            type="button"
                            className="lliga-copy-btn"
                            onClick={copiarCodi}
                        >
                            Copiar codi
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
            </section>

            <section className="app-card mt-4">
                <p className="app-page-kicker">Classificació</p>
                <h2 className="mb-3">Rànquing de la lliga</h2>

                <div className="app-info-box">
                    <strong>Encara no hi ha dades</strong>
                    <span>
                        Quan hi hagi equips i jornades, aquí es mostrarà la classificació.
                    </span>
                </div>
            </section>
        </main>
    )
}

export default LligaPrivadaDetail