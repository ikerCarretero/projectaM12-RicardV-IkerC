import { useEffect, useMemo, useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import { mercatService } from '../services/mercatService'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import './Mercat.css'

function Mercat() {
    const navigate = useNavigate()

    const [lligaActiva, setLligaActiva] = useState(null)
    const [jugadorsMercat, setJugadorsMercat] = useState([])
    const [jugadorsFitxats, setJugadorsFitxats] = useState([])
    const [pressupost, setPressupost] = useState(0)
    const [loading, setLoading] = useState(true)
    const [fitxantId, setFitxantId] = useState(null)
    const [search, setSearch] = useState('')
    const [posicio, setPosicio] = useState('Totes')
    const [missatge, setMissatge] = useState('')
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarMercat = async () => {
            try {
                setLoading(true)
                setError('')
                setMissatge('')

                const lliga = lligaActivaService.obtenir()
                setLligaActiva(lliga)

                if (!lliga) {
                    setJugadorsMercat([])
                    setJugadorsFitxats([])
                    setPressupost(0)
                    return
                }

                const data = await mercatService.getJugadorsMercat()

                const jugadors = normalitzarRespostaMercat(data)
                const fitxats = equipFantasyLocalService.getJugadorsFitxats()
                const pressupostActual = equipFantasyLocalService.getPressupost()

                setJugadorsMercat(jugadors)
                setJugadorsFitxats(fitxats)
                setPressupost(pressupostActual)
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar el mercat de fitxatges.')
            } finally {
                setLoading(false)
            }
        }

        carregarMercat()
    }, [])

    const jugadorsDisponibles = useMemo(() => {
        const idsFitxats = jugadorsFitxats.map((jugador) => Number(jugador.id))

        return jugadorsMercat.filter((jugador) => {
            const jaFitxat = idsFitxats.includes(Number(jugador.id))

            if (jaFitxat) {
                return false
            }

            const coincideixText =
                jugador.nom?.toLowerCase().includes(search.toLowerCase()) ||
                jugador.equip?.toLowerCase().includes(search.toLowerCase())

            const coincideixPosicio =
                posicio === 'Totes' || jugador.posicio === posicio

            return coincideixText && coincideixPosicio
        })
    }, [jugadorsMercat, jugadorsFitxats, search, posicio])

    const handleFitxar = (jugador) => {
        try {
            setFitxantId(jugador.id)
            setError('')
            setMissatge('')

            const resultat = equipFantasyLocalService.fitxarJugador(jugador)

            setJugadorsFitxats(resultat.jugadors)
            setPressupost(resultat.pressupost)

            setMissatge(`${jugador.nom} fitxat correctament per ${lligaActiva.nom}.`)
        } catch (err) {
            setError(err.message || 'No s’ha pogut fitxar aquest jugador.')
        } finally {
            setFitxantId(null)
        }
    }

    if (!lligaActiva && !loading) {
        return (
            <main className="app-page mercat-page">
                <section className="mercat-empty">
                    <h2>Abans has d’escollir una lliga</h2>

                    <p>
                        Per entrar al mercat has de seleccionar una lliga privada activa.
                        Així cada lliga tindrà el seu propi pressupost i els seus fitxatges.
                    </p>

                    <Link to="/lligues" className="mercat-btn mercat-empty-btn">
                        Anar a les meves lligues
                    </Link>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page mercat-page">
            <section className="mercat-header">
                <div>
                    <span className="mercat-kicker">Mercat de fitxatges</span>

                    <h1>Mercat fantasy</h1>

                    <p>
                        Fitxa jugadors per a la lliga activa. Cada lliga privada té el seu
                        propi mercat, pressupost i plantilla.
                    </p>
                </div>

                <div className="mercat-header-card">
                    <span>Pressupost</span>
                    <strong>{formatMoney(pressupost)}</strong>
                </div>
            </section>

            {lligaActiva && (
                <section className="mercat-active-league">
                    <div>
                        <span>Lliga activa</span>
                        <strong>{lligaActiva.nom}</strong>
                    </div>

                    <button
                        type="button"
                        className="mercat-change-league-btn"
                        onClick={() => navigate('/lligues')}
                    >
                        Canviar lliga
                    </button>
                </section>
            )}

            <section className="mercat-toolbar">
                <div className="mercat-search">
                    <label htmlFor="search">Buscar jugador</label>
                    <input
                        id="search"
                        type="text"
                        placeholder="Busca per nom o equip..."
                        value={search}
                        onChange={(event) => setSearch(event.target.value)}
                    />
                </div>

                <div className="mercat-filter">
                    <label htmlFor="posicio">Posició</label>
                    <select
                        id="posicio"
                        value={posicio}
                        onChange={(event) => setPosicio(event.target.value)}
                    >
                        <option value="Totes">Totes</option>
                        <option value="Porter">Porter</option>
                        <option value="Defensa">Defensa</option>
                        <option value="Migcampista">Migcampista</option>
                        <option value="Davanter">Davanter</option>
                    </select>
                </div>
            </section>

            {missatge && (
                <section className="mercat-alert mercat-alert-success">
                    {missatge}
                </section>
            )}

            {error && (
                <section className="mercat-alert mercat-alert-error">
                    {error}
                </section>
            )}

            {loading ? (
                <section className="mercat-empty">
                    <h2>Carregant mercat...</h2>
                    <p>Estem preparant els jugadors disponibles.</p>
                </section>
            ) : jugadorsDisponibles.length === 0 ? (
                <section className="mercat-empty">
                    <h2>No hi ha jugadors disponibles</h2>
                    <p>
                        Potser ja has fitxat tots els jugadors visibles o el filtre actual no
                        retorna cap resultat.
                    </p>
                </section>
            ) : (
                <section className="mercat-grid">
                    {jugadorsDisponibles.map((jugador) => {
                        const noHiHaPressupost =
                            Number(jugador.valor_mercat || 0) > Number(pressupost || 0)

                        return (
                            <article className="mercat-card" key={jugador.id}>
                                <div className="mercat-card-top">
                                    <div className="mercat-player-avatar">
                                        {jugador.nom?.charAt(0)?.toUpperCase() || 'J'}
                                    </div>

                                    <div>
                                        <h2>{jugador.nom}</h2>
                                        <p>{jugador.equip}</p>
                                    </div>
                                </div>

                                <div className="mercat-card-info">
                                    <div>
                                        <span>Posició</span>
                                        <strong>{jugador.posicio}</strong>
                                    </div>

                                    <div>
                                        <span>Valor</span>
                                        <strong>{formatMoney(jugador.valor_mercat)}</strong>
                                    </div>

                                    <div>
                                        <span>Punts</span>
                                        <strong>{jugador.punts || 0}</strong>
                                    </div>

                                    <div>
                                        <span>Estat</span>
                                        <strong>{jugador.estat || 'Disponible'}</strong>
                                    </div>
                                </div>

                                <button
                                    type="button"
                                    className={
                                        noHiHaPressupost
                                            ? 'mercat-btn mercat-fitxar-btn-disabled'
                                            : 'mercat-btn'
                                    }
                                    disabled={fitxantId === jugador.id || noHiHaPressupost}
                                    onClick={() => handleFitxar(jugador)}
                                >
                                    {fitxantId === jugador.id
                                        ? 'Fitxant...'
                                        : noHiHaPressupost
                                            ? 'Pressupost insuficient'
                                            : 'Fitxar jugador'}
                                </button>
                            </article>
                        )
                    })}
                </section>
            )}
        </main>
    )
}

const normalitzarRespostaMercat = (data) => {
    let jugadors = []

    if (Array.isArray(data)) {
        jugadors = data
    } else if (Array.isArray(data?.jugadors)) {
        jugadors = data.jugadors
    } else if (Array.isArray(data?.data)) {
        jugadors = data.data
    }

    return jugadors.map((jugador) => ({
        id: jugador.id,
        nom: jugador.nom,
        equip:
            jugador.equip ||
            jugador.equip_real?.nom ||
            jugador.equipReal?.nom ||
            'Sense equip',
        posicio: jugador.posicio,
        valor_mercat: Number(jugador.valor_mercat || jugador.valorMercat || 0),
        punts: Number(jugador.punts || jugador.puntuacio_total || 0),
        estat: jugador.estat || 'Disponible',
    }))
}

const formatMoney = (value) => {
    const numberValue = Number(value || 0)

    return new Intl.NumberFormat('ca-ES', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0,
    }).format(numberValue)
}

export default Mercat