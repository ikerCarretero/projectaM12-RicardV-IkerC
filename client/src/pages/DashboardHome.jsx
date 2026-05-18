import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import { puntuacionsLocalService } from '../services/puntuacionsLocalService'
import './DashboardHome.css'

function DashboardHome() {
    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'

    const lligaActiva = lligaActivaService.obtenir()

    const jugadorsFitxats = lligaActiva
        ? puntuacionsLocalService.actualitzarPuntsTotalsPlantilla()
        : []

    const pressupost = lligaActiva
        ? equipFantasyLocalService.getPressupost()
        : 0

    const jornades = lligaActiva
        ? puntuacionsLocalService.getJornades()
        : []

    const valorPlantilla = jugadorsFitxats.reduce(
        (total, jugador) => total + Number(jugador.valor_mercat || 0),
        0
    )

    const puntsTotals = jugadorsFitxats.reduce(
        (total, jugador) => total + Number(jugador.punts || 0),
        0
    )

    const porters = comptarPerPosicio(jugadorsFitxats, ['porter', 'portero', 'pt'])
    const defenses = comptarPerPosicio(jugadorsFitxats, ['defensa', 'def'])
    const migcampistes = comptarPerPosicio(jugadorsFitxats, [
        'migcampista',
        'mig',
        'centrocampista',
    ])
    const davanters = comptarPerPosicio(jugadorsFitxats, [
        'davanter',
        'delantero',
        'dav',
        'forward',
    ])

    const historialJornades = jornades.map((jornada) => {
        const puntuacionsJornada =
            puntuacionsLocalService.getPuntuacionsJornada(
                jornada.id,
                jugadorsFitxats
            )

        const punts = puntuacionsJornada.reduce(
            (total, item) => total + Number(item.punts || 0),
            0
        )

        const jugadorsPuntuats = puntuacionsJornada.filter(
            (item) => Number(item.punts || 0) !== 0
        ).length

        return {
            ...jornada,
            punts,
            jugadorsPuntuats,
            totalJugadors: puntuacionsJornada.length,
        }
    })

    const ultimaJornada =
        historialJornades.length > 0
            ? historialJornades[historialJornades.length - 1]
            : null

    const millorJugador = [...jugadorsFitxats].sort(
        (a, b) => Number(b.punts || 0) - Number(a.punts || 0)
    )[0]

    const jugadorsPuntuatsTotals = jugadorsFitxats.filter(
        (jugador) => Number(jugador.punts || 0) !== 0
    ).length

    const nomUsuari =
        usuari?.nom ||
        usuari?.name ||
        usuari?.email?.split('@')[0] ||
        (esGuest ? 'Guest' : 'Usuari')

    return (
        <main className="app-page dashboard-page">
            <section className="dashboard-hero">
                <div>
                    <span className="dashboard-kicker">Panell principal</span>

                    <h1>Dashboard</h1>

                    <p>
                        Visió ràpida del teu estat fantasy, equip, pressupost,
                        puntuacions i lliga activa.
                    </p>
                </div>

                <div className="dashboard-user-pill">
                    <span>Usuari</span>
                    <strong>{nomUsuari}</strong>
                </div>
            </section>

            <section className="dashboard-stats-grid">
                <article className="dashboard-stat-card">
                    <span>Pressupost</span>
                    <strong>{formatMoney(pressupost)}</strong>
                </article>

                <article className="dashboard-stat-card">
                    <span>Jugadors fitxats</span>
                    <strong>{jugadorsFitxats.length}</strong>
                </article>

                <article className="dashboard-stat-card">
                    <span>Punts totals</span>
                    <strong>{puntsTotals}</strong>
                </article>

                <article className="dashboard-stat-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva ? lligaActiva.nom : 'Cap'}</strong>
                </article>
            </section>

            {!lligaActiva ? (
                <section className="dashboard-empty-card">
                    <span className="dashboard-kicker">Fantasy privat</span>

                    <h2>Encara no tens cap lliga activa</h2>

                    <p>
                        Selecciona una lliga privada o crea’n una de nova per activar
                        el teu mercat, plantilla, puntuacions i alineació.
                    </p>

                    <div className="dashboard-actions">
                        <Link to="/lligues" className="dashboard-main-btn">
                            Veure lligues
                        </Link>

                        <Link to="/crear-lliga" className="dashboard-secondary-btn">
                            Crear lliga
                        </Link>
                    </div>
                </section>
            ) : (
                <>
                    <section className="dashboard-main-grid">
                        <article className="dashboard-card dashboard-summary-card">
                            <span className="dashboard-kicker">Resum ràpid</span>

                            <h2>El teu estat actual</h2>

                            <div className="dashboard-info-list">
                                <div>
                                    <span>Equip</span>
                                    <strong>
                                        {jugadorsFitxats.length > 0
                                            ? `${jugadorsFitxats.length} jugadors`
                                            : 'Sense plantilla'}
                                    </strong>
                                </div>

                                <div>
                                    <span>Punts acumulats</span>
                                    <strong>{puntsTotals}</strong>
                                </div>

                                <div>
                                    <span>Valor plantilla</span>
                                    <strong>{formatMoney(valorPlantilla)}</strong>
                                </div>

                                <div>
                                    <span>Jugadors puntuats</span>
                                    <strong>
                                        {jugadorsPuntuatsTotals}/{jugadorsFitxats.length}
                                    </strong>
                                </div>
                            </div>

                            <div className="dashboard-actions">
                                <Link to="/mercat" className="dashboard-main-btn">
                                    Anar al mercat
                                </Link>

                                <Link to="/alineacio" className="dashboard-secondary-btn">
                                    Preparar alineació
                                </Link>
                            </div>
                        </article>

                        <article className="dashboard-card dashboard-league-card">
                            <span className="dashboard-kicker">Lliga activa</span>

                            <h2>{lligaActiva.nom}</h2>

                            <p>
                                Aquesta és la lliga que s’està utilitzant per calcular
                                el teu pressupost, plantilla, mercat, puntuacions i
                                alineació.
                            </p>

                            <div className="dashboard-league-code">
                                <span>Codi</span>
                                <strong>
                                    {lligaActiva.codi ||
                                        lligaActiva.codi_invitacio ||
                                        'Sense codi'}
                                </strong>
                            </div>

                            <Link to="/lligues" className="dashboard-secondary-btn">
                                Canviar lliga
                            </Link>
                        </article>
                    </section>

                    <section className="dashboard-main-grid">
                        <article className="dashboard-card">
                            <span className="dashboard-kicker">Puntuacions</span>

                            <h2>Resum de rendiment</h2>

                            <div className="dashboard-info-list">
                                <div>
                                    <span>Millor jugador</span>
                                    <strong>
                                        {millorJugador && Number(millorJugador.punts || 0) > 0
                                            ? `${obtenirNomCurt(millorJugador.nom)} · ${millorJugador.punts} pts`
                                            : 'Encara sense punts'}
                                    </strong>
                                </div>

                                <div>
                                    <span>Última jornada</span>
                                    <strong>
                                        {ultimaJornada
                                            ? `${ultimaJornada.nom} · ${ultimaJornada.punts} pts`
                                            : 'Sense jornades'}
                                    </strong>
                                </div>

                                <div>
                                    <span>Jornades creades</span>
                                    <strong>{historialJornades.length}</strong>
                                </div>

                                <div>
                                    <span>Mitjana de punts</span>
                                    <strong>
                                        {historialJornades.length > 0
                                            ? Math.round(puntsTotals / historialJornades.length)
                                            : 0}
                                    </strong>
                                </div>
                            </div>

                            <div className="dashboard-actions">
                                <Link to="/rankings" className="dashboard-main-btn">
                                    Veure rankings
                                </Link>

                                <Link
                                    to="/admin/puntuacions"
                                    className="dashboard-secondary-btn"
                                >
                                    Gestionar punts
                                </Link>
                            </div>
                        </article>

                        <article className="dashboard-card">
                            <span className="dashboard-kicker">Jornades</span>

                            <h2>Últimes puntuacions</h2>

                            <div className="dashboard-round-list">
                                {historialJornades.length > 0 ? (
                                    historialJornades
                                        .slice()
                                        .reverse()
                                        .slice(0, 3)
                                        .map((jornada) => (
                                            <div key={jornada.id}>
                                                <div>
                                                    <strong>{jornada.nom}</strong>
                                                    <span>
                                                        {jornada.jugadorsPuntuats}/
                                                        {jornada.totalJugadors} jugadors puntuats
                                                    </span>
                                                </div>

                                                <em>{jornada.punts} pts</em>
                                            </div>
                                        ))
                                ) : (
                                    <div>
                                        <div>
                                            <strong>Sense jornades</strong>
                                            <span>
                                                Encara no hi ha puntuacions guardades.
                                            </span>
                                        </div>

                                        <em>0 pts</em>
                                    </div>
                                )}
                            </div>
                        </article>
                    </section>

                    <section className="dashboard-main-grid">
                        <article className="dashboard-card">
                            <span className="dashboard-kicker">Distribució</span>

                            <h2>Plantilla per posicions</h2>

                            <div className="dashboard-position-grid">
                                <div>
                                    <span>Porters</span>
                                    <strong>{porters}</strong>
                                </div>

                                <div>
                                    <span>Defenses</span>
                                    <strong>{defenses}</strong>
                                </div>

                                <div>
                                    <span>Migcampistes</span>
                                    <strong>{migcampistes}</strong>
                                </div>

                                <div>
                                    <span>Davanters</span>
                                    <strong>{davanters}</strong>
                                </div>
                            </div>
                        </article>

                        <article className="dashboard-card">
                            <span className="dashboard-kicker">Accions ràpides</span>

                            <h2>Continua la gestió</h2>

                            <div className="dashboard-quick-actions">
                                <Link to="/equip">Veure plantilla</Link>
                                <Link to="/mercat">Fitxar jugadors</Link>
                                <Link to="/alineacio">Editar alineació</Link>
                                <Link to="/rankings">Consultar rànquings</Link>
                            </div>
                        </article>
                    </section>
                </>
            )}
        </main>
    )
}

const comptarPerPosicio = (jugadors, valors) => {
    return jugadors.filter((jugador) => {
        const posicio = String(jugador.posicio || '').toLowerCase()

        return valors.some((valor) => posicio.includes(valor))
    }).length
}

const obtenirNomCurt = (nom) => {
    if (!nom) return 'Cap'

    const parts = nom.trim().split(/\s+/)

    if (parts.length === 1) {
        return parts[0]
    }

    return `${parts[0].charAt(0).toUpperCase()}. ${parts.slice(1).join(' ')}`
}

const formatMoney = (value) => {
    const numberValue = Number(value || 0)

    return new Intl.NumberFormat('ca-ES', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0,
    }).format(numberValue)
}

export default DashboardHome