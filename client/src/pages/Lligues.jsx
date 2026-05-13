import { useEffect, useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import { lligaPrivadaService } from '../services/lligaPrivadaService'
import { lligaActivaService } from '../services/lligaActivaService'
import './Lligues.css'

function Lligues() {
    const navigate = useNavigate()

    const [lligues, setLligues] = useState([])
    const [lligaActiva, setLligaActiva] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarLligues = async () => {
            try {
                setLoading(true)
                setError('')

                const data = await obtenirLligues()

                const lliguesNormalitzades = normalitzarLligues(data)

                setLligues(lliguesNormalitzades)
                setLligaActiva(lligaActivaService.obtenir())
            } catch (err) {
                console.error(err)
                setError('No s’han pogut carregar les teves lligues.')
            } finally {
                setLoading(false)
            }
        }

        carregarLligues()
    }, [])

    const obtenirLligues = async () => {
        if (typeof lligaPrivadaService.getLligues === 'function') {
            return await lligaPrivadaService.getLligues()
        }

        if (typeof lligaPrivadaService.getLliguesPrivades === 'function') {
            return await lligaPrivadaService.getLliguesPrivades()
        }

        if (typeof lligaPrivadaService.index === 'function') {
            return await lligaPrivadaService.index()
        }

        if (typeof lligaPrivadaService.list === 'function') {
            return await lligaPrivadaService.list()
        }

        return []
    }

    const normalitzarLligues = (data) => {
        if (Array.isArray(data)) {
            return data
        }

        if (Array.isArray(data?.lligues)) {
            return data.lligues
        }

        if (Array.isArray(data?.data)) {
            return data.data
        }

        return []
    }

    const activarLliga = (lliga, desti = 'detall') => {
        lligaActivaService.guardar(lliga)
        setLligaActiva(lligaActivaService.obtenir())

        if (desti === 'mercat') {
            navigate('/mercat')
            return
        }

        navigate(`/lligues/${lliga.id}`)
    }

    const esLligaActiva = (lliga) => {
        return Number(lligaActiva?.id) === Number(lliga.id)
    }

    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Lligues privades"
                title="Les meves lligues fantasy"
                subtitle="Gestiona les teves lligues d’amics, entra al mercat i prepara el teu equip fantasy dins de cada competició privada."
                actions={
                    <div className="lliga-header-actions">
                        <Link to="/lligues/unir" className="lligues-secondary-btn">
                            Unir-me a una lliga
                        </Link>

                        <Link to="/lligues/crear" className="lligues-main-btn">
                            Crear lliga
                        </Link>
                    </div>
                }
            />

            {lligaActiva && (
                <section className="lliga-active-banner">
                    <div>
                        <span>Lliga activa</span>
                        <strong>{lligaActiva.nom}</strong>
                    </div>

                    <button
                        type="button"
                        className="lligues-secondary-btn"
                        onClick={() => navigate('/mercat')}
                    >
                        Anar al mercat
                    </button>
                </section>
            )}

            {loading && (
                <section className="lliga-loading-box">
                    Carregant les teves lligues...
                </section>
            )}

            {!loading && error && (
                <section className="lliga-error">
                    {error}
                </section>
            )}

            {!loading && !error && lligues.length === 0 && (
                <section className="lligues-empty-card">
                    <h2>Encara no formes part de cap lliga</h2>

                    <p>
                        Crea una lliga privada per jugar amb els teus amics o uneix-te a una
                        lliga existent amb un codi d’invitació.
                    </p>

                    <div className="lligues-empty-actions">
                        <Link to="/lligues/crear" className="lligues-main-btn">
                            Crear primera lliga
                        </Link>

                        <Link to="/lligues/unir" className="lligues-secondary-btn">
                            Tinc un codi
                        </Link>
                    </div>
                </section>
            )}

            {!loading && !error && lligues.length > 0 && (
                <section className="lligues-grid">
                    {lligues.map((lliga) => (
                        <article
                            key={lliga.id}
                            className={
                                esLligaActiva(lliga)
                                    ? 'lliga-card lliga-card-active'
                                    : 'lliga-card'
                            }
                        >
                            <div className="lliga-card-top">
                                <div>
                                    <p className="lligues-kicker">
                                        {esLligaActiva(lliga) ? 'Lliga activa' : 'Lliga privada'}
                                    </p>

                                    <h2>{lliga.nom || 'Lliga privada'}</h2>
                                </div>

                                <div className="lliga-code">
                                    <span>Codi</span>
                                    <strong>
                                        {lliga.codi ||
                                            lliga.codi_invitacio ||
                                            lliga.codigo ||
                                            '---'}
                                    </strong>
                                </div>
                            </div>

                            <p className="lliga-description">
                                {lliga.descripcio ||
                                    lliga.descripcion ||
                                    'Lliga privada per competir amb amics, gestionar el teu equip fantasy i fitxar jugadors al mercat.'}
                            </p>

                            <div className="lliga-info-grid">
                                <div>
                                    <span>Membres</span>
                                    <strong>
                                        {lliga.membres_count ||
                                            lliga.usuaris_count ||
                                            lliga.membres?.length ||
                                            0}
                                    </strong>
                                </div>

                                <div>
                                    <span>Pressupost</span>
                                    <strong>
                                        {formatMoney(
                                            lliga.pressupost_inicial ||
                                            lliga.pressupost ||
                                            250000000
                                        )}
                                    </strong>
                                </div>
                            </div>

                            <div className="lliga-card-actions">
                                <button
                                    type="button"
                                    className="lligues-main-btn"
                                    onClick={() => activarLliga(lliga, 'detall')}
                                >
                                    Entrar a la lliga
                                </button>

                                <button
                                    type="button"
                                    className="lligues-secondary-btn"
                                    onClick={() => activarLliga(lliga, 'mercat')}
                                >
                                    Mercat
                                </button>
                            </div>
                        </article>
                    ))}
                </section>
            )}
        </main>
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

export default Lligues