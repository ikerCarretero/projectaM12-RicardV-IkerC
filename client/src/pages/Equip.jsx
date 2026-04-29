import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { api } from '../services/api'

function Equip() {
    const [equip, setEquip] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarEquip = async () => {
            try {
                setLoading(true)
                setError('')

                const user = await api.getMe()
                const equips = await api.getEquipsFantasy()

                const me = user?.data || user
                const llistaEquips = equips?.data || equips || []

                const meuEquip =
                    llistaEquips.find((equip) => equip?.usuari_id === me?.id) ||
                    llistaEquips.find((equip) => equip?.usuari?.id === me?.id) ||
                    null

                setEquip(meuEquip)
            } catch (err) {
                console.error(err)
                setError(err.message || 'No s’ha pogut carregar el teu equip fantasy.')
            } finally {
                setLoading(false)
            }
        }

        carregarEquip()
    }, [])

    const jugadors = equip?.jugadors || []

    const porters = useMemo(
        () => jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'PORTER'),
        [jugadors]
    )

    const defenses = useMemo(
        () => jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'DEFENSA'),
        [jugadors]
    )

    const migcampistes = useMemo(
        () => jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'MIGCAMPISTA'),
        [jugadors]
    )

    const davanters = useMemo(
        () => jugadors.filter((j) => normalitzarPosicio(j.posicio_base) === 'DAVANTER'),
        [jugadors]
    )

    if (loading) {
        return <p>Carregant equip...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    if (!equip) {
        return (
            <div>
                <h1 className="fw-bold mb-4">El meu equip</h1>

                <div className="card shadow-sm border-0">
                    <div className="card-body p-4">
                        <h4 className="fw-bold mb-3">Encara no tens cap equip fantasy</h4>
                        <p className="text-muted mb-4">
                            Quan existeixi el teu equip o la teva lliga, aquí veuràs la plantilla completa.
                        </p>

                        <div className="d-flex flex-wrap gap-3">
                            <Link to="/competicions" className="btn btn-dark">
                                Veure competicions
                            </Link>

                            <Link to="/rankings" className="btn btn-outline-dark">
                                Veure rankings
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        )
    }

    return (
        <div>
            <div className="card shadow-sm mb-4 border-0">
                <div className="card-body p-4">
                    <h1 className="fw-bold mb-3">{equip.nom_equip || 'El meu equip fantasy'}</h1>

                    <div className="row g-3">
                        <div className="col-md-4">
                            <div className="border rounded-4 p-3 h-100 bg-light">
                                <div className="text-muted small mb-1">Pressupost</div>
                                <div className="fw-bold fs-4">
                                    {formatEuros(equip.pressupost)}
                                </div>
                            </div>
                        </div>

                        <div className="col-md-4">
                            <div className="border rounded-4 p-3 h-100 bg-light">
                                <div className="text-muted small mb-1">Jugadors</div>
                                <div className="fw-bold fs-4">
                                    {jugadors.length}
                                </div>
                            </div>
                        </div>

                        <div className="col-md-4">
                            <div className="border rounded-4 p-3 h-100 bg-light">
                                <div className="text-muted small mb-1">Punts totals</div>
                                <div className="fw-bold fs-4">
                                    {Number(equip.punts_totals || equip.puntuacio_total || 0)}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <SeccioJugadors titol="Porters" jugadors={porters} />
            <SeccioJugadors titol="Defenses" jugadors={defenses} />
            <SeccioJugadors titol="Migcampistes" jugadors={migcampistes} />
            <SeccioJugadors titol="Davanters" jugadors={davanters} />
        </div>
    )
}

function SeccioJugadors({ titol, jugadors }) {
    return (
        <div className="mb-4">
            <h3 className="fw-bold mb-3">{titol}</h3>

            {jugadors.length === 0 ? (
                <div className="alert alert-light border">
                    No hi ha jugadors en aquesta posició.
                </div>
            ) : (
                <div className="row">
                    {jugadors.map((jugador) => (
                        <div className="col-md-6 col-xl-4 mb-3" key={jugador.id}>
                            <div className={`card h-100 shadow-sm position-card ${classePosicio(jugador.posicio_base)}`}>
                                <div className="card-body">
                                    <h5 className="card-title fw-bold">{jugador.nom}</h5>
                                    <p className="mb-1">
                                        <strong>Posició:</strong> {normalitzarPosicio(jugador.posicio_base)}
                                    </p>
                                    <p className="mb-1">
                                        <strong>Valor:</strong> {formatMercat(jugador.valor_mercat)}
                                    </p>
                                    <p className="mb-0">
                                        <strong>Punts:</strong> {Number(jugador.puntuacio_total || 0)}
                                    </p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            )}
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

function classePosicio(posicio) {
    const normalitzada = normalitzarPosicio(posicio)

    if (normalitzada === 'PORTER') return 'position-porter'
    if (normalitzada === 'DEFENSA') return 'position-defensa'
    if (normalitzada === 'MIGCAMPISTA') return 'position-migcampista'
    if (normalitzada === 'DAVANTER') return 'position-davanter'

    return ''
}

function formatMercat(valor) {
    return `${(Number(valor || 0) / 1000000).toFixed(1)} M€`
}

function formatEuros(valor) {
    return `${new Intl.NumberFormat('ca-ES').format(Number(valor || 0))} €`
}

export default Equip