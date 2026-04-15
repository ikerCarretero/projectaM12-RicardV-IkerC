import { useMemo, useState } from 'react'
import { jugadors } from '../data/mockData'

function Jugadors() {
    const [filtrePosicio, setFiltrePosicio] = useState('')

    const jugadorsFiltrats = useMemo(() => {
        if (!filtrePosicio) return jugadors
        return jugadors.filter((jugador) => jugador.posicio === filtrePosicio)
    }, [filtrePosicio])

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
                                <p className="mb-1"><strong>Valor:</strong> {jugador.valorMercat} M€</p>
                                <p className="mb-0"><strong>Punts:</strong> {jugador.puntuacioTotal}</p>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default Jugadors