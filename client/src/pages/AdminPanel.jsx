import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { adminLocalService } from '../services/adminLocalService'
import './AdminPanel.css'

function AdminPanel() {
    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const rol = String(usuari?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin'

    const lligaActiva = lligaActivaService.obtenir()

    const [jugadors, setJugadors] = useState([])
    const [jornades, setJornades] = useState([])
    const [usuaris, setUsuaris] = useState([])
    const [jornadaNom, setJornadaNom] = useState('')
    const [missatge, setMissatge] = useState('')

    useEffect(() => {
        setJugadors(adminLocalService.getJugadors())
        setJornades(adminLocalService.getJornades())
        setUsuaris(adminLocalService.getUsuaris())
    }, [])

    const stats = useMemo(() => {
        const puntsTotals = jugadors.reduce(
            (total, jugador) => total + Number(jugador.punts || 0),
            0
        )

        const usuarisSancionats = usuaris.filter(
            (usuari) => usuari.estat === 'sancionat'
        ).length

        return {
            jugadors: jugadors.length,
            jornades: jornades.length,
            usuaris: usuaris.length,
            puntsTotals,
            usuarisSancionats,
        }
    }, [jugadors, jornades, usuaris])

    const actualitzarCampJugador = (jugadorId, camp, valor) => {
        setJugadors((prev) =>
            prev.map((jugador) =>
                String(jugador.id) === String(jugadorId)
                    ? {
                        ...jugador,
                        [camp]: valor,
                    }
                    : jugador
            )
        )
    }

    const guardarJugador = (jugador) => {
        const jugadorsActualitzats = adminLocalService.actualitzarJugador(jugador)

        setJugadors(jugadorsActualitzats)
        mostrarMissatge(`${jugador.nom} actualitzat correctament.`)
    }

    const crearJornada = () => {
        const novesJornades = adminLocalService.crearJornada(jornadaNom)

        setJornades(novesJornades)
        setJornadaNom('')
        mostrarMissatge('Jornada creada correctament.')
    }

    const canviarEstatJornada = (jornadaId) => {
        const novesJornades = adminLocalService.canviarEstatJornada(jornadaId)

        setJornades(novesJornades)
        mostrarMissatge('Estat de la jornada actualitzat.')
    }

    const canviarEstatUsuari = (usuariId) => {
        const nousUsuaris = adminLocalService.canviarEstatUsuari(usuariId)

        setUsuaris(nousUsuaris)
        mostrarMissatge('Estat de l’usuari actualitzat.')
    }

    const canviarPremium = (usuariId) => {
        const nousUsuaris = adminLocalService.canviarPremium(usuariId)

        setUsuaris(nousUsuaris)
        mostrarMissatge('Subscripció premium actualitzada.')
    }

    const aplicarDiners = (usuariId, quantitat) => {
        const nousUsuaris = adminLocalService.aplicarDiners(usuariId, quantitat)

        setUsuaris(nousUsuaris)

        if (quantitat > 0) {
            mostrarMissatge(`S’han afegit ${formatMoney(quantitat)} a l’usuari.`)
        } else {
            mostrarMissatge(`S’han restat ${formatMoney(Math.abs(quantitat))} a l’usuari.`)
        }
    }

    const mostrarMissatge = (text) => {
        setMissatge(text)

        setTimeout(() => {
            setMissatge('')
        }, 2200)
    }

    if (!esAdmin) {
        return (
            <main className="app-page admin-page">
                <section className="admin-empty">
                    <span className="admin-kicker">Accés restringit</span>

                    <h1>No tens permisos d’administrador</h1>

                    <p>
                        Aquesta zona només està disponible per usuaris amb rol
                        administrador.
                    </p>

                    <Link to="/dashboard" className="admin-secondary-btn">
                        Tornar al dashboard
                    </Link>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page admin-page">
            <section className="admin-header">
                <div>
                    <span className="admin-kicker">Panell d’administració</span>

                    <h1>Admin</h1>

                    <p>
                        Gestiona jugadors, puntuacions, jornades, usuaris,
                        sancions i bonificacions de la lliga activa.
                    </p>
                </div>

                <div className="admin-header-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva?.nom || 'Cap lliga'}</strong>

                    <Link to="/lligues">Canviar lliga</Link>
                </div>
            </section>

            {missatge && (
                <div className="admin-alert admin-alert-success">
                    {missatge}
                </div>
            )}

            <section className="admin-stats-grid">
                <article>
                    <span>Jugadors editables</span>
                    <strong>{stats.jugadors}</strong>
                </article>

                <article>
                    <span>Jornades</span>
                    <strong>{stats.jornades}</strong>
                </article>

                <article>
                    <span>Usuaris</span>
                    <strong>{stats.usuaris}</strong>
                </article>

                <article>
                    <span>Sancionats</span>
                    <strong>{stats.usuarisSancionats}</strong>
                </article>
            </section>

            <section className="admin-main-grid">
                <article className="admin-card admin-wide-card">
                    <div className="admin-section-title">
                        <div>
                            <span className="admin-kicker">Jugadors</span>
                            <h2>Edició de jugadors</h2>
                        </div>

                        <Link to="/puntuacions" className="admin-secondary-btn">
                            Puntuacions
                        </Link>
                    </div>

                    <div className="admin-players-list">
                        {jugadors.map((jugador) => (
                            <div className="admin-player-row" key={jugador.id}>
                                <div className="admin-player-avatar">
                                    {jugador.foto ? (
                                        <img src={jugador.foto} alt={jugador.nom} />
                                    ) : (
                                        jugador.nom.charAt(0).toUpperCase()
                                    )}
                                </div>

                                <div className="admin-field">
                                    <label>Nom</label>
                                    <input
                                        value={jugador.nom}
                                        onChange={(event) =>
                                            actualitzarCampJugador(
                                                jugador.id,
                                                'nom',
                                                event.target.value
                                            )
                                        }
                                    />
                                </div>

                                <div className="admin-field">
                                    <label>Foto URL</label>
                                    <input
                                        value={jugador.foto || ''}
                                        placeholder="https://..."
                                        onChange={(event) =>
                                            actualitzarCampJugador(
                                                jugador.id,
                                                'foto',
                                                event.target.value
                                            )
                                        }
                                    />
                                </div>

                                <div className="admin-field compact">
                                    <label>Valor</label>
                                    <input
                                        type="number"
                                        value={jugador.valor_mercat}
                                        onChange={(event) =>
                                            actualitzarCampJugador(
                                                jugador.id,
                                                'valor_mercat',
                                                event.target.value
                                            )
                                        }
                                    />
                                </div>

                                <div className="admin-field compact">
                                    <label>Punts</label>
                                    <input
                                        type="number"
                                        value={jugador.punts}
                                        onChange={(event) =>
                                            actualitzarCampJugador(
                                                jugador.id,
                                                'punts',
                                                event.target.value
                                            )
                                        }
                                    />
                                </div>

                                <button
                                    type="button"
                                    className="admin-main-btn"
                                    onClick={() => guardarJugador(jugador)}
                                >
                                    Guardar
                                </button>
                            </div>
                        ))}
                    </div>
                </article>

                <article className="admin-card">
                    <span className="admin-kicker">Jornades</span>

                    <h2>Gestionar jornades</h2>

                    <div className="admin-create-round">
                        <input
                            value={jornadaNom}
                            placeholder="Ex: Jornada 2"
                            onChange={(event) => setJornadaNom(event.target.value)}
                        />

                        <button
                            type="button"
                            className="admin-main-btn"
                            onClick={crearJornada}
                        >
                            Afegir
                        </button>
                    </div>

                    <div className="admin-round-list">
                        {jornades.map((jornada) => (
                            <div className="admin-round-item" key={jornada.id}>
                                <div>
                                    <strong>{jornada.nom}</strong>
                                    <span>{jornada.data}</span>
                                </div>

                                <button
                                    type="button"
                                    className={
                                        jornada.estat === 'oberta'
                                            ? 'admin-state-btn open'
                                            : 'admin-state-btn closed'
                                    }
                                    onClick={() => canviarEstatJornada(jornada.id)}
                                >
                                    {jornada.estat}
                                </button>
                            </div>
                        ))}
                    </div>
                </article>
            </section>

            <section className="admin-card">
                <div className="admin-section-title">
                    <div>
                        <span className="admin-kicker">Usuaris</span>
                        <h2>Gestió d’usuaris</h2>
                    </div>

                    <small>
                        Sancions, premium i ajustos de pressupost per demostració.
                    </small>
                </div>

                <div className="admin-users-grid">
                    {usuaris.map((item) => (
                        <article className="admin-user-card" key={item.id}>
                            <div className="admin-user-top">
                                <div className="admin-user-avatar">
                                    {item.nom.charAt(0).toUpperCase()}
                                </div>

                                <div>
                                    <h3>{item.nom}</h3>
                                    <p>{item.email}</p>
                                </div>
                            </div>

                            <div className="admin-user-info">
                                <div>
                                    <span>Rol</span>
                                    <strong>{item.rol}</strong>
                                </div>

                                <div>
                                    <span>Estat</span>
                                    <strong>{item.estat}</strong>
                                </div>

                                <div>
                                    <span>Premium</span>
                                    <strong>{item.premium ? 'Sí' : 'No'}</strong>
                                </div>

                                <div>
                                    <span>Diners extra</span>
                                    <strong>{formatMoney(item.diners_extra || 0)}</strong>
                                </div>
                            </div>

                            <div className="admin-user-actions">
                                <button
                                    type="button"
                                    className="admin-secondary-btn"
                                    onClick={() => aplicarDiners(item.id, 10000000)}
                                >
                                    +10M
                                </button>

                                <button
                                    type="button"
                                    className="admin-secondary-btn"
                                    onClick={() => aplicarDiners(item.id, -10000000)}
                                >
                                    -10M
                                </button>

                                <button
                                    type="button"
                                    className="admin-secondary-btn"
                                    onClick={() => canviarPremium(item.id)}
                                >
                                    Premium
                                </button>

                                <button
                                    type="button"
                                    className={
                                        item.estat === 'sancionat'
                                            ? 'admin-user-danger-btn active'
                                            : 'admin-user-danger-btn'
                                    }
                                    onClick={() => canviarEstatUsuari(item.id)}
                                >
                                    {item.estat === 'sancionat'
                                        ? 'Activar'
                                        : 'Sancionar'}
                                </button>
                            </div>
                        </article>
                    ))}
                </div>
            </section>
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

export default AdminPanel