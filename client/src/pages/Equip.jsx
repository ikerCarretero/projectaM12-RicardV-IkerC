import { useEffect, useMemo, useState } from 'react'
import { api } from '../services/api'
import './Equip.css'

function Equip() {
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [meuEquip, setMeuEquip] = useState(null)
    const [usuari, setUsuari] = useState(null)

    useEffect(() => {
        const carregarEquip = async () => {
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
                setError('No s’ha pogut carregar la pàgina del teu equip.')
            } finally {
                setLoading(false)
            }
        }

        carregarEquip()
    }, [])

    const jugadors = meuEquip?.jugadors || []

    const grups = useMemo(() => {
        return {
            porters: jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'PORTER'),
            defenses: jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'DEFENSA'),
            migcampistes: jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'MIGCAMPISTA'),
            davanters: jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'DAVANTER')
        }
    }, [jugadors])

    if (loading) {
        return <p>Carregant equip...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    if (!meuEquip) {
        return (
            <div className="equip-page">
                <div className="equip-empty-card">
                    <h1 className="equip-title">El meu equip</h1>
                    <p className="equip-subtitle">
                        Encara no tens cap equip fantasy creat o associat a una lliga.
                    </p>

                    <div className="equip-empty-box">
                        <h3>Equip no disponible</h3>
                        <p>
                            Quan la part de lligues fantasy estigui connectada, aquí veuràs el teu equip,
                            la plantilla, el pressupost i els punts acumulats.
                        </p>

                        <div className="equip-empty-info">
                            <div className="equip-empty-mini">
                                <strong>Usuari</strong>
                                <span>{usuari?.nom || usuari?.name || '-'}</span>
                            </div>

                            <div className="equip-empty-mini">
                                <strong>Estat</strong>
                                <span>Pendent de creació</span>
                            </div>

                            <div className="equip-empty-mini">
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
        <div className="equip-page">
            <div className="equip-header">
                <div>
                    <h1 className="equip-title">{meuEquip.nom_equip || 'El meu equip'}</h1>
                    <p className="equip-subtitle">
                        Vista general del teu equip fantasy i de la plantilla disponible.
                    </p>
                </div>
            </div>

            <div className="equip-stats-grid">
                <div className="equip-stat-card">
                    <span>Pressupost</span>
                    <strong>{formatEuros(meuEquip.pressupost)}</strong>
                </div>

                <div className="equip-stat-card">
                    <span>Punts totals</span>
                    <strong>{Number(meuEquip.punts_totals || meuEquip.puntuacio_total || 0)}</strong>
                </div>

                <div className="equip-stat-card">
                    <span>Jugadors</span>
                    <strong>{jugadors.length}</strong>
                </div>

                <div className="equip-stat-card">
                    <span>Usuari</span>
                    <strong>{usuari?.nom || usuari?.name || '-'}</strong>
                </div>
            </div>

            <div className="equip-block">
                <h2 className="equip-block-title">Plantilla del teu equip</h2>

                <div className="equip-position-section">
                    <h3 className="equip-position-title porter">Porters</h3>
                    <div className="row">
                        {grups.porters.map((jugador) => (
                            <JugadorCard key={jugador.id} jugador={jugador} />
                        ))}
                    </div>
                </div>

                <div className="equip-position-section">
                    <h3 className="equip-position-title defensa">Defenses</h3>
                    <div className="row">
                        {grups.defenses.map((jugador) => (
                            <JugadorCard key={jugador.id} jugador={jugador} />
                        ))}
                    </div>
                </div>

                <div className="equip-position-section">
                    <h3 className="equip-position-title migcampista">Migcampistes</h3>
                    <div className="row">
                        {grups.migcampistes.map((jugador) => (
                            <JugadorCard key={jugador.id} jugador={jugador} />
                        ))}
                    </div>
                </div>

                <div className="equip-position-section">
                    <h3 className="equip-position-title davanter">Davanters</h3>
                    <div className="row">
                        {grups.davanters.map((jugador) => (
                            <JugadorCard key={jugador.id} jugador={jugador} />
                        ))}
                    </div>
                </div>

                {jugadors.length === 0 && (
                    <div className="alert alert-info mt-3">
                        Aquest equip encara no té jugadors assignats.
                    </div>
                )}
            </div>
        </div>
    )
}

function JugadorCard({ jugador }) {
    const posicio = normalitzarPosicio(jugador.posicio_base)
    const posClass = obtenirClassePosicio(posicio)

    return (
        <div className="col-md-6 col-lg-4 mb-4">
            <div className={`card h-100 shadow-sm equip-jugador-card ${posClass}`}>
                <div className="card-body">
                    <h5 className="card-title">{jugador.nom}</h5>

                    <p className="mb-1">
                        <strong>Posició:</strong>{' '}
                        <span className={`equip-player-position ${posClass}`}>
                            {posicio}
                        </span>
                    </p>

                    <p className="mb-1">
                        <strong>Valor:</strong> {formatEuros(jugador.valor_mercat)}
                    </p>

                    <p className="mb-0">
                        <strong>Punts:</strong> {Number(jugador.puntuacio_total || 0)}
                    </p>
                </div>
            </div>
        </div>
    )
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

function formatEuros(valor) {
    return `${(Number(valor || 0) / 1000000).toFixed(1)} M€`
}

export default Equip