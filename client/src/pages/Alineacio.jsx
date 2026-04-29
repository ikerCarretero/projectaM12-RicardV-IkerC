import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { api } from '../services/api'
import './Alineacio.css'

const ESQUEMES = ['5-4-1', '5-3-2', '4-5-1', '4-4-2', '4-3-3', '3-5-2', '3-4-3']

function Alineacio() {
    const [equip, setEquip] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [esquema, setEsquema] = useState('4-3-3')

    useEffect(() => {
        const carregarDades = async () => {
            try {
                setLoading(true)
                setError('')

                const userResponse = await api.getMe()
                const equipsResponse = await api.getEquipsFantasy()

                const user = userResponse?.data || userResponse
                const equips = equipsResponse?.data || equipsResponse || []

                const meuEquip =
                    equips.find((item) => item?.usuari_id === user?.id) ||
                    equips.find((item) => item?.usuari?.id === user?.id) ||
                    null

                setEquip(meuEquip)
            } catch (err) {
                console.error(err)
                setError(err.message || 'No s’ha pogut carregar l’alineació.')
            } finally {
                setLoading(false)
            }
        }

        carregarDades()
    }, [])

    const jugadors = equip?.jugadors || []

    const alineacio = useMemo(() => {
        return construirAlineacio(jugadors, esquema)
    }, [jugadors, esquema])

    const capitaId = useMemo(() => {
        const millor = [...alineacio.titulars].sort(ordenarJugadors)[0]
        return millor?.id || null
    }, [alineacio])

    if (loading) {
        return <p>Carregant alineació...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    if (!equip) {
        return (
            <div>
                <div className="alineacio-page-header">
                    <h1 className="fw-bold mb-2">Alineació</h1>
                    <p className="alineacio-page-subtitle mb-0">
                        Encara no tens equip fantasy creat.
                    </p>
                </div>

                <div className="card shadow-sm border-0">
                    <div className="card-body p-4">
                        <h4 className="fw-bold mb-3">Sense equip fantasy</h4>
                        <p className="text-muted mb-4">
                            Quan tinguis un equip creat, aquí podràs preparar la teva alineació,
                            escollir l’esquema i veure els titulars i la banqueta.
                        </p>

                        <div className="d-flex flex-wrap gap-3">
                            <Link to="/competicions" className="btn btn-dark">
                                Veure competicions
                            </Link>

                            <Link to="/equip" className="btn btn-outline-dark">
                                Veure equip
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        )
    }

    return (
        <div>
            <div className="alineacio-page-header">
                <h1 className="fw-bold mb-2">Alineació</h1>
                <p className="alineacio-page-subtitle mb-0">
                    {equip.nom_equip || 'El meu equip fantasy'} · Esquema actual {esquema}
                </p>
            </div>

            {jugadors.length === 0 ? (
                <div className="alert alert-info">
                    Aquest equip encara no té jugadors assignats.
                </div>
            ) : (
                <div className="alineacio-layout">
                    <div>
                        <div className="pitch">
                            <div className="pitch-row-group">
                                <div className="pitch-row-title">Porter</div>
                                <div className="pitch-row porter-row">
                                    {alineacio.porter.length > 0 ? (
                                        alineacio.porter.map((jugador) => (
                                            <PlayerCard
                                                key={jugador.id}
                                                jugador={jugador}
                                                isCaptain={jugador.id === capitaId}
                                            />
                                        ))
                                    ) : (
                                        <div className="empty-row">Sense porter</div>
                                    )}
                                </div>
                            </div>

                            <div className="pitch-row-group">
                                <div className="pitch-row-title">Defenses</div>
                                <div className="pitch-row">
                                    {alineacio.defenses.length > 0 ? (
                                        alineacio.defenses.map((jugador) => (
                                            <PlayerCard
                                                key={jugador.id}
                                                jugador={jugador}
                                                isCaptain={jugador.id === capitaId}
                                            />
                                        ))
                                    ) : (
                                        <div className="empty-row">Sense defenses</div>
                                    )}
                                </div>
                            </div>

                            <div className="pitch-row-group">
                                <div className="pitch-row-title">Migcampistes</div>
                                <div className="pitch-row">
                                    {alineacio.migcampistes.length > 0 ? (
                                        alineacio.migcampistes.map((jugador) => (
                                            <PlayerCard
                                                key={jugador.id}
                                                jugador={jugador}
                                                isCaptain={jugador.id === capitaId}
                                            />
                                        ))
                                    ) : (
                                        <div className="empty-row">Sense migcampistes</div>
                                    )}
                                </div>
                            </div>

                            <div className="pitch-row-group">
                                <div className="pitch-row-title">Davanters</div>
                                <div className="pitch-row forwards-row">
                                    {alineacio.davanters.length > 0 ? (
                                        alineacio.davanters.map((jugador) => (
                                            <PlayerCard
                                                key={jugador.id}
                                                jugador={jugador}
                                                isCaptain={jugador.id === capitaId}
                                            />
                                        ))
                                    ) : (
                                        <div className="empty-row">Sense davanters</div>
                                    )}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="alineacio-sidebar-panels">
                        <div className="alineacio-panel">
                            <h4 className="fw-bold mb-3">Esquemes</h4>

                            <div className="esquemes-grid">
                                {ESQUEMES.map((item) => (
                                    <button
                                        key={item}
                                        type="button"
                                        className={`esquema-btn ${esquema === item ? 'active' : ''}`}
                                        onClick={() => setEsquema(item)}
                                    >
                                        {item}
                                    </button>
                                ))}
                            </div>
                        </div>

                        <div className="alineacio-panel">
                            <h4 className="fw-bold mb-3">Entrenador</h4>

                            <div className="coach-card-box">
                                <div className="coach-card-label">TÈCNIC</div>
                                <div className="coach-card-name">
                                    {equip?.entrenador?.nom || 'Per assignar'}
                                </div>
                            </div>
                        </div>

                        <div className="alineacio-panel">
                            <h4 className="fw-bold mb-3">Banqueta / Reserves</h4>

                            {alineacio.banqueta.length === 0 ? (
                                <div className="text-muted">No hi ha reserves disponibles.</div>
                            ) : (
                                <div className="banqueta-list">
                                    {alineacio.banqueta.map((jugador) => (
                                        <div key={jugador.id} className="banqueta-item">
                                            <div className="banqueta-name">{jugador.nom}</div>
                                            <div className="banqueta-meta">
                                                {normalitzarPosicio(jugador.posicio_base)} · {formatMercat(jugador.valor_mercat)}
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            )}
                        </div>
                    </div>
                </div>
            )}
        </div>
    )
}

function PlayerCard({ jugador, isCaptain = false }) {
    return (
        <div className={`player-card ${isCaptain ? 'capita' : ''}`}>
            <div className="player-top">
                {isCaptain && <div className="captain-badge">C</div>}

                <div className="player-avatar">
                    {obtenirInicials(jugador.nom)}
                </div>
            </div>

            <div className="player-name">
                {jugador.nom}
            </div>
        </div>
    )
}

function construirAlineacio(jugadors, esquema) {
    const [defensesNum, migcampistesNum, davantersNum] = esquema.split('-').map(Number)

    const ordenats = [...jugadors].sort(ordenarJugadors)

    const porters = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'PORTER')
    const defenses = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'DEFENSA')
    const migcampistes = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'MIGCAMPISTA')
    const davanters = ordenats.filter((j) => normalitzarPosicio(j.posicio_base) === 'DAVANTER')

    const titularPorter = porters.slice(0, 1)
    const titularDefenses = defenses.slice(0, defensesNum)
    const titularMigcampistes = migcampistes.slice(0, migcampistesNum)
    const titularDavanters = davanters.slice(0, davantersNum)

    const idsTitulars = new Set(
        [
            ...titularPorter,
            ...titularDefenses,
            ...titularMigcampistes,
            ...titularDavanters
        ].map((j) => j.id)
    )

    const titulars = [
        ...titularPorter,
        ...titularDefenses,
        ...titularMigcampistes,
        ...titularDavanters
    ]

    const banqueta = ordenats.filter((j) => !idsTitulars.has(j.id))

    return {
        porter: titularPorter,
        defenses: titularDefenses,
        migcampistes: titularMigcampistes,
        davanters: titularDavanters,
        titulars,
        banqueta
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

    if (valor.includes('porter')) return 'PORTER'
    if (valor.includes('defensa')) return 'DEFENSA'
    if (valor.includes('mig')) return 'MIGCAMPISTA'
    if (valor.includes('davanter')) return 'DAVANTER'

    return posicio?.toUpperCase() || 'DESCONEGUDA'
}

function obtenirInicials(nom) {
    if (!nom) return '?'

    const parts = nom.trim().split(' ').filter(Boolean)

    if (parts.length === 1) {
        return parts[0].charAt(0).toUpperCase()
    }

    return `${parts[0].charAt(0)}${parts[1].charAt(0)}`.toUpperCase()
}

function formatMercat(valor) {
    return `${(Number(valor || 0) / 1000000).toFixed(1)} M€`
}

export default Alineacio