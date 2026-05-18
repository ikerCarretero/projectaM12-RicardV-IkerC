import { useEffect, useMemo, useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import { puntuacionsLocalService } from '../services/puntuacionsLocalService'
import './Alineacio.css'

const formacions = {
    '4-3-3': {
        defenses: 4,
        migcampistes: 3,
        davanters: 3,
    },
    '4-4-2': {
        defenses: 4,
        migcampistes: 4,
        davanters: 2,
    },
    '3-5-2': {
        defenses: 3,
        migcampistes: 5,
        davanters: 2,
    },
    '5-3-2': {
        defenses: 5,
        migcampistes: 3,
        davanters: 2,
    },
}

function Alineacio() {
    const navigate = useNavigate()

    const [lligaActiva, setLligaActiva] = useState(null)
    const [jugadorsFitxats, setJugadorsFitxats] = useState([])
    const [formacio, setFormacio] = useState('4-3-3')

    useEffect(() => {
        const lliga = lligaActivaService.obtenir()
        equipFantasyLocalService.assegurarEquipInicial()
        const jugadors = puntuacionsLocalService.actualitzarPuntsTotalsPlantilla()

        setLligaActiva(lliga)
        setJugadorsFitxats(jugadors)
    }, [])

    const jugadorsPerPosicio = useMemo(() => {
        return {
            porters: jugadorsFitxats.filter((jugador) =>
                esPosicio(jugador.posicio, ['porter', 'portero', 'pt'])
            ),
            defenses: jugadorsFitxats.filter((jugador) =>
                esPosicio(jugador.posicio, ['defensa', 'def', 'defender'])
            ),
            migcampistes: jugadorsFitxats.filter((jugador) =>
                esPosicio(jugador.posicio, ['migcampista', 'mig', 'centrocampista'])
            ),
            davanters: jugadorsFitxats.filter((jugador) =>
                esPosicio(jugador.posicio, ['davanter', 'delantero', 'dav', 'forward'])
            ),
        }
    }, [jugadorsFitxats])

    const alineacioActual = useMemo(() => {
        const esquema = formacions[formacio]

        return {
            porter: jugadorsPerPosicio.porters.slice(0, 1),
            defenses: jugadorsPerPosicio.defenses.slice(0, esquema.defenses),
            migcampistes: jugadorsPerPosicio.migcampistes.slice(0, esquema.migcampistes),
            davanters: jugadorsPerPosicio.davanters.slice(0, esquema.davanters),
        }
    }, [formacio, jugadorsPerPosicio])

    const totalTitulars =
        alineacioActual.porter.length +
        alineacioActual.defenses.length +
        alineacioActual.migcampistes.length +
        alineacioActual.davanters.length

    if (!lligaActiva) {
        return (
            <main className="app-page alineacio-page">
                <section className="alineacio-empty">
                    <h1>Abans has d’escollir una lliga</h1>

                    <p>
                        Per preparar l’alineació has de seleccionar una lliga privada activa.
                        Així veurem només els jugadors fitxats dins d’aquella lliga.
                    </p>

                    <Link to="/lligues" className="alineacio-main-btn">
                        Anar a les meves lligues
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
                        Prepara el teu onze inicial amb els jugadors fitxats a la lliga activa.
                    </p>
                </div>

                <div className="alineacio-header-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva.nom}</strong>

                    <button
                        type="button"
                        onClick={() => navigate('/lligues')}
                    >
                        Canviar lliga
                    </button>
                </div>
            </section>

            <section className="alineacio-stats-grid">
                <article>
                    <span>Jugadors fitxats</span>
                    <strong>{jugadorsFitxats.length}</strong>
                </article>

                <article>
                    <span>Titulars actuals</span>
                    <strong>{totalTitulars}/11</strong>
                </article>

                <article>
                    <span>Porters</span>
                    <strong>{jugadorsPerPosicio.porters.length}</strong>
                </article>

                <article>
                    <span>Formació</span>
                    <strong>{formacio}</strong>
                </article>
            </section>

            {jugadorsFitxats.length === 0 ? (
                <section className="alineacio-empty">
                    <h2>Encara no tens jugadors fitxats</h2>

                    <p>
                        Ves al mercat de la lliga activa i fitxa jugadors per començar a preparar
                        la teva alineació.
                    </p>

                    <Link to="/mercat" className="alineacio-main-btn">
                        Anar al mercat
                    </Link>
                </section>
            ) : (
                <>
                    <section className="alineacio-controls">
                        <div>
                            <span>Configuració tàctica</span>
                            <h2>Escull formació</h2>
                        </div>

                        <select
                            value={formacio}
                            onChange={(event) => setFormacio(event.target.value)}
                        >
                            {Object.keys(formacions).map((item) => (
                                <option key={item} value={item}>
                                    {item}
                                </option>
                            ))}
                        </select>
                    </section>

                    <section className="alineacio-main-grid">
                        <article className="alineacio-field-card">
                            <div className="alineacio-field-header">
                                <div>
                                    <span>Onze inicial</span>
                                    <strong>{formacio}</strong>
                                </div>

                                <small>{totalTitulars}/11 titulars</small>
                            </div>

                            <div className="alineacio-field">
                                <div className="field-zone field-zone-gk">
                                    {renderFilaJugadors(alineacioActual.porter, 1, 'PT')}
                                </div>

                                <div className="field-zone field-zone-def">
                                    {renderFilaJugadors(
                                        alineacioActual.defenses,
                                        formacions[formacio].defenses,
                                        'DEF'
                                    )}
                                </div>

                                <div className="field-zone field-zone-mid">
                                    {renderFilaJugadors(
                                        alineacioActual.migcampistes,
                                        formacions[formacio].migcampistes,
                                        'MIG'
                                    )}
                                </div>

                                <div className="field-zone field-zone-att">
                                    {renderFilaJugadors(
                                        alineacioActual.davanters,
                                        formacions[formacio].davanters,
                                        'DAV'
                                    )}
                                </div>
                            </div>
                        </article>

                        <article className="alineacio-side-card">
                            <span className="alineacio-kicker">Resum</span>
                            <h2>Estat de l’equip</h2>

                            <div className="alineacio-position-summary">
                                <div>
                                    <span>Porters</span>
                                    <strong>{jugadorsPerPosicio.porters.length}</strong>
                                </div>

                                <div>
                                    <span>Defenses</span>
                                    <strong>{jugadorsPerPosicio.defenses.length}</strong>
                                </div>

                                <div>
                                    <span>Migcampistes</span>
                                    <strong>{jugadorsPerPosicio.migcampistes.length}</strong>
                                </div>

                                <div>
                                    <span>Davanters</span>
                                    <strong>{jugadorsPerPosicio.davanters.length}</strong>
                                </div>
                            </div>

                            <Link to="/mercat" className="alineacio-secondary-btn">
                                Fitxar més jugadors
                            </Link>
                        </article>
                    </section>

                    <section className="alineacio-lists-grid">
                        <article className="alineacio-card">
                            <span className="alineacio-kicker">Plantilla actual</span>
                            <h2>Jugadors fitxats</h2>

                            <div className="alineacio-player-list">
                                {jugadorsFitxats.map((jugador) => (
                                    <JugadorItem jugador={jugador} key={jugador.id} />
                                ))}
                            </div>
                        </article>

                        <article className="alineacio-card">
                            <span className="alineacio-kicker">Distribució</span>
                            <h2>Equip per posicions</h2>

                            <BlocPosicio
                                titol="Porters"
                                jugadors={jugadorsPerPosicio.porters}
                            />

                            <BlocPosicio
                                titol="Defenses"
                                jugadors={jugadorsPerPosicio.defenses}
                            />

                            <BlocPosicio
                                titol="Migcampistes"
                                jugadors={jugadorsPerPosicio.migcampistes}
                            />

                            <BlocPosicio
                                titol="Davanters"
                                jugadors={jugadorsPerPosicio.davanters}
                            />
                        </article>
                    </section>
                </>
            )}
        </main>
    )
}

function renderFilaJugadors(jugadors, total, placeholder) {
    const slots = Array.from({ length: total }, (_, index) => jugadors[index] || null)

    return (
        <div className="alineacio-row">
            {slots.map((jugador, index) =>
                jugador ? (
                    <div className="alineacio-player-chip" key={`${jugador.id}-${index}`}>
                        <strong>{obtenirNomCurt(jugador.nom)}</strong>
                        <span>{normalitzarTextPosicio(jugador.posicio)}</span>
                        <em>{jugador.punts || 0} pts</em>
                    </div>
                ) : (
                    <div
                        className="alineacio-player-chip empty"
                        key={`empty-${placeholder}-${index}`}
                    >
                        {placeholder}
                    </div>
                )
            )}
        </div>
    )
}

function BlocPosicio({ titol, jugadors }) {
    return (
        <div className="alineacio-position-block">
            <h3>{titol}</h3>

            {jugadors.length === 0 ? (
                <p>Cap jugador en aquesta posició.</p>
            ) : (
                <div className="alineacio-player-list compact">
                    {jugadors.map((jugador) => (
                        <JugadorItem jugador={jugador} key={jugador.id} />
                    ))}
                </div>
            )}
        </div>
    )
}

function JugadorItem({ jugador }) {
    return (
        <div className="alineacio-player-item">
            <div className="alineacio-player-avatar">
                {jugador.nom?.charAt(0)?.toUpperCase() || 'J'}
            </div>

            <div>
                <strong>{jugador.nom}</strong>
                <span>{jugador.equip || 'Sense equip'}</span>
            </div>

            <em>{formatMoney(jugador.valor_mercat)}</em>
        </div>
    )
}

const esPosicio = (posicio, valors) => {
    const posicioNormalitzada = String(posicio || '')
        .trim()
        .toLowerCase()

    return valors.includes(posicioNormalitzada)
}

const normalitzarTextPosicio = (posicio) => {
    const value = String(posicio || '').toLowerCase()

    if (value.includes('porter') || value.includes('portero')) return 'Porter'
    if (value.includes('def')) return 'Defensa'
    if (value.includes('mig') || value.includes('centro')) return 'Mig'
    if (value.includes('dav') || value.includes('delantero')) return 'Davanter'

    return posicio || 'Jugador'
}

const obtenirNomCurt = (nom) => {
    if (!nom) return 'Jugador'

    const parts = nom.trim().split(/\s+/)

    if (parts.length === 1) {
        return parts[0]
    }

    const inicialNom = parts[0].charAt(0).toUpperCase()
    const cognom = parts.slice(1).join(' ')

    return `${inicialNom}. ${cognom}`
}

const formatMoney = (value) => {
    const numberValue = Number(value || 0)

    return new Intl.NumberFormat('ca-ES', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0,
    }).format(numberValue)
}

export default Alineacio