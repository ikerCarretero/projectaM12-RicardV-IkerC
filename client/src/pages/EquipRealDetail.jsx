import { useEffect, useMemo, useState } from 'react'
import { Link, useParams } from 'react-router-dom'
import { api } from '../services/api'
import './EquipRealDetail.css'

const ESQUEMES_DISPONIBLES = [
    '5-4-1',
    '5-3-2',
    '4-5-1',
    '4-4-2',
    '4-3-3',
    '3-5-2',
    '3-4-3'
]

function EquipRealDetail() {
    const { id } = useParams()

    const [equip, setEquip] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [filtrePosicio, setFiltrePosicio] = useState('')
    const [esquemaSeleccionat, setEsquemaSeleccionat] = useState('4-3-3')

    useEffect(() => {
        const carregarEquip = async () => {
            try {
                setLoading(true)
                setError('')

                const data = await api.getEquipReal(id)
                setEquip(data)
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar l’equip.')
            } finally {
                setLoading(false)
            }
        }

        carregarEquip()
    }, [id])

    const jugadors = equip?.jugadors || []

    const jugadorsFiltrats = useMemo(() => {
        if (!filtrePosicio) return jugadors

        return jugadors.filter(
            (jugador) => normalitzarPosicio(jugador.posicio_base) === filtrePosicio
        )
    }, [jugadors, filtrePosicio])

    const alineacioIdeal = useMemo(() => {
        return construirAlineacioIdeal(jugadors, esquemaSeleccionat)
    }, [jugadors, esquemaSeleccionat])

    const nomEntrenador = obtenirNomEntrenador(equip)

    if (loading) {
        return (
            <div className="container mt-4">
                <p>Carregant equip...</p>
            </div>
        )
    }

    if (error) {
        return (
            <div className="container mt-4">
                <div className="alert alert-danger">{error}</div>
            </div>
        )
    }

    if (!equip) {
        return (
            <div className="container mt-4">
                <p>No s’ha trobat l’equip.</p>
            </div>
        )
    }

    return (
        <div className="container mt-4">
            <div className="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-4">
                <div>
                    <h2 className="mb-2">{equip.nom}</h2>
                    <p className="mb-1">
                        <strong>País:</strong> {equip.pais}
                    </p>
                    <p className="mb-1">
                        <strong>Competició:</strong> {equip.competicio?.nom || '-'}
                    </p>
                    <p className="mb-0">
                        <strong>Jugadors:</strong> {jugadors.length}
                    </p>
                </div>

                <div className="d-flex gap-2 align-items-center flex-wrap">
                    <Link
                        to={`/competicions/${equip.competicio_id}`}
                        className="btn btn-outline-secondary"
                    >
                        Tornar a competició
                    </Link>

                    <select
                        className="form-select"
                        style={{ width: '190px' }}
                        value={filtrePosicio}
                        onChange={(e) => setFiltrePosicio(e.target.value)}
                    >
                        <option value="">Totes les posicions</option>
                        <option value="PORTER">Porter</option>
                        <option value="DEFENSA">Defensa</option>
                        <option value="MIGCAMPISTA">Migcampista</option>
                        <option value="DAVANTER">Davanter</option>
                    </select>
                </div>
            </div>

            <div className="card shadow-sm mb-4">
                <div className="card-body">
                    <div className="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                        <h4 className="fw-bold mb-0">Alineació ideal</h4>
                        <span className="badge text-bg-dark">
                            Esquema {alineacioIdeal.esquema}
                        </span>
                    </div>

                    <p className="text-muted mb-4">
                        Calculada segons <strong>puntuació total</strong> i, en cas d’empat,
                        <strong> valor de mercat</strong>.
                    </p>

                    <div className="alineacio-zona">
                        <div className="alineacio-camp">
                            <div className="linia-jugadors linia-porter">
                                {alineacioIdeal.porter ? (
                                    <JugadorAlineacioCard jugador={alineacioIdeal.porter} />
                                ) : (
                                    <div className="sense-jugadors">Sense porter</div>
                                )}
                            </div>

                            <div className="linia-jugadors linia-defenses">
                                {alineacioIdeal.defenses.length > 0 ? (
                                    alineacioIdeal.defenses.map((jugador) => (
                                        <JugadorAlineacioCard key={jugador.id} jugador={jugador} />
                                    ))
                                ) : (
                                    <div className="sense-jugadors">Sense defenses</div>
                                )}
                            </div>

                            <div className="linia-jugadors linia-migcampistes">
                                {alineacioIdeal.migcampistes.length > 0 ? (
                                    alineacioIdeal.migcampistes.map((jugador) => (
                                        <JugadorAlineacioCard key={jugador.id} jugador={jugador} />
                                    ))
                                ) : (
                                    <div className="sense-jugadors">Sense migcampistes</div>
                                )}
                            </div>

                            <div className="linia-jugadors linia-davanters">
                                {alineacioIdeal.davanters.length > 0 ? (
                                    alineacioIdeal.davanters.map((jugador) => (
                                        <JugadorAlineacioCard key={jugador.id} jugador={jugador} />
                                    ))
                                ) : (
                                    <div className="sense-jugadors">Sense davanters</div>
                                )}
                            </div>
                        </div>

                        <div className="alineacio-panel">
                            <div className="panel-bloc">
                                <h5 className="panel-titol">Esquemes</h5>

                                <div className="esquemes-botons">
                                    {ESQUEMES_DISPONIBLES.map((esquema) => (
                                        <button
                                            key={esquema}
                                            type="button"
                                            className={`btn-esquema ${esquemaSeleccionat === esquema ? 'actiu' : ''
                                                }`}
                                            onClick={() => setEsquemaSeleccionat(esquema)}
                                        >
                                            {esquema}
                                        </button>
                                    ))}
                                </div>
                            </div>

                            <div className="panel-bloc">
                                <h5 className="panel-titol">Entrenador</h5>

                                <div className="entrenador-box">
                                    <div className="entrenador-label">Tècnic</div>
                                    <div className="entrenador-nom">{nomEntrenador}</div>
                                </div>
                            </div>

                            <div className="panel-bloc">
                                <h5 className="panel-titol">Banqueta / Reserves</h5>

                                <div className="reserves-llista">
                                    {alineacioIdeal.reserves.length > 0 ? (
                                        alineacioIdeal.reserves.map((jugador) => (
                                            <JugadorReservaItem key={jugador.id} jugador={jugador} />
                                        ))
                                    ) : (
                                        <div className="text-muted small">Sense reserves</div>
                                    )}
                                </div>
                            </div>
                        </div>
                    </div>

                    {alineacioIdeal.faltants > 0 && (
                        <div className="alert alert-warning mt-4 mb-0">
                            Falten <strong>{alineacioIdeal.faltants}</strong> jugador(s) per completar
                            l’esquema <strong>{alineacioIdeal.esquema}</strong>.
                        </div>
                    )}
                </div>
            </div>

            <h4 className="fw-bold mb-3">Plantilla completa</h4>

            <div className="row">
                {jugadorsFiltrats.map((jugador) => {
                    const posicioNormalitzada = normalitzarPosicio(jugador.posicio_base)
                    const classePosicio = obtenirClassePosicio(posicioNormalitzada)

                    return (
                        <div className="col-md-6 col-lg-4 mb-4" key={jugador.id}>
                            <div className={`card h-100 shadow-sm jugador-plantilla-card ${classePosicio}`}>
                                <div className="card-body">
                                    <h5 className="card-title">{jugador.nom}</h5>

                                    <p className="mb-1">
                                        <strong>Posició:</strong>{' '}
                                        <span className="jugador-posicio-text">
                                            {posicioNormalitzada}
                                        </span>
                                    </p>

                                    <p className="mb-1">
                                        <strong>Valor:</strong> {formatValor(jugador.valor_mercat)}
                                    </p>

                                    <p className="mb-0">
                                        <strong>Punts:</strong> {Number(jugador.puntuacio_total || 0)}
                                    </p>
                                </div>
                            </div>
                        </div>
                    )
                })}
            </div>

            {jugadorsFiltrats.length === 0 && (
                <div className="alert alert-info">
                    No hi ha jugadors per aquest filtre.
                </div>
            )}
        </div>
    )
}

