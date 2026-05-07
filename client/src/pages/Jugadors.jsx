import { useEffect, useMemo, useState } from 'react'
import { api } from '../services/api'

function Jugadors() {
    const [filtrePosicio, setFiltrePosicio] = useState('')
    const [jugadors, setJugadors] = useState([])
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarJugadors = async () => {
            try {
                setLoading(true)
                setError('')

                const response = await api.getJugadors()
                const data = Array.isArray(response) ? response : response.data || []

                const jugadorsAdaptats = data.map((jugador) => ({
                    id: jugador.id,
                    nom: jugador.nom,
                    equip: jugador.equip_real?.nom || 'Sense equip',
                    pais: jugador.equip_real?.pais || 'Desconegut',
                    posicio: normalitzarPosicio(jugador.posicio_base),
                    valorMercat: Number(jugador.valor_mercat || 0),
                    puntuacioTotal: Number(jugador.puntuacio_total || 0)
                }))

                setJugadors(jugadorsAdaptats)
            } catch (err) {
                console.error(err)
                setError(`No s’han pogut carregar els jugadors: ${err.message}`)
            } finally {
                setLoading(false)
            }
        }

        carregarJugadors()
    }, [])

    const jugadorsFiltrats = useMemo(() => {
        if (!filtrePosicio) return jugadors
        return jugadors.filter((jugador) => jugador.posicio === filtrePosicio)
    }, [jugadors, filtrePosicio])

    if (loading) {
        return <div className="container mt-4"><p>Carregant jugadors...</p></div>
    }

    if (error) {
        return <div className="container mt-4"><div className="alert alert-danger">{error}</div></div>
    }

    return (
        <div className="container mt-4">
            <div className="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <h2 className="mb-0">Jugadors</h2>

                <div className="d-flex align-items-center gap-2">
                    <label htmlFor="filtrePosicio" className="form-label mb-0">Filtrar per posició:</label>
                    <select
                        id="filtrePosicio"
                        className="form-select"
                        style={{ width: '180px' }}
                        value={filtrePosicio}
                        onChange={(e) => setFiltrePosicio(e.target.value)}
                    >
                        <option value="">Totes</option>
                        <option value="PORTER">Porter</option>
                        <option value="DEFENSA">Defensa</option>
                        <option value="MIGCAMPISTA">Migcampista</option>
                        <option value="DAVANTER">Davanter</option>
                    </select>
                </div>
            </div>

            <div className="row">
                {jugadorsFiltrats.map((jugador) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={jugador.id}>
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <h5 className="card-title">{jugador.nom}</h5>
                                <p className="mb-1"><strong>Equip:</strong> {jugador.equip}</p>
                                <p className="mb-1"><strong>País:</strong> {jugador.pais}</p>
                                <p className="mb-1"><strong>Posició:</strong> {jugador.posicio}</p>
                                <p className="mb-1"><strong>Valor:</strong> {(jugador.valorMercat / 1000000).toFixed(1)} M€</p>
                                <p className="mb-0"><strong>Punts:</strong> {jugador.puntuacioTotal}</p>
                            </div>
                        </div>
                    </div>
                ))}
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

export default Jugadors