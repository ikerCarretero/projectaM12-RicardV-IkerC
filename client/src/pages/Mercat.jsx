import { useEffect, useMemo, useState } from 'react'
import { mercatService } from '../services/mercatService'
import './Mercat.css'

function Mercat() {
    const [jugadors, setJugadors] = useState([])
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [success, setSuccess] = useState('')
    const [cerca, setCerca] = useState('')
    const [posicio, setPosicio] = useState('Totes')
    const [pressupost, setPressupost] = useState(
        mercatService.getPressupostActual()
    )

    useEffect(() => {
        const carregarMercat = async () => {
            try {
                setLoading(true)
                setError('')
                setSuccess('')

                const data = await mercatService.getJugadorsMercat()
                setJugadors(data)
                setPressupost(mercatService.getPressupostActual())
            } catch (error) {
                setError('No s’ha pogut carregar el mercat')
            } finally {
                setLoading(false)
            }
        }

        carregarMercat()
    }, [])

    const formatEuros = (valor) => {
        return new Intl.NumberFormat('ca-ES', {
            style: 'currency',
            currency: 'EUR',
            maximumFractionDigits: 0,
        }).format(Number(valor || 0))
    }

    const posicions = useMemo(() => {
        const llista = jugadors
            .map((jugador) => jugador.posicio)
            .filter(Boolean)

        return ['Totes', ...new Set(llista)]
    }, [jugadors])

    const jugadorsFiltrats = useMemo(() => {
        return jugadors.filter((jugador) => {
            const text = `${jugador.nom} ${jugador.equip} ${jugador.posicio}`.toLowerCase()

            const coincideixCerca = text.includes(cerca.toLowerCase())
            const coincideixPosicio =
                posicio === 'Totes' || jugador.posicio === posicio

            return coincideixCerca && coincideixPosicio
        })
    }, [jugadors, cerca, posicio])

    const handleFitxarJugador = async (jugador) => {
        setError('')
        setSuccess('')

        if (jugador.fitxat) {
            return
        }

        const valorJugador = Number(jugador.valor_mercat || 0)

        if (valorJugador > pressupost) {
            setError('No tens pressupost suficient per fitxar aquest jugador.')
            return
        }

        try {
            const resultat = await mercatService.fitxarJugador(jugador)

            setJugadors((jugadorsActuals) =>
                jugadorsActuals.map((item) =>
                    item.id === jugador.id
                        ? {
                            ...item,
                            fitxat: true,
                            estat: 'Fitxat',
                        }
                        : item
                )
            )

            setPressupost(resultat.pressupost)
            setSuccess(`${jugador.nom} fitxat correctament.`)
        } catch (error) {
            setError(error.message || 'No s’ha pogut fitxar el jugador.')
        }
    }

    return (
        <main className="app-page mercat-page">
            <section className="mercat-header">
                <div>
                    <p className="mercat-kicker">Mercat de fitxatges</p>

                    <h1>Mercat</h1>

                    <p>
                        Busca jugadors disponibles, consulta el seu valor de mercat
                        i fitxa’ls per al teu equip fantasy.
                    </p>
                </div>

                <div className="mercat-header-card">
                    <span>Pressupost</span>
                    <strong>{formatEuros(pressupost)}</strong>
                </div>
            </section>

            <section className="mercat-toolbar">
                <div className="mercat-search">
                    <label>Buscar jugador</label>

                    <input
                        type="text"
                        value={cerca}
                        onChange={(event) => setCerca(event.target.value)}
                        placeholder="Ex: Lamine, Madrid, defensa..."
                    />
                </div>

                <div className="mercat-filter">
                    <label>Posició</label>

                    <select
                        value={posicio}
                        onChange={(event) => setPosicio(event.target.value)}
                    >
                        {posicions.map((item) => (
                            <option key={item} value={item}>
                                {item}
                            </option>
                        ))}
                    </select>
                </div>
            </section>

            {success && <div className="mercat-success">{success}</div>}

            {error && <div className="mercat-error">{error}</div>}

            {loading ? (
                <section className="mercat-empty">
                    <h2>Carregant mercat...</h2>
                    <p>Estem preparant els jugadors disponibles.</p>
                </section>
            ) : jugadorsFiltrats.length === 0 ? (
                <section className="mercat-empty">
                    <h2>No hi ha jugadors disponibles</h2>
                    <p>Prova amb una altra cerca o canvia el filtre de posició.</p>
                </section>
            ) : (
                <section className="mercat-grid">
                    {jugadorsFiltrats.map((jugador) => (
                        <article
                            key={jugador.id}
                            className={
                                jugador.fitxat
                                    ? 'mercat-card mercat-player-card-fitxat'
                                    : 'mercat-card'
                            }
                        >
                            <div className="mercat-card-top">
                                <div className="mercat-player-avatar">
                                    {jugador.nom?.charAt(0).toUpperCase() || 'J'}
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
                                    <strong>{formatEuros(jugador.valor_mercat)}</strong>
                                </div>

                                <div>
                                    <span>Punts</span>
                                    <strong>{jugador.punts}</strong>
                                </div>

                                <div>
                                    <span>Estat</span>
                                    <strong>{jugador.estat}</strong>
                                </div>
                            </div>

                            <button
                                type="button"
                                className={
                                    jugador.fitxat
                                        ? 'mercat-btn mercat-fitxar-btn-disabled'
                                        : 'mercat-btn'
                                }
                                onClick={() => handleFitxarJugador(jugador)}
                                disabled={jugador.fitxat}
                            >
                                {jugador.fitxat ? 'Fitxat' : 'Fitxar jugador'}
                            </button>
                        </article>
                    ))}
                </section>
            )}
        </main>
    )
}

export default Mercat