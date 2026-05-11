import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { puntuacioJugadorService } from '../services/puntuacioJugadorService'
import './AdminPuntuacions.css'

function AdminPuntuacions() {
    const [jugadors, setJugadors] = useState([])
    const [editValues, setEditValues] = useState({})
    const [loading, setLoading] = useState(true)
    const [savingId, setSavingId] = useState(null)
    const [modeDemo, setModeDemo] = useState(false)
    const [missatge, setMissatge] = useState('')
    const [cerca, setCerca] = useState('')
    const [posicio, setPosicio] = useState('totes')

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const rol = (usuari?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin'

    useEffect(() => {
        const carregarJugadors = async () => {
            try {
                setLoading(true)

                const response = await puntuacioJugadorService.getJugadors()
                setJugadors(response.data)
                setModeDemo(response.modeDemo)

                const initialValues = {}

                response.data.forEach((jugador) => {
                    initialValues[jugador.id] = {
                        valor_mercat: jugador.valor_mercat || 0,
                        puntuacio_total: jugador.puntuacio_total || 0,
                        puntuacio_jornada: jugador.puntuacio_jornada || 0,
                    }
                })

                setEditValues(initialValues)
            } finally {
                setLoading(false)
            }
        }

        carregarJugadors()
    }, [])

    const jugadorsFiltrats = useMemo(() => {
        return jugadors.filter((jugador) => {
            const text = `${jugador.nom} ${jugador.equip} ${jugador.posicio}`.toLowerCase()
            const coincideixText = text.includes(cerca.toLowerCase())
            const coincideixPosicio = posicio === 'totes' || jugador.posicio === posicio

            return coincideixText && coincideixPosicio
        })
    }, [jugadors, cerca, posicio])

    const formatMoney = (value) => {
        return Number(value || 0).toLocaleString('ca-ES') + ' €'
    }

    const handleChange = (jugadorId, field, value) => {
        setEditValues((prev) => ({
            ...prev,
            [jugadorId]: {
                ...prev[jugadorId],
                [field]: value,
            },
        }))
    }

    const handleGuardar = async (jugador) => {
        const values = editValues[jugador.id]

        const payload = {
            valor_mercat: Number(values.valor_mercat || 0),
            puntuacio_total: Number(values.puntuacio_total || 0),
            puntuacio_jornada: Number(values.puntuacio_jornada || 0),
        }

        try {
            setSavingId(jugador.id)
            setMissatge('')

            await puntuacioJugadorService.updatePuntuacio(jugador.id, payload)

            setJugadors((prev) =>
                prev.map((item) =>
                    item.id === jugador.id
                        ? {
                            ...item,
                            ...payload,
                        }
                        : item
                )
            )

            setMissatge(`Puntuació actualitzada per a ${jugador.nom}.`)
        } catch (error) {
            setMissatge('No s’ha pogut guardar la puntuació.')
        } finally {
            setSavingId(null)
        }
    }

    if (!esAdmin) {
        return (
            <main className="app-page admin-puntuacions-page">
                <section className="admin-puntuacions-denied">
                    <span className="admin-puntuacions-kicker">Accés restringit</span>
                    <h1>Només administradors</h1>
                    <p>
                        Aquesta secció està pensada perquè l’admin pugui modificar
                        puntuacions, valor de mercat i rendiment dels jugadors.
                    </p>

                    <Link to="/dashboard" className="admin-puntuacions-back">
                        Tornar al dashboard
                    </Link>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page admin-puntuacions-page">
            <section className="admin-puntuacions-header">
                <div>
                    <span className="admin-puntuacions-kicker">Panell d’administració</span>
                    <h1>Puntuacions dels jugadors</h1>
                    <p>
                        Gestiona els punts totals, la puntuació de l’última jornada i el valor
                        de mercat dels jugadors.
                    </p>
                </div>

                <Link to="/dashboard" className="admin-puntuacions-back">
                    Tornar al dashboard
                </Link>
            </section>

            {modeDemo && (
                <div className="admin-puntuacions-alert">
                    Mode demo actiu: encara no hi ha endpoint de backend connectat per a jugadors.
                    Els canvis es veuen al frontend però no es guarden a la base de dades.
                </div>
            )}

            {missatge && (
                <div className="admin-puntuacions-message">
                    {missatge}
                </div>
            )}

            <section className="admin-puntuacions-toolbar">
                <div className="admin-puntuacions-search">
                    <label htmlFor="cerca">Cercar jugador</label>
                    <input
                        id="cerca"
                        type="text"
                        value={cerca}
                        onChange={(event) => setCerca(event.target.value)}
                        placeholder="Nom, equip o posició..."
                    />
                </div>

                <div className="admin-puntuacions-filter">
                    <label htmlFor="posicio">Filtrar per posició</label>
                    <select
                        id="posicio"
                        value={posicio}
                        onChange={(event) => setPosicio(event.target.value)}
                    >
                        <option value="totes">Totes</option>
                        <option value="PT">Porters</option>
                        <option value="DEF">Defenses</option>
                        <option value="MIG">Migcampistes</option>
                        <option value="DAV">Davanters</option>
                    </select>
                </div>
            </section>

            <section className="admin-puntuacions-stats">
                <article>
                    <span>Jugadors</span>
                    <strong>{jugadors.length}</strong>
                </article>

                <article>
                    <span>Mitjana punts totals</span>
                    <strong>
                        {jugadors.length > 0
                            ? Math.round(
                                jugadors.reduce(
                                    (total, jugador) => total + Number(jugador.puntuacio_total || 0),
                                    0
                                ) / jugadors.length
                            )
                            : 0}
                    </strong>
                </article>

                <article>
                    <span>Valor total mercat</span>
                    <strong>
                        {formatMoney(
                            jugadors.reduce(
                                (total, jugador) => total + Number(jugador.valor_mercat || 0),
                                0
                            )
                        )}
                    </strong>
                </article>
            </section>

            {loading ? (
                <section className="admin-puntuacions-loading">
                    Carregant jugadors...
                </section>
            ) : (
                <section className="admin-puntuacions-list">
                    {jugadorsFiltrats.map((jugador) => (
                        <article className="admin-jugador-card" key={jugador.id}>
                            <div className="admin-jugador-info">
                                <div className="admin-jugador-avatar">
                                    {jugador.nom.charAt(0).toUpperCase()}
                                </div>

                                <div>
                                    <h2>{jugador.nom}</h2>
                                    <p>{jugador.equip}</p>
                                    <span>{jugador.posicio}</span>
                                </div>
                            </div>

                            <div className="admin-jugador-current">
                                <div>
                                    <span>Valor actual</span>
                                    <strong>{formatMoney(jugador.valor_mercat)}</strong>
                                </div>

                                <div>
                                    <span>Total</span>
                                    <strong>{jugador.puntuacio_total}</strong>
                                </div>

                                <div>
                                    <span>Jornada</span>
                                    <strong>{jugador.puntuacio_jornada}</strong>
                                </div>
                            </div>

                            <div className="admin-jugador-form">
                                <label>
                                    Valor mercat
                                    <input
                                        type="number"
                                        min="0"
                                        value={editValues[jugador.id]?.valor_mercat ?? 0}
                                        onChange={(event) =>
                                            handleChange(
                                                jugador.id,
                                                'valor_mercat',
                                                event.target.value
                                            )
                                        }
                                    />
                                </label>

                                <label>
                                    Punts totals
                                    <input
                                        type="number"
                                        value={editValues[jugador.id]?.puntuacio_total ?? 0}
                                        onChange={(event) =>
                                            handleChange(
                                                jugador.id,
                                                'puntuacio_total',
                                                event.target.value
                                            )
                                        }
                                    />
                                </label>

                                <label>
                                    Última jornada
                                    <input
                                        type="number"
                                        value={editValues[jugador.id]?.puntuacio_jornada ?? 0}
                                        onChange={(event) =>
                                            handleChange(
                                                jugador.id,
                                                'puntuacio_jornada',
                                                event.target.value
                                            )
                                        }
                                    />
                                </label>

                                <button
                                    type="button"
                                    onClick={() => handleGuardar(jugador)}
                                    disabled={savingId === jugador.id}
                                >
                                    {savingId === jugador.id ? 'Guardant...' : 'Guardar'}
                                </button>
                            </div>
                        </article>
                    ))}

                    {jugadorsFiltrats.length === 0 && (
                        <div className="admin-puntuacions-empty">
                            No s’ha trobat cap jugador amb aquests filtres.
                        </div>
                    )}
                </section>
            )}
        </main>
    )
}

export default AdminPuntuacions