function JugadorAlineacioCard({ jugador }) {
    return (
        <div className="jugador-camp-card">
            <div className="jugador-camp-nom">{jugador.nom}</div>
            <div className="jugador-camp-posicio">
                {normalitzarPosicio(jugador.posicio_base)}
            </div>
            <div className="jugador-camp-dades">
                <span>
                    <strong>Punts:</strong> {Number(jugador.puntuacio_total || 0)}
                </span>
                <span>
                    <strong>Valor:</strong> {formatValor(jugador.valor_mercat)}
                </span>
            </div>
        </div>
    )
}

function JugadorReservaItem({ jugador }) {
    return (
        <div className="reserva-item">
            <div className="reserva-nom">{jugador.nom}</div>
            <div className="reserva-info">
                {normalitzarPosicio(jugador.posicio_base)} · {formatValor(jugador.valor_mercat)}
            </div>
        </div>
    )
}

function construirAlineacioIdeal(jugadors, esquema = '4-3-3') {
    const [numDefenses, numMigcampistes, numDavanters] = esquema
        .split('-')
        .map(Number)

    const ordenats = [...jugadors].sort(ordenarJugadors)

    const porters = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'PORTER')
    const defenses = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'DEFENSA')
    const migcampistes = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'MIGCAMPISTA')
    const davanters = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'DAVANTER')

    const titularPorter = porters[0] || null
    const titularDefenses = defenses.slice(0, numDefenses)
    const titularMigcampistes = migcampistes.slice(0, numMigcampistes)
    const titularDavanters = davanters.slice(0, numDavanters)

    const titulars = [
        ...(titularPorter ? [titularPorter] : []),
        ...titularDefenses,
        ...titularMigcampistes,
        ...titularDavanters
    ]

    const idsTitulars = new Set(titulars.map((j) => j.id))

    let reserves = ordenats.filter((j) => !idsTitulars.has(j.id))

    const esperats = 1 + numDefenses + numMigcampistes + numDavanters
    let faltants = esperats - titulars.length

    if (faltants > 0) {
        const extraNoPorters = reserves.filter(
            (j) => normalitzarPosicio(j.posicio_base) !== 'PORTER'
        )

        const afegits = extraNoPorters.slice(0, faltants)

        afegits.forEach((jugador) => {
            const posicio = normalitzarPosicio(jugador.posicio_base)

            if (posicio === 'DEFENSA') {
                titularDefenses.push(jugador)
            } else if (posicio === 'MIGCAMPISTA') {
                titularMigcampistes.push(jugador)
            } else if (posicio === 'DAVANTER') {
                titularDavanters.push(jugador)
            }
        })

        const nousIdsTitulars = new Set([
            ...titulars.map((j) => j.id),
            ...afegits.map((j) => j.id)
        ])

        reserves = ordenats.filter((j) => !nousIdsTitulars.has(j.id))
        faltants = esperats - (nousIdsTitulars.size)
    }

    return {
        esquema,
        porter: titularPorter,
        defenses: titularDefenses,
        migcampistes: titularMigcampistes,
        davanters: titularDavanters,
        reserves,
        faltants: Math.max(faltants, 0)
    }
}

