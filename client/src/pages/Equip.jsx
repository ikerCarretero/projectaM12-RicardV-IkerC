import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import { puntuacionsLocalService } from '../services/puntuacionsLocalService'
import './Equip.css'

function Equip() {
    const [lligaActiva, setLligaActiva] = useState(null)
    const [jugadors, setJugadors] = useState([])
    const [pressupost, setPressupost] = useState(0)
    const [missatge, setMissatge] = useState('')
    const [error, setError] = useState('')

    useEffect(() => {
        const lliga = lligaActivaService.obtenir()
        setLligaActiva(lliga)

        if (!lliga) {
            setJugadors([])
            setPressupost(0)
            return
        }

        equipFantasyLocalService.assegurarEquipInicial()

        const jugadorsActualitzats =
            puntuacionsLocalService.actualitzarPuntsTotalsPlantilla()

        setJugadors(jugadorsActualitzats)
        setPressupost(equipFantasyLocalService.getPressupost())
    }, [])

    const dadesEquip = useMemo(() => {
        const porters = filtrarPerPosicio(jugadors, ['porter', 'portero', 'pt'])
        const defenses = filtrarPerPosicio(jugadors, ['defensa', 'def'])

        const migcampistes = filtrarPerPosicio(jugadors, [
            'migcampista',
            'mig',
            'centrocampista',
        ])

        const davanters = filtrarPerPosicio(jugadors, [
            'davanter',
            'delantero',
            'dav',
            'forward',
        ])

        const valorPlantilla = jugadors.reduce(
            (total, jugador) => total + Number(jugador.valor_mercat || 0),
            0
        )

        const jugadorMesCar = [...jugadors].sort(
            (a, b) => Number(b.valor_mercat || 0) - Number(a.valor_mercat || 0)
        )[0]

        const millorJugador = [...jugadors].sort(
            (a, b) => Number(b.punts || 0) - Number(a.punts || 0)
        )[0]

        const puntsTotals = jugadors.reduce(
            (total, jugador) => total + Number(jugador.punts || 0),
            0
        )

        return {
            porters,
            defenses,
            migcampistes,
            davanters,
            valorPlantilla,
            jugadorMesCar,
            millorJugador,
            puntsTotals,
        }
    }, [jugadors])

    const vendreJugador = (jugador) => {
        const confirmar = window.confirm(
            `Vols vendre ${jugador.nom} per ${formatMoney(jugador.valor_mercat)}?`
        )

        if (!confirmar) {
            return
        }

        try {
            const resultat = equipFantasyLocalService.vendreJugador(jugador.id)

            setJugadors(resultat.jugadors)
            setPressupost(resultat.pressupost)
            setMissatge(`${jugador.nom} venut correctament.`)
            setError('')

            setTimeout(() => {
                setMissatge('')
            }, 2200)
        } catch (err) {
            setError(err.message || 'No s’ha pogut vendre el jugador.')
            setMissatge('')
        }
    }

    if (!lligaActiva) {
        return (
            <main className="app-page equip-page">
                <section className="equip-empty">
                    <span className="equip-kicker">Plantilla fantasy</span>

                    <h1>Encara no tens cap lliga activa</h1>

                    <p>
                        Per veure la teva plantilla has de seleccionar una lliga privada.
                        Cada lliga tindrà els seus propis jugadors, pressupost i mercat.
                    </p>

                    <div className="equip-actions">
                        <Link to="/lligues" className="equip-main-btn">
                            Anar a lligues
                        </Link>

                        <Link to="/crear-lliga" className="equip-secondary-btn">
                            Crear lliga
                        </Link>
                    </div>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page equip-page">
            <section className="equip-header">
                <div>
                    <span className="equip-kicker">Plantilla fantasy</span>

                    <h1>El meu equip</h1>

                    <p>
                        Consulta la plantilla de la lliga activa, el valor total de l’equip,
                        els punts acumulats i la distribució per posicions.
                    </p>
                </div>

                <div className="equip-header-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva.nom}</strong>

                    <Link to="/lligues">Canviar lliga</Link>
                </div>
            </section>

            <section className="equip-stats-grid">
                <article>
                    <span>Jugadors</span>
                    <strong>{jugadors.length}</strong>
                </article>

                <article>
                    <span>Pressupost</span>
                    <strong>{formatMoney(pressupost)}</strong>
                </article>

                <article>
                    <span>Valor plantilla</span>
                    <strong>{formatMoney(dadesEquip.valorPlantilla)}</strong>
                </article>

                <article>
                    <span>Punts totals</span>
                    <strong>{dadesEquip.puntsTotals}</strong>
                </article>
            </section>

            {missatge && (
                <div className="equip-alert equip-alert-success">
                    {missatge}
                </div>
            )}

            {error && (
                <div className="equip-alert equip-alert-error">
                    {error}
                </div>
            )}

            <section className="equip-main-grid">
                <article className="equip-card equip-summary-card">
                    <span className="equip-kicker">Distribució</span>

                    <h2>Equip per posicions</h2>

                    <div className="equip-position-grid">
                        <div>
                            <span>Porters</span>
                            <strong>{dadesEquip.porters.length}</strong>
                        </div>

                        <div>
                            <span>Defenses</span>
                            <strong>{dadesEquip.defenses.length}</strong>
                        </div>

                        <div>
                            <span>Migcampistes</span>
                            <strong>{dadesEquip.migcampistes.length}</strong>
                        </div>

                        <div>
                            <span>Davanters</span>
                            <strong>{dadesEquip.davanters.length}</strong>
                        </div>
                    </div>

                    <div className="equip-actions">
                        <Link to="/mercat" className="equip-main-btn">
                            Anar al mercat
                        </Link>

                        <Link to="/alineacio" className="equip-secondary-btn">
                            Preparar alineació
                        </Link>
                    </div>
                </article>

                <article className="equip-card equip-league-card">
                    <span className="equip-kicker">Rendiment</span>

                    <h2>Estat de puntuació</h2>

                    <p>
                        Els punts venen de les jornades guardades per l’admin a la pantalla
                        de puntuacions.
                    </p>

                    <div className="equip-league-info">
                        <div>
                            <span>Millor jugador</span>
                            <strong>
                                {dadesEquip.millorJugador &&
                                    Number(dadesEquip.millorJugador.punts || 0) > 0
                                    ? obtenirNomCurt(dadesEquip.millorJugador.nom)
                                    : 'Sense punts'}
                            </strong>
                        </div>

                        <div>
                            <span>Punts totals</span>
                            <strong>{dadesEquip.puntsTotals}</strong>
                        </div>
                    </div>
                </article>
            </section>

            <section className="equip-card">
                <div className="equip-section-title">
                    <div>
                        <span className="equip-kicker">Plantilla actual</span>
                        <h2>Jugadors fitxats</h2>
                    </div>

                    <Link to="/mercat" className="equip-small-link">
                        Fitxar més
                    </Link>
                </div>

                <div className="equip-players-grid">
                    {jugadors.map((jugador) => (
                        <JugadorCard
                            jugador={jugador}
                            key={jugador.id}
                            onVendre={vendreJugador}
                        />
                    ))}
                </div>
            </section>

            <section className="equip-positions-list">
                <BlocPosicio
                    titol="Porters"
                    jugadors={dadesEquip.porters}
                    onVendre={vendreJugador}
                />

                <BlocPosicio
                    titol="Defenses"
                    jugadors={dadesEquip.defenses}
                    onVendre={vendreJugador}
                />

                <BlocPosicio
                    titol="Migcampistes"
                    jugadors={dadesEquip.migcampistes}
                    onVendre={vendreJugador}
                />

                <BlocPosicio
                    titol="Davanters"
                    jugadors={dadesEquip.davanters}
                    onVendre={vendreJugador}
                />
            </section>
        </main>
    )
}

function JugadorCard({ jugador, onVendre }) {
    return (
        <article className="equip-player-card">
            <div className="equip-player-top">
                <div className="equip-player-avatar">
                    {jugador.nom?.charAt(0)?.toUpperCase() || 'J'}
                </div>

                <div>
                    <h3>{jugador.nom}</h3>
                    <p>{jugador.equip || 'Sense equip'}</p>
                </div>
            </div>

            <div className="equip-player-info">
                <div>
                    <span>Posició</span>
                    <strong>{normalitzarTextPosicio(jugador.posicio)}</strong>
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
                    <span>Origen</span>
                    <strong>{jugador.origen || 'Plantilla'}</strong>
                </div>
            </div>

            <button
                type="button"
                className="equip-sell-btn"
                onClick={() => onVendre(jugador)}
            >
                Vendre jugador
            </button>
        </article>
    )
}

function BlocPosicio({ titol, jugadors, onVendre }) {
    return (
        <article className="equip-card">
            <div className="equip-section-title">
                <div>
                    <span className="equip-kicker">Posició</span>
                    <h2>{titol}</h2>
                </div>

                <strong className="equip-position-count">{jugadors.length}</strong>
            </div>

            {jugadors.length === 0 ? (
                <p className="equip-empty-text">Cap jugador en aquesta posició.</p>
            ) : (
                <div className="equip-position-player-list">
                    {jugadors.map((jugador) => (
                        <div className="equip-position-player" key={jugador.id}>
                            <div className="equip-player-avatar small">
                                {jugador.nom?.charAt(0)?.toUpperCase() || 'J'}
                            </div>

                            <div>
                                <strong>{jugador.nom}</strong>
                                <span>
                                    {jugador.equip || 'Sense equip'} · {jugador.punts || 0} pts
                                </span>
                            </div>

                            <em>{formatMoney(jugador.valor_mercat)}</em>

                            <button
                                type="button"
                                className="equip-position-sell-btn"
                                onClick={() => onVendre(jugador)}
                            >
                                Vendre
                            </button>
                        </div>
                    ))}
                </div>
            )}
        </article>
    )
}

const filtrarPerPosicio = (jugadors, valors) => {
    return jugadors.filter((jugador) => {
        const posicio = String(jugador.posicio || '').toLowerCase()

        return valors.some((valor) => posicio.includes(valor))
    })
}

const normalitzarTextPosicio = (posicio) => {
    const value = String(posicio || '').toLowerCase()

    if (value.includes('porter') || value.includes('portero')) return 'Porter'
    if (value.includes('def')) return 'Defensa'
    if (value.includes('mig') || value.includes('centro')) return 'Migcampista'
    if (value.includes('dav') || value.includes('delantero')) return 'Davanter'

    return posicio || 'Jugador'
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

export default Equip