import { useMemo } from 'react'
import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import { puntuacionsLocalService } from '../services/puntuacionsLocalService'
import './Rankings.css'

function Rankings() {
    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'
    const lligaActiva = lligaActivaService.obtenir()

    const jugadorsActualitzats = lligaActiva
        ? puntuacionsLocalService.actualitzarPuntsTotalsPlantilla()
        : []

    const jugadors = lligaActiva
        ? jugadorsActualitzats
        : []

    const pressupost = lligaActiva
        ? equipFantasyLocalService.getPressupost()
        : 0

    const jornades = lligaActiva
        ? puntuacionsLocalService.getJornades()
        : []

    const nomUsuari =
        usuari?.nom ||
        usuari?.name ||
        usuari?.email?.split('@')[0] ||
        (esGuest ? 'Guest' : 'Usuari')

    const puntsTotals = jugadors.reduce(
        (total, jugador) => total + Number(jugador.punts || 0),
        0
    )

    const valorPlantilla = jugadors.reduce(
        (total, jugador) => total + Number(jugador.valor_mercat || 0),
        0
    )

    const historialJornades = useMemo(() => {
        if (!lligaActiva) {
            return []
        }

        return jornades.map((jornada) => {
            const puntuacionsJornada =
                puntuacionsLocalService.getPuntuacionsJornada(jornada.id, jugadors)

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
    }, [lligaActiva, jornades, jugadors])

    const millorJugador = useMemo(() => {
        return [...jugadors].sort(
            (a, b) => Number(b.punts || 0) - Number(a.punts || 0)
        )[0]
    }, [jugadors])

    const classificacio = generarClassificacioDemo({
        nomUsuari,
        puntsTotals,
        valorPlantilla,
        pressupost,
        jugadors: jugadors.length,
    })

    const posicioUsuari =
        classificacio.findIndex((item) => item.esUsuariActual) + 1

    if (!lligaActiva) {
        return (
            <main className="app-page rankings-page">
                <section className="rankings-empty">
                    <span className="rankings-kicker">Classificació</span>

                    <h1>Encara no tens cap lliga activa</h1>

                    <p>
                        Per veure el rànquing has d’entrar primer a una lliga privada.
                        La classificació es calcularà segons els punts dels equips fantasy.
                    </p>

                    <div className="rankings-actions">
                        <Link to="/lligues" className="rankings-main-btn">
                            Anar a lligues
                        </Link>

                        <Link to="/crear-lliga" className="rankings-secondary-btn">
                            Crear lliga
                        </Link>
                    </div>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page rankings-page">
            <section className="rankings-header">
                <div>
                    <span className="rankings-kicker">Classificació fantasy</span>

                    <h1>Rankings</h1>

                    <p>
                        Consulta la classificació de la lliga activa, els punts totals,
                        el valor de plantilla i l’evolució de cada jornada.
                    </p>
                </div>

                <div className="rankings-header-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva.nom}</strong>

                    <Link to="/lligues">Canviar lliga</Link>
                </div>
            </section>

            <section className="rankings-stats-grid">
                <article>
                    <span>La teva posició</span>
                    <strong>{posicioUsuari}º</strong>
                </article>

                <article>
                    <span>Punts totals</span>
                    <strong>{puntsTotals}</strong>
                </article>

                <article>
                    <span>Valor plantilla</span>
                    <strong>{formatMoney(valorPlantilla)}</strong>
                </article>

                <article>
                    <span>Millor jugador</span>
                    <strong>
                        {millorJugador ? obtenirNomCurt(millorJugador.nom) : 'Cap'}
                    </strong>
                </article>
            </section>

            <section className="rankings-main-grid">
                <article className="rankings-card rankings-table-card">
                    <div className="rankings-section-title">
                        <div>
                            <span className="rankings-kicker">Lliga activa</span>
                            <h2>Classificació general</h2>
                        </div>

                        <small>Temporada 2025-2026</small>
                    </div>

                    <div className="rankings-table">
                        <div className="rankings-table-head">
                            <span>Pos.</span>
                            <span>Usuari</span>
                            <span>Jugadors</span>
                            <span>Valor</span>
                            <span>Punts</span>
                        </div>

                        {classificacio.map((item, index) => (
                            <div
                                className={
                                    item.esUsuariActual
                                        ? 'rankings-table-row active'
                                        : 'rankings-table-row'
                                }
                                key={item.id}
                            >
                                <span className="rankings-position">
                                    {index + 1}
                                </span>

                                <div className="rankings-user">
                                    <div className="rankings-avatar">
                                        {item.nom.charAt(0).toUpperCase()}
                                    </div>

                                    <div>
                                        <strong>{item.nom}</strong>
                                        <small>
                                            {item.esUsuariActual
                                                ? 'El teu equip'
                                                : item.etiqueta}
                                        </small>
                                    </div>
                                </div>

                                <span>{item.jugadors}</span>
                                <span>{formatMoney(item.valorPlantilla)}</span>
                                <strong>{item.punts}</strong>
                            </div>
                        ))}
                    </div>
                </article>

                <article className="rankings-card">
                    <span className="rankings-kicker">El teu resum</span>

                    <h2>Estat competitiu</h2>

                    <div className="rankings-info-list">
                        <div>
                            <span>Usuari</span>
                            <strong>{nomUsuari}</strong>
                        </div>

                        <div>
                            <span>Pressupost restant</span>
                            <strong>{formatMoney(pressupost)}</strong>
                        </div>

                        <div>
                            <span>Jugadors fitxats</span>
                            <strong>{jugadors.length}</strong>
                        </div>

                        <div>
                            <span>Punts acumulats</span>
                            <strong>{puntsTotals}</strong>
                        </div>
                    </div>

                    <div className="rankings-actions vertical">
                        <Link to="/equip" className="rankings-main-btn">
                            Veure plantilla
                        </Link>

                        <Link to="/alineacio" className="rankings-secondary-btn">
                            Preparar alineació
                        </Link>
                    </div>
                </article>
            </section>

            <section className="rankings-main-grid">
                <article className="rankings-card">
                    <span className="rankings-kicker">Jornades</span>

                    <h2>Historial de rendiment</h2>

                    <div className="rankings-round-list">
                        {historialJornades.length > 0 ? (
                            historialJornades.map((jornada) => (
                                <div key={jornada.id}>
                                    <span>{jornada.nom}</span>
                                    <strong>{jornada.punts} punts</strong>
                                    <small>
                                        {jornada.jugadorsPuntuats}/{jornada.totalJugadors} jugadors puntuats · {jornada.estat}
                                    </small>
                                </div>
                            ))
                        ) : (
                            <div>
                                <span>Sense jornades</span>
                                <strong>Pendent</strong>
                                <small>
                                    Encara no hi ha jornades creades per aquesta lliga.
                                </small>
                            </div>
                        )}
                    </div>
                </article>

                <article className="rankings-card rankings-admin-note">
                    <span className="rankings-kicker">Sistema de puntuació</span>

                    <h2>Punts connectats</h2>

                    <p>
                        Aquest rànquing ja llegeix les puntuacions guardades per
                        l’admin a cada jornada i les suma als jugadors de la plantilla.
                    </p>

                    <Link to="/admin/puntuacions" className="rankings-secondary-btn">
                        Gestionar puntuacions
                    </Link>
                </article>
            </section>
        </main>
    )
}

const generarClassificacioDemo = ({
    nomUsuari,
    puntsTotals,
    valorPlantilla,
    pressupost,
    jugadors,
}) => {
    const rivals = [
        {
            id: 'demo-1',
            nom: 'Iker',
            etiqueta: 'Usuari demo',
            punts: 42,
            valorPlantilla: 318000000,
            pressupost: 72000000,
            jugadors: 13,
        },
        {
            id: 'demo-2',
            nom: 'Laia',
            etiqueta: 'Usuari demo',
            punts: 26,
            valorPlantilla: 284000000,
            pressupost: 93000000,
            jugadors: 13,
        },
        {
            id: 'demo-3',
            nom: 'Marc',
            etiqueta: 'Usuari demo',
            punts: 18,
            valorPlantilla: 251000000,
            pressupost: 118000000,
            jugadors: 12,
        },
    ]

    const usuariActual = {
        id: 'current-user',
        nom: nomUsuari,
        etiqueta: 'Equip propi',
        punts: puntsTotals,
        valorPlantilla,
        pressupost,
        jugadors,
        esUsuariActual: true,
    }

    return [...rivals, usuariActual].sort((a, b) => {
        if (b.punts !== a.punts) {
            return b.punts - a.punts
        }

        return b.valorPlantilla - a.valorPlantilla
    })
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

export default Rankings