function ordenarJugadors(a, b) {
    const puntsA = Number(a.puntuacio_total || 0)
    const puntsB = Number(b.puntuacio_total || 0)

    if (puntsB !== puntsA) {
        return puntsB - puntsA
    }

    const valorA = Number(a.valor_mercat || 0)
    const valorB = Number(b.valor_mercat || 0)

    return valorB - valorA
}

function normalitzarPosicio(posicio) {
    const valor = (posicio || '').toLowerCase()

    if (
        valor.includes('porter') ||
        valor === 'por' ||
        valor === 'gk' ||
        valor.includes('goalkeeper')
    ) {
        return 'PORTER'
    }

    if (
        valor.includes('defensa') ||
        valor === 'def' ||
        valor.includes('centre-back') ||
        valor.includes('back')
    ) {
        return 'DEFENSA'
    }

    if (
        valor.includes('mig') ||
        valor.includes('medio') ||
        valor.includes('mid') ||
        valor === 'mc'
    ) {
        return 'MIGCAMPISTA'
    }

    if (
        valor.includes('davanter') ||
        valor.includes('delantero') ||
        valor.includes('forward') ||
        valor.includes('striker') ||
        valor === 'dc'
    ) {
        return 'DAVANTER'
    }

    return posicio?.toUpperCase() || 'DESCONEGUDA'
}

function formatValor(valor) {
    return `${(Number(valor || 0) / 1000000).toFixed(1)} M€`
}

function obtenirNomEntrenador(equip) {
    if (!equip) return 'Per assignar'

    return (
        equip.entrenador?.nom ||
        equip.entrenador?.name ||
        equip.tecnic?.nom ||
        equip.coach?.nom ||
        equip.coach?.name ||
        equip.entrenador_nom ||
        'Per assignar'
    )
}

function obtenirClassePosicio(posicio) {
    if (posicio === 'PORTER') return 'posicio-porter'
    if (posicio === 'DEFENSA') return 'posicio-defensa'
    if (posicio === 'MIGCAMPISTA') return 'posicio-migcampista'
    if (posicio === 'DAVANTER') return 'posicio-davanter'

    return ''
}

export default EquipRealDetail