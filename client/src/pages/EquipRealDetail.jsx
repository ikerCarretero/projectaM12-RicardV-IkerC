import { useEffect, useMemo, useState } from 'react'
import { Link, useParams } from 'react-router-dom'
import { api } from '../services/api'
import './EquipRealDetail.css'

const ESQUEMES = ['5-4-1', '5-3-2', '4-5-1', '4-4-2', '4-3-3', '3-5-2', '3-4-3']

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

    const entrenadorNom = extreureEntrenadorNom(equip)

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
        <div className="equip-real-page container mt-4">
            <div className="equip-real-top">
                <div className="equip-real-info">
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

                <div className="equip-real-actions">
                    <Link
                        to={`/competicions/${equip.competicio_id}`}
                        className="btn btn-outline-secondary"
                    >
                        Tornar a competició
                    </Link>

                    <select
                        className="form-select equip-real-select"
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

            <div className="card shadow-sm mb-4 ideal-section-card">
                <div className="card-body">
                    <div className="ideal-section-header">
                        <div>
                            <h4 className="fw-bold mb-2">Alineació ideal</h4>
                            <p className="text-muted mb-0">
                                Calculada segons <strong>puntuació total</strong> i, en cas d’empat,
                                <strong> valor de mercat</strong>.
                            </p>
                        </div>

                        <span className="ideal-badge">
                            Esquema {alineacioIdeal.esquema}
                        </span>
                    </div>

                    <div className="ideal-layout">
                        <div className="ideal-pitch">
                            <div className="ideal-pitch-inner">
                                <FilaCamp jugadors={alineacioIdeal.porter} />
                                <FilaCamp jugadors={alineacioIdeal.defenses} />
                                <FilaCamp jugadors={alineacioIdeal.migcampistes} />
                                <FilaCamp jugadors={alineacioIdeal.davanters} />
                            </div>
                        </div>

                        <aside className="ideal-sidepanel">
                            <div className="ideal-side-card">
                                <h5>Esquemes</h5>

                                <div className="scheme-list">
                                    {ESQUEMES.map((esquema) => (
                                        <button
                                            key={esquema}
                                            type="button"
                                            className={`scheme-button ${esquemaSeleccionat === esquema ? 'active' : ''
                                                }`}
                                            onClick={() => setEsquemaSeleccionat(esquema)}
                                        >
                                            {esquema}
                                        </button>
                                    ))}
                                </div>
                            </div>

                            <div className="ideal-side-card">
                                <h5>Entrenador</h5>

                                <div className="coach-box">
                                    <span className="coach-label">Tècnic</span>
                                    <strong>{entrenadorNom}</strong>
                                </div>
                            </div>

                            <div className="ideal-side-card">
                                <h5>Banqueta / Reserves</h5>

                                {alineacioIdeal.banqueta.length > 0 ? (
                                    <div className="bench-list">
                                        {alineacioIdeal.banqueta.map((jugador) => (
                                            <div className="bench-item" key={jugador.id}>
                                                <div className="bench-name">{jugador.nom}</div>
                                                <div className="bench-meta">
                                                    {normalitzarPosicio(jugador.posicio_base)} ·{' '}
                                                    {(Number(jugador.valor_mercat || 0) / 1000000).toFixed(1)} M€
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                ) : (
                                    <p className="text-muted mb-0">Sense reserves disponibles.</p>
                                )}
                            </div>
                        </aside>
                    </div>

                    {alineacioIdeal.faltenJugadors > 0 && (
                        <div className="ideal-warning">
                            Falten <strong>{alineacioIdeal.faltenJugadors}</strong> jugador(s) per
                            completar l’esquema <strong>{alineacioIdeal.esquema}</strong>.
                        </div>
                    )}
                </div>
            </div>

            <h4 className="fw-bold mb-3">Plantilla completa</h4>

            <div className="row">
                {jugadorsFiltrats.map((jugador) => {
                    const posicio = normalitzarPosicio(jugador.posicio_base)
                    const posClass = obtenirClassePosicio(posicio)

                    return (
                        <div className="col-md-6 col-lg-4 mb-4" key={jugador.id}>
                            <div className={`card h-100 shadow-sm squad-player-card ${posClass}`}>
                                <div className="card-body">
                                    <h5 className="card-title">{jugador.nom}</h5>

                                    <p className="mb-1">
                                        <strong>Posició:</strong>{' '}
                                        <span className={`squad-position ${posClass}`}>
                                            {posicio}
                                        </span>
                                    </p>

                                    <p className="mb-1">
                                        <strong>Valor:</strong>{' '}
                                        {(Number(jugador.valor_mercat || 0) / 1000000).toFixed(1)} M€
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

function FilaCamp({ jugadors }) {
    return (
        <div
            className="ideal-pitch-row"
            style={{ '--cols': jugadors.length || 1 }}
        >
            {jugadors.map((jugador, index) => {
                if (jugador.__placeholder) {
                    return (
                        <div
                            className={`ideal-player-card is-empty ${obtenirClassePosicio(jugador.posicio)}`}
                            key={`placeholder-${jugador.posicio}-${index}`}
                        >
                            <div className="ideal-player-name">Buit</div>
                            <div className={`ideal-player-position ${obtenirClassePosicio(jugador.posicio)}`}>
                                {jugador.posicio}
                            </div>
                            <div className="ideal-player-meta">Sense jugador</div>
                        </div>
                    )
                }

                const posicio = normalitzarPosicio(jugador.posicio_base)
                const posClass = obtenirClassePosicio(posicio)

                return (
                    <div className={`ideal-player-card ${posClass}`} key={jugador.id}>
                        <div className="ideal-player-name">{jugador.nom}</div>
                        <div className={`ideal-player-position ${posClass}`}>{posicio}</div>
                        <div className="ideal-player-meta">
                            Punts: {Number(jugador.puntuacio_total || 0)}
                        </div>
                        <div className="ideal-player-meta">
                            Valor: {(Number(jugador.valor_mercat || 0) / 1000000).toFixed(1)} M€
                        </div>
                    </div>
                )
            })}
        </div>
    )
}

function construirAlineacioIdeal(jugadors, esquema) {
    const ordenats = [...jugadors].sort(ordenarJugadors)

    const [defReq, migReq, davReq] = esquema.split('-').map(Number)

    const porters = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'PORTER')
    const defenses = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'DEFENSA')
    const migcampistes = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'MIGCAMPISTA')
    const davanters = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'DAVANTER')

    const titularPorterReal = porters.slice(0, 1)
    const titularDefensesReals = defenses.slice(0, defReq)
    const titularMigcampistesReals = migcampistes.slice(0, migReq)
    const titularDavantersReals = davanters.slice(0, davReq)

    const titularsReals = [
        ...titularPorterReal,
        ...titularDefensesReals,
        ...titularMigcampistesReals,
        ...titularDavantersReals
    ]

    const idsTitulars = new Set(titularsReals.map((j) => j.id))
    const banqueta = ordenats.filter((j) => !idsTitulars.has(j.id))

    const porter = omplirAmbBuits(titularPorterReal, 1, 'PORTER')
    const defensesVisuals = omplirAmbBuits(titularDefensesReals, defReq, 'DEFENSA')
    const migcampistesVisuals = omplirAmbBuits(titularMigcampistesReals, migReq, 'MIGCAMPISTA')
    const davantersVisuals = omplirAmbBuits(titularDavantersReals, davReq, 'DAVANTER')

    const faltenJugadors =
        (1 - titularPorterReal.length) +
        (defReq - titularDefensesReals.length) +
        (migReq - titularMigcampistesReals.length) +
        (davReq - titularDavantersReals.length)

    return {
        esquema,
        porter,
        defenses: defensesVisuals,
        migcampistes: migcampistesVisuals,
        davanters: davantersVisuals,
        banqueta,
        faltenJugadors
    }
}

function omplirAmbBuits(jugadors, requerits, posicio) {
    const resultat = [...jugadors]

    while (resultat.length < requerits) {
        resultat.push({
            __placeholder: true,
            posicio
        })
    }

    return resultat
}

function extreureEntrenadorNom(equip) {
    if (equip?.entrenador?.nom) return equip.entrenador.nom
    if (Array.isArray(equip?.entrenadors) && equip.entrenadors.length > 0) {
        return equip.entrenadors[0]?.nom || 'Per assignar'
    }
    return 'Per assignar'
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

    if (valor.includes('porter')) return 'PORTER'
    if (valor.includes('defensa')) return 'DEFENSA'
    if (valor.includes('mig')) return 'MIGCAMPISTA'
    if (valor.includes('davanter')) return 'DAVANTER'

    return posicio?.toUpperCase() || 'DESCONEGUDA'
}

function obtenirClassePosicio(posicio) {
    if (posicio === 'PORTER') return 'pos-porter'
    if (posicio === 'DEFENSA') return 'pos-defensa'
    if (posicio === 'MIGCAMPISTA') return 'pos-migcampista'
    if (posicio === 'DAVANTER') return 'pos-davanter'
    return ''
}

export default EquipRealDetail