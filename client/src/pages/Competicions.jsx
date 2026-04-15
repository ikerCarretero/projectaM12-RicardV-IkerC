import { Link } from 'react-router-dom'
import { competicions } from '../data/mockData'

function Competicions() {
    return (
        <div className="container mt-4">
            <h2 className="mb-4 fw-bold">Competicions</h2>

            <div className="row">
                {competicions.map((competicio) => (
                    <div className="col-md-6 col-lg-5 mb-3" key={competicio.id}>
                        <div className="card h-100 shadow-sm rounded-4">
                            <div className="card-body">
                                <h5 className="card-title">{competicio.nom}</h5>
                                <p className="card-text mb-1">
                                    <strong>Temporada:</strong> {competicio.temporada}
                                </p>
                                <p className="card-text mb-3">
                                    <strong>Equips:</strong> {competicio.nombreEquips}
                                </p>

                                <Link className="btn btn-primary" to={`/competicions/${competicio.id}`}>
                                    Veure detall
                                </Link>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default Competicions