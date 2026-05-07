import { useEffect, useMemo, useState } from 'react'
import { api } from '../services/api'
import './Alineacio.css'

const ESQUEMES = ['5-4-1', '5-3-2', '4-5-1', '4-4-2', '4-3-3', '3-5-2', '3-4-3']

function Alineacio() {
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [usuari, setUsuari] = useState(null)
    const [meuEquip, setMeuEquip] = useState(null)
    const [esquemaSeleccionat, setEsquemaSeleccionat] = useState('4-3-3')
    const [capitaId, setCapitaId] = useState(null)

    useEffect(() => {
        const carregar = async () => {
            try {
                setLoading(true)
                setError('')

                const user = await api.getMe()
                const equips = await api.getEquipsFantasy()

                const equipTrobat =
                    equips.find((equip) => equip.usuari_id === user?.id) ||
                    equips.find((equip) => equip.usuari?.id === user?.id) ||
                    null

                setUsuari(user)
                setMeuEquip(equipTrobat)
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar la pàgina d’alineació.')
            } finally {
                setLoading(false)
            }
        }

        carregar()
    }, [])

    const jugadors = meuEquip?.jugadors || []

    const alineacio = useMemo(() => {
        return construirAlineacioFantasy(jugadors, esquemaSeleccionat)
    }, [jugadors, esquemaSeleccionat])

    useEffect(() => {
        const titulars = alineacio.titularsReals || []

        if (!titulars.length) {
            setCapitaId(null)
            return
        }

        const capitaActualExisteix = titulars.some((jugador) => jugador.id === capitaId)

        if (!capitaActualExisteix) {
            setCapitaId(titulars[0].id)
        }
    }, [alineacio, capitaId])

    const capita = useMemo(() => {
        return (alineacio.titularsReals || []).find((jugador) => jugador.id === capitaId) || null
    }, [alineacio, capitaId])

    if (loading) {
        return <p>Carregant alineació...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    if (!meuEquip) {
        return (
            <div className="alineacio-page">
                <div className="alineacio-empty-card">
                    <h1 className="alineacio-title">Alineació</h1>
                    <p className="alineacio-subtitle">
                        Encara no tens un equip fantasy associat.
                    </p>

                    <div className="alineacio-empty-box">
                        <h3>Alineació no disponible</h3>
                        <p>
                            Quan tinguis equip i jugadors assignats, aquí podràs veure i preparar
                            la teva alineació visual.
                        </p>

                        <div className="alineacio-empty-grid">
                            <div className="alineacio-empty-item">
                                <strong>Usuari</strong>
                                <span>{usuari?.nom || usuari?.name || '-'}</span>
                            </div>

                            <div className="alineacio-empty-item">
                                <strong>Estat</strong>
                                <span>Pendent d’equip fantasy</span>
                            </div>

                            <div className="alineacio-empty-item">
                                <strong>Mòdul</strong>
                                <span>Preparat visualment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }

    return (
        <div className="alineacio-page">
            <div className="alineacio-header">
                <div>
                    <h1 className="alineacio-title">Alineació</h1>
                    <p className="alineacio-subtitle">
                        Prepara l’onze inicial del teu equip fantasy amb una vista visual del camp.
                    </p>
                </div>
            </div>

            <div className="alineacio-summary-grid">
                <div className="alineacio-summary-card">
                    <span>Equip</span>
                    <strong>{meuEquip.nom_equip || 'Sense nom'}</strong>
                </div>

                <div className="alineacio-summary-card">
                    <span>Esquema</span>
                    <strong>{alineacio.esquema}</strong>
                </div>

                <div className="alineacio-summary-card">
                    <span>Jugadors disponibles</span>
                    <strong>{jugadors.length}</strong>
                </div>

                <div className="alineacio-summary-card">
                    <span>Capità</span>
                    <strong>{capita?.nom || 'Sense capità'}</strong>
                </div>
            </div>

            <div className="alineacio-layout">
                <div className="alineacio-main-card">
                    <div className="pitch">
                        <div className="pitch-inner">
                            <FilaAlineacio
                                jugadors={alineacio.porter}
                                capitaId={capitaId}
                                onSeleccionarCapita={setCapitaId}
                            />

                            <FilaAlineacio
                                jugadors={alineacio.defenses}
                                capitaId={capitaId}
                                onSeleccionarCapita={setCapitaId}
                            />

                            <FilaAlineacio
                                jugadors={alineacio.migcampistes}
                                capitaId={capitaId}
                                onSeleccionarCapita={setCapitaId}
                            />

                            <FilaAlineacio
                                jugadors={alineacio.davanters}
                                capitaId={capitaId}
                                onSeleccionarCapita={setCapitaId}
                            />
                        </div>
                    </div>

                    {alineacio.faltenJugadors > 0 && (
                        <div className="alineacio-warning">
                            Falten <strong>{alineacio.faltenJugadors}</strong> jugador(s) per completar
                            l’esquema <strong>{alineacio.esquema}</strong>.
                        </div>
                    )}
                </div>

                <aside className="alineacio-sidepanel">
                    <div className="alineacio-side-card">
                        <h3>Esquemes</h3>

                        <div className="scheme-list">
                            {ESQUEMES.map((esquema) => (
                                <button
                                    key={esquema}
                                    type="button"
                                    className={`scheme-button ${esquemaSeleccionat === esquema ? 'active' : ''}`}
                                    onClick={() => setEsquemaSeleccionat(esquema)}
                                >
                                    {esquema}
                                </button>
                            ))}
                        </div>
                    </div>

                    <div className="alineacio-side-card">
                        <h3>Capità</h3>

                        <div className="captain-box">
                            <span className="captain-label">Seleccionat</span>
                            <strong>{capita?.nom || 'Capità pendent'}</strong>
                            <small>Fes clic sobre un titular per marcar-lo com a capità.</small>
                        </div>
                    </div>

                    <div className="alineacio-side-card">
                        <h3>Banqueta / Reserves</h3>

                        {alineacio.banqueta.length > 0 ? (
                            <div className="bench-list">
                                {alineacio.banqueta.map((jugador) => (
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
        </div>
    )
}

function FilaAlineacio({ jugadors, capitaId, onSeleccionarCapita }) {
    return (
        <div className="pitch-row" style={{ '--cols': jugadors.length || 1 }}>
            {jugadors.map((jugador, index) => {
                if (jugador.__placeholder) {
                    return (
                        <div
                            key={`placeholder-${jugador.posicio}-${index}`}
                            className={`player-card empty ${obtenirClassePosicio(jugador.posicio)}`}
                        >
                            <div className="player-top">
                                <div className="player-avatar empty-avatar">—</div>
                            </div>
                            <div className="player-name">Buit</div>
                            <div className="player-meta">{jugador.posicio}</div>
                        </div>
                    )
                }

                const posicio = normalitzarPosicio(jugador.posicio_base)
                const posClass = obtenirClassePosicio(posicio)
                const esCapita = capitaId === jugador.id

                return (
                    <div
                        key={jugador.id}
                        className={`player-card seleccionable ${posClass} ${esCapita ? 'capita' : ''}`}
                        onClick={() => onSeleccionarCapita(jugador.id)}
                    >
                        <div className="player-top">
                            {esCapita && <div className="captain-badge">C</div>}
                            <div className="player-avatar">
                                {obtenirInicials(jugador.nom)}
                            </div>
                        </div>

                        <div className="player-name">{jugador.nom}</div>
                        <div className={`player-meta player-position ${posClass}`}>{posicio}</div>
                        <div className="player-meta">
                            {(Number(jugador.valor_mercat || 0) / 1000000).toFixed(1)} M€
                        </div>
                    </div>
                )
            })}
        </div>
    )
}

function construirAlineacioFantasy(jugadors, esquema) {
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

    const faltenJugadors =
        (1 - titularPorterReal.length) +
        (defReq - titularDefensesReals.length) +
        (migReq - titularMigcampistesReals.length) +
        (davReq - titularDavantersReals.length)

    return {
        esquema,
        porter: omplirAmbBuits(titularPorterReal, 1, 'PORTER'),
        defenses: omplirAmbBuits(titularDefensesReals, defReq, 'DEFENSA'),
        migcampistes: omplirAmbBuits(titularMigcampistesReals, migReq, 'MIGCAMPISTA'),
        davanters: omplirAmbBuits(titularDavantersReals, davReq, 'DAVANTER'),
        titularsReals,
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

function obtenirInicials(nom = '') {
    return nom
        .split(' ')
        .filter(Boolean)
        .slice(0, 2)
        .map((part) => part[0]?.toUpperCase() || '')
        .join('')
}

export default Alineacio