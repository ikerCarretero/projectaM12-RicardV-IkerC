import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import { puntuacionsLocalService } from '../services/puntuacionsLocalService'
import './Alineacio.css'

const FORMACIONS = {
    '4-3-3': [
        [{ id: 'porter-1', posicio: 'porter', label: 'POR' }],
        [
            { id: 'defensa-1', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-2', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-3', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-4', posicio: 'defensa', label: 'DEF' },
        ],
        [
            { id: 'migcampista-1', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-2', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-3', posicio: 'migcampista', label: 'MIG' },
        ],
        [
            { id: 'davanter-1', posicio: 'davanter', label: 'DAV' },
            { id: 'davanter-2', posicio: 'davanter', label: 'DAV' },
            { id: 'davanter-3', posicio: 'davanter', label: 'DAV' },
        ],
    ],

    '4-4-2': [
        [{ id: 'porter-1', posicio: 'porter', label: 'POR' }],
        [
            { id: 'defensa-1', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-2', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-3', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-4', posicio: 'defensa', label: 'DEF' },
        ],
        [
            { id: 'migcampista-1', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-2', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-3', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-4', posicio: 'migcampista', label: 'MIG' },
        ],
        [
            { id: 'davanter-1', posicio: 'davanter', label: 'DAV' },
            { id: 'davanter-2', posicio: 'davanter', label: 'DAV' },
        ],
    ],

    '3-5-2': [
        [{ id: 'porter-1', posicio: 'porter', label: 'POR' }],
        [
            { id: 'defensa-1', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-2', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-3', posicio: 'defensa', label: 'DEF' },
        ],
        [
            { id: 'migcampista-1', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-2', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-3', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-4', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-5', posicio: 'migcampista', label: 'MIG' },
        ],
        [
            { id: 'davanter-1', posicio: 'davanter', label: 'DAV' },
            { id: 'davanter-2', posicio: 'davanter', label: 'DAV' },
        ],
    ],

    '4-2-3-1': [
        [{ id: 'porter-1', posicio: 'porter', label: 'POR' }],
        [
            { id: 'defensa-1', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-2', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-3', posicio: 'defensa', label: 'DEF' },
            { id: 'defensa-4', posicio: 'defensa', label: 'DEF' },
        ],
        [
            { id: 'migcampista-1', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-2', posicio: 'migcampista', label: 'MIG' },
        ],
        [
            { id: 'migcampista-3', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-4', posicio: 'migcampista', label: 'MIG' },
            { id: 'migcampista-5', posicio: 'migcampista', label: 'MIG' },
        ],
        [{ id: 'davanter-1', posicio: 'davanter', label: 'DAV' }],
    ],
}

function Alineacio() {
    const [lligaActiva, setLligaActiva] = useState(null)
    const [jugadors, setJugadors] = useState([])
    const [formacio, setFormacio] = useState('4-3-3')
    const [titulars, setTitulars] = useState({})

    useEffect(() => {
        const lliga = lligaActivaService.obtenir()
        setLligaActiva(lliga)

        if (!lliga) {
            setJugadors([])
            return
        }

        equipFantasyLocalService.assegurarEquipInicial()

        const jugadorsActualitzats =
            puntuacionsLocalService.actualitzarPuntsTotalsPlantilla()

        const formacioGuardada =
            localStorage.getItem(getFormacioKey(lliga.id)) || '4-3-3'

        const titularsGuardats = llegirTitulars(lliga.id, formacioGuardada)

        setJugadors(jugadorsActualitzats)
        setFormacio(formacioGuardada)
        setTitulars(titularsGuardats)
    }, [])

    const jugadorsPerPosicio = useMemo(() => {
        return {
            porter: filtrarPerPosicio(jugadors, ['porter', 'portero', 'pt']),
            defensa: filtrarPerPosicio(jugadors, ['defensa', 'def']),
            migcampista: filtrarPerPosicio(jugadors, [
                'migcampista',
                'mig',
                'centrocampista',
                'centro',
            ]),
            davanter: filtrarPerPosicio(jugadors, [
                'davanter',
                'delantero',
                'dav',
                'forward',
            ]),
        }
    }, [jugadors])

    const filesFormacio = FORMACIONS[formacio] || FORMACIONS['4-3-3']

    const titularIds = Object.values(titulars)
        .filter(Boolean)
        .map((id) => Number(id))

    const titularsActuals = jugadors.filter((jugador) =>
        titularIds.includes(Number(jugador.id))
    )

    const banqueta = jugadors.filter(
        (jugador) => !titularIds.includes(Number(jugador.id))
    )

    const stats = {
        jugadorsFitxats: jugadors.length,
        titulars: titularsActuals.length,
        banqueta: banqueta.length,
        porters: jugadorsPerPosicio.porter.length,
        defenses: jugadorsPerPosicio.defensa.length,
        migcampistes: jugadorsPerPosicio.migcampista.length,
        davanters: jugadorsPerPosicio.davanter.length,
    }

    const canviarFormacio = (novaFormacio) => {
        setFormacio(novaFormacio)

        if (!lligaActiva) {
            setTitulars({})
            return
        }

        localStorage.setItem(getFormacioKey(lligaActiva.id), novaFormacio)

        const titularsGuardats = llegirTitulars(lligaActiva.id, novaFormacio)
        setTitulars(titularsGuardats)
    }

    const seleccionarJugador = (slotId, jugadorId) => {
        const nousTitulars = {
            ...titulars,
            [slotId]: jugadorId ? Number(jugadorId) : '',
        }

        setTitulars(nousTitulars)

        if (lligaActiva) {
            guardarTitulars(lligaActiva.id, formacio, nousTitulars)
        }
    }

    const obtenirJugadorSlot = (slotId) => {
        const jugadorId = titulars[slotId]

        return jugadors.find((jugador) => Number(jugador.id) === Number(jugadorId))
    }

    const opcionsDisponibles = (slot, jugadorActual) => {
        const candidats = jugadorsPerPosicio[slot.posicio] || []

        return candidats.filter((jugador) => {
            const jaSeleccionat = titularIds.includes(Number(jugador.id))

            const esElJugadorActual =
                jugadorActual && Number(jugador.id) === Number(jugadorActual.id)

            return !jaSeleccionat || esElJugadorActual
        })
    }

    if (!lligaActiva) {
        return (
            <main className="app-page alineacio-page">
                <section className="alineacio-empty-card">
                    <span className="alineacio-kicker">Alineació fantasy</span>

                    <h1>Encara no tens cap lliga activa</h1>

                    <p>
                        Per preparar l’alineació has d’entrar primer a una lliga privada.
                    </p>

                    <Link to="/lligues" className="alineacio-main-btn">
                        Anar a lligues
                    </Link>
                </section>
            </main>
        )
    }

    return (
        <main className="app-page alineacio-page">
            <section className="alineacio-header">
                <div>
                    <span className="alineacio-kicker">Alineació fantasy</span>

                    <h1>Alineació</h1>

                    <p>
                        Escull el teu onze inicial per la lliga activa. Els jugadors no
                        seleccionats quedaran automàticament a la banqueta.
                    </p>
                </div>

                <div className="alineacio-header-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva.nom}</strong>

                    <Link to="/lligues">Canviar lliga</Link>
                </div>
            </section>

            <section className="alineacio-stats-grid">
                <article>
                    <span>Jugadors fitxats</span>
                    <strong>{stats.jugadorsFitxats}</strong>
                </article>

                <article>
                    <span>Titulars actuals</span>
                    <strong>{stats.titulars}/11</strong>
                </article>

                <article>
                    <span>Banqueta</span>
                    <strong>{stats.banqueta}</strong>
                </article>

                <article>
                    <span>Formació</span>
                    <strong>{formacio}</strong>
                </article>
            </section>

            <section className="alineacio-tactic-card">
                <div>
                    <span className="alineacio-kicker">Configuració tàctica</span>
                    <h2>Escull formació</h2>
                </div>

                <select
                    value={formacio}
                    onChange={(event) => canviarFormacio(event.target.value)}
                >
                    {Object.keys(FORMACIONS).map((item) => (
                        <option key={item} value={item}>
                            {item}
                        </option>
                    ))}
                </select>
            </section>

            <section className="alineacio-main-grid">
                <article className="alineacio-card alineacio-field-card">
                    <div className="alineacio-section-title">
                        <div>
                            <span className="alineacio-kicker">Onze inicial</span>
                            <h2>{formacio}</h2>
                        </div>

                        <strong className="alineacio-counter">
                            {stats.titulars}/11 titulars
                        </strong>
                    </div>

                    <div className="alineacio-pitch">
                        <div className="alineacio-pitch-inner">
                            <div className="alineacio-pitch-rows">
                                {filesFormacio.map((fila, index) => (
                                    <div
                                        className={`alineacio-pitch-row alineacio-pitch-row-${index + 1}`}
                                        key={`fila-${index}`}
                                    >
                                        {fila.map((slot) => {
                                            const jugadorActual = obtenirJugadorSlot(slot.id)
                                            const opcions = opcionsDisponibles(slot, jugadorActual)

                                            return (
                                                <div
                                                    className="alineacio-slot-clean"
                                                    key={slot.id}
                                                >
                                                    <select
                                                        value={jugadorActual?.id || ''}
                                                        onChange={(event) =>
                                                            seleccionarJugador(
                                                                slot.id,
                                                                event.target.value
                                                            )
                                                        }
                                                    >
                                                        <option value="">
                                                            {slot.label}
                                                        </option>

                                                        {opcions.map((jugador) => (
                                                            <option
                                                                key={jugador.id}
                                                                value={jugador.id}
                                                            >
                                                                {obtenirNomCurt(jugador.nom)} ·{' '}
                                                                {jugador.punts || 0} pts
                                                            </option>
                                                        ))}
                                                    </select>

                                                    {jugadorActual ? (
                                                        <div className="alineacio-player-chip selected">
                                                            <strong>
                                                                {obtenirNomCurt(jugadorActual.nom)}
                                                            </strong>

                                                            <span>
                                                                {normalitzarTextPosicio(
                                                                    jugadorActual.posicio
                                                                )}
                                                            </span>

                                                            <em>{jugadorActual.punts || 0} pts</em>
                                                        </div>
                                                    ) : (
                                                        <div className="alineacio-player-chip empty">
                                                            <strong>{slot.label}</strong>
                                                            <span>Escull jugador</span>
                                                        </div>
                                                    )}
                                                </div>
                                            )
                                        })}
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>
                </article>

                <article className="alineacio-card alineacio-summary-card">
                    <span className="alineacio-kicker">Resum</span>

                    <h2>Estat de l’equip</h2>

                    <div className="alineacio-position-grid">
                        <div>
                            <span>Porters</span>
                            <strong>{stats.porters}</strong>
                        </div>

                        <div>
                            <span>Defenses</span>
                            <strong>{stats.defenses}</strong>
                        </div>

                        <div>
                            <span>Migcampistes</span>
                            <strong>{stats.migcampistes}</strong>
                        </div>

                        <div>
                            <span>Davanters</span>
                            <strong>{stats.davanters}</strong>
                        </div>
                    </div>

                    <Link to="/mercat" className="alineacio-secondary-btn">
                        Fitxar més jugadors
                    </Link>
                </article>
            </section>

            <section className="alineacio-card alineacio-bench-card">
                <div className="alineacio-section-title">
                    <div>
                        <span className="alineacio-kicker">Banqueta</span>
                        <h2>Suplents disponibles</h2>
                    </div>

                    <strong className="alineacio-counter">
                        {banqueta.length} jugadors
                    </strong>
                </div>

                {banqueta.length === 0 ? (
                    <p className="alineacio-empty-text">
                        No tens jugadors a la banqueta.
                    </p>
                ) : (
                    <div className="alineacio-bench-grid">
                        {banqueta.map((jugador) => (
                            <article
                                className="alineacio-bench-player"
                                key={jugador.id}
                            >
                                <div className="alineacio-bench-avatar">
                                    {jugador.nom?.charAt(0)?.toUpperCase() || 'J'}
                                </div>

                                <div>
                                    <strong>{jugador.nom}</strong>
                                    <span>
                                        {jugador.equip || 'Sense equip'} ·{' '}
                                        {normalitzarTextPosicio(jugador.posicio)}
                                    </span>
                                </div>

                                <em>{jugador.punts || 0} pts</em>
                            </article>
                        ))}
                    </div>
                )}
            </section>

            <section className="alineacio-main-grid">
                <article className="alineacio-card">
                    <span className="alineacio-kicker">Plantilla actual</span>

                    <h2>Jugadors fitxats</h2>

                    <div className="alineacio-player-list">
                        {jugadors.map((jugador) => (
                            <div className="alineacio-list-player" key={jugador.id}>
                                <div className="alineacio-bench-avatar">
                                    {jugador.nom?.charAt(0)?.toUpperCase() || 'J'}
                                </div>

                                <div>
                                    <strong>{jugador.nom}</strong>
                                    <span>{jugador.equip || 'Sense equip'}</span>
                                </div>

                                <em>{jugador.punts || 0} pts</em>
                            </div>
                        ))}
                    </div>
                </article>

                <article className="alineacio-card">
                    <span className="alineacio-kicker">Distribució</span>

                    <h2>Equip per posicions</h2>

                    <BlocPosicio
                        titol="Porters"
                        jugadors={jugadorsPerPosicio.porter}
                    />

                    <BlocPosicio
                        titol="Defenses"
                        jugadors={jugadorsPerPosicio.defensa}
                    />

                    <BlocPosicio
                        titol="Migcampistes"
                        jugadors={jugadorsPerPosicio.migcampista}
                    />

                    <BlocPosicio
                        titol="Davanters"
                        jugadors={jugadorsPerPosicio.davanter}
                    />
                </article>
            </section>
        </main>
    )
}

function BlocPosicio({ titol, jugadors }) {
    return (
        <div className="alineacio-position-block">
            <h3>{titol}</h3>

            {jugadors.length === 0 ? (
                <p>Cap jugador.</p>
            ) : (
                <div className="alineacio-player-list small">
                    {jugadors.map((jugador) => (
                        <div className="alineacio-list-player" key={jugador.id}>
                            <div className="alineacio-bench-avatar">
                                {jugador.nom?.charAt(0)?.toUpperCase() || 'J'}
                            </div>

                            <div>
                                <strong>{jugador.nom}</strong>
                                <span>{jugador.equip || 'Sense equip'}</span>
                            </div>

                            <em>{jugador.punts || 0} pts</em>
                        </div>
                    ))}
                </div>
            )}
        </div>
    )
}

const getFormacioKey = (lligaId) => {
    return `ffe_alineacio_formacio_lliga_${lligaId}`
}

const getTitularsKey = (lligaId, formacio) => {
    return `ffe_alineacio_titulars_lliga_${lligaId}_${formacio}`
}

const llegirTitulars = (lligaId, formacio) => {
    try {
        const data = localStorage.getItem(getTitularsKey(lligaId, formacio))
        return data ? JSON.parse(data) : {}
    } catch {
        return {}
    }
}

const guardarTitulars = (lligaId, formacio, titulars) => {
    localStorage.setItem(getTitularsKey(lligaId, formacio), JSON.stringify(titulars))
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
    if (!nom) return 'Jugador'

    const parts = nom.trim().split(/\s+/)

    if (parts.length === 1) {
        return parts[0]
    }

    return `${parts[0].charAt(0).toUpperCase()}. ${parts.slice(1).join(' ')}`
}

export default Alineacio