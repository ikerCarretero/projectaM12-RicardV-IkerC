import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import { puntuacionsLocalService } from '../services/puntuacionsLocalService'
import './AdminPuntuacions.css'

function AdminPuntuacions() {
    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const rol = String(usuari?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin' || rol === 'administrador'

    const [lligaActiva, setLligaActiva] = useState(null)
    const [jornades, setJornades] = useState([])
    const [jornadaId, setJornadaId] = useState('')
    const [jornadaNom, setJornadaNom] = useState('')
    const [jugadors, setJugadors] = useState([])
    const [puntuacions, setPuntuacions] = useState([])
    const [missatge, setMissatge] = useState('')
    const [error, setError] = useState('')

    useEffect(() => {
        const lliga = lligaActivaService.obtenir()
        setLligaActiva(lliga)

        if (!lliga || !esAdmin) {
            return
        }

        const equipInicial = equipFantasyLocalService.assegurarEquipInicial()
        const jugadorsEquip = equipInicial.jugadors
        const jornadesGuardades = puntuacionsLocalService.getJornades()

        setJugadors(jugadorsEquip)
        setJornades(jornadesGuardades)

        if (jornadesGuardades.length > 0) {
            setJornadaId(String(jornadesGuardades[0].id))
            setPuntuacions(
                puntuacionsLocalService.getPuntuacionsJornada(
                    jornadesGuardades[0].id,
                    jugadorsEquip
                )
            )
        }
    }, [esAdmin])

    useEffect(() => {
        if (!jornadaId || jugadors.length === 0) {
            return
        }

        setPuntuacions(
            puntuacionsLocalService.getPuntuacionsJornada(jornadaId, jugadors)
        )
    }, [jornadaId, jugadors])

    const jornadaActual = jornades.find(
        (jornada) => String(jornada.id) === String(jornadaId)
    )

    const resum = useMemo(() => {
        const puntsTotals = puntuacions.reduce(
            (total, item) => total + Number(item.punts || 0),
            0
        )

        const jugadorsPuntuats = puntuacions.filter(
            (item) => Number(item.punts || 0) !== 0
        ).length

        return {
            puntsTotals,
            jugadorsPuntuats,
            totalJugadors: puntuacions.length,
        }
    }, [puntuacions])

    const actualitzarPuntuacio = (jugadorId, camp, valor) => {
        setPuntuacions((prev) =>
            prev.map((item) =>
                String(item.jugador_id) === String(jugadorId)
                    ? {
                        ...item,
                        [camp]: camp === 'punts' ? Number(valor) : valor,
                    }
                    : item
            )
        )
    }

    const guardarPuntuacions = () => {
        if (!jornadaId) {
            setError('Has de seleccionar una jornada.')
            return
        }

        try {
            const puntuacionsActualitzades =
                puntuacionsLocalService.guardarPuntuacionsJornada(
                    jornadaId,
                    puntuacions
                )

            const jugadorsActualitzats = equipFantasyLocalService.getJugadorsFitxats()

            setPuntuacions(puntuacionsActualitzades)
            setJugadors(jugadorsActualitzats)
            setMissatge('Puntuacions guardades correctament.')
            setError('')

            setTimeout(() => {
                setMissatge('')
            }, 2200)
        } catch (err) {
            setError(err.message || 'No s’han pogut guardar les puntuacions.')
            setMissatge('')
        }
    }

    const crearJornada = () => {
        try {
            const novesJornades = puntuacionsLocalService.crearJornada(jornadaNom)

            setJornades(novesJornades)
            setJornadaNom('')

            if (novesJornades.length > 0) {
                const ultima = novesJornades[novesJornades.length - 1]
                setJornadaId(String(ultima.id))
            }

            setMissatge('Jornada creada correctament.')
            setError('')

            setTimeout(() => {
                setMissatge('')
            }, 2200)
        } catch (err) {
            setError(err.message || 'No s’ha pogut crear la jornada.')
        }
    }

    const canviarEstatJornada = () => {
        if (!jornadaId) {
            return
        }

        const jornadesActualitzades =
            puntuacionsLocalService.canviarEstatJornada(jornadaId)

        setJornades(jornadesActualitzades)
        setMissatge('Estat de la jornada actualitzat.')

        setTimeout(() => {
            setMissatge('')
        }, 2200)
    }

    if (!esAdmin) {
        return (
            <main className="app-page admin-puntuacions-page">
                <section className="admin-puntuacions-empty">
                    <span className="admin-puntuacions-kicker">Accés restringit</span>

                    <h1>No tens permisos d’administrador</h1>

                    <p>
                        Només els administradors poden gestionar les puntuacions de
                        les jornades.
                    </p>

                    <Link to="/dashboard" className="admin-puntuacions-secondary-btn">
                        Tornar al dashboard
                    </Link>
                </section>
            </main>
        )
    }

    if (!lligaActiva) {
        return (
            <main className="app-page admin-puntuacions-page">
                <section className="admin-puntuacions-empty">
                    <span className="admin-puntuacions-kicker">Puntuacions</span>

                    <h1>Abans has d’escollir una lliga</h1>

                    <p>
                        Per assignar puntuacions has d’entrar primer a una lliga
                        privada activa.
                    </p>

                    <Link to="/lligues" className="admin-puntuacions-main-btn">
                        Anar a lligues
                    </Link>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page admin-puntuacions-page">
            <section className="admin-puntuacions-header">
                <div>
                    <span className="admin-puntuacions-kicker">
                        Puntuacions de jornada
                    </span>

                    <h1>Gestió de puntuacions</h1>

                    <p>
                        Assigna punts als jugadors de la lliga activa per jornada.
                        Aquests punts s’utilitzaran per calcular rankings, equip i
                        alineació.
                    </p>
                </div>

                <div className="admin-puntuacions-header-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva.nom}</strong>

                    <Link to="/lligues">Canviar lliga</Link>
                </div>
            </section>

            {missatge && (
                <div className="admin-puntuacions-alert success">
                    {missatge}
                </div>
            )}

            {error && (
                <div className="admin-puntuacions-alert error">
                    {error}
                </div>
            )}

            <section className="admin-puntuacions-stats-grid">
                <article>
                    <span>Jornada</span>
                    <strong>{jornadaActual?.nom || 'Cap'}</strong>
                </article>

                <article>
                    <span>Estat</span>
                    <strong>{jornadaActual?.estat || '-'}</strong>
                </article>

                <article>
                    <span>Jugadors puntuats</span>
                    <strong>
                        {resum.jugadorsPuntuats}/{resum.totalJugadors}
                    </strong>
                </article>

                <article>
                    <span>Punts jornada</span>
                    <strong>{resum.puntsTotals}</strong>
                </article>
            </section>

            <section className="admin-puntuacions-toolbar">
                <div className="admin-puntuacions-field">
                    <label>Seleccionar jornada</label>
                    <select
                        value={jornadaId}
                        onChange={(event) => setJornadaId(event.target.value)}
                    >
                        {jornades.map((jornada) => (
                            <option key={jornada.id} value={jornada.id}>
                                {jornada.nom} - {jornada.estat}
                            </option>
                        ))}
                    </select>
                </div>

                <button
                    type="button"
                    className="admin-puntuacions-secondary-btn"
                    onClick={canviarEstatJornada}
                    disabled={!jornadaId}
                >
                    Obrir / tancar jornada
                </button>

                <div className="admin-puntuacions-create">
                    <input
                        value={jornadaNom}
                        placeholder="Ex: Jornada 4"
                        onChange={(event) => setJornadaNom(event.target.value)}
                    />

                    <button
                        type="button"
                        className="admin-puntuacions-main-btn"
                        onClick={crearJornada}
                    >
                        Crear jornada
                    </button>
                </div>
            </section>

            <section className="admin-puntuacions-card">
                <div className="admin-puntuacions-section-title">
                    <div>
                        <span className="admin-puntuacions-kicker">
                            Jugadors
                        </span>

                        <h2>Punts per jugador</h2>
                    </div>

                    <button
                        type="button"
                        className="admin-puntuacions-main-btn"
                        onClick={guardarPuntuacions}
                    >
                        Guardar puntuacions
                    </button>
                </div>

                <div className="admin-puntuacions-table">
                    <div className="admin-puntuacions-table-head">
                        <span>Jugador</span>
                        <span>Posició</span>
                        <span>Valor</span>
                        <span>Punts</span>
                        <span>Observacions</span>
                    </div>

                    {puntuacions.map((item) => (
                        <div
                            className="admin-puntuacions-row"
                            key={item.jugador_id}
                        >
                            <div className="admin-puntuacions-player">
                                <div className="admin-puntuacions-avatar">
                                    {item.nom.charAt(0).toUpperCase()}
                                </div>

                                <div>
                                    <strong>{item.nom}</strong>
                                    <small>{item.equip}</small>
                                </div>
                            </div>

                            <span>{normalitzarTextPosicio(item.posicio)}</span>

                            <span>{formatMoney(item.valor_mercat)}</span>

                            <input
                                type="number"
                                value={item.punts}
                                onChange={(event) =>
                                    actualitzarPuntuacio(
                                        item.jugador_id,
                                        'punts',
                                        event.target.value
                                    )
                                }
                            />

                            <input
                                value={item.observacions}
                                placeholder="Ex: gol, assistència..."
                                onChange={(event) =>
                                    actualitzarPuntuacio(
                                        item.jugador_id,
                                        'observacions',
                                        event.target.value
                                    )
                                }
                            />
                        </div>
                    ))}
                </div>
            </section>
        </main>
    )
}

const normalitzarTextPosicio = (posicio) => {
    const value = String(posicio || '').toLowerCase()

    if (value.includes('porter') || value.includes('portero')) return 'Porter'
    if (value.includes('def')) return 'Defensa'
    if (value.includes('mig') || value.includes('centro')) return 'Migcampista'
    if (value.includes('dav') || value.includes('delantero')) return 'Davanter'

    return posicio || 'Jugador'
}

const formatMoney = (value) => {
    const numberValue = Number(value || 0)

    return new Intl.NumberFormat('ca-ES', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0,
    }).format(numberValue)
}

export default AdminPuntuacions