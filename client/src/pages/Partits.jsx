import { partits } from '../data/mockData'

function Partits() {
    return (
        <div className="container mt-4">
            <h2 className="mb-4">Partits</h2>

            <div className="row">
                {partits.map((partit) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={partit.id}>
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <p className="text-muted mb-2">
                                    <strong>Jornada {partit.jornada}</strong>
                                </p>

                                <h5 className="card-title mb-3">
                                    {partit.local} vs {partit.visitant}
                                </h5>

                                <p className="mb-1"><strong>Data:</strong> {partit.dataHora}</p>
                                <p className="mb-1"><strong>Resultat:</strong> {partit.resultat}</p>
                                <p className="mb-0"><strong>Estadi:</strong> {partit.estadi}</p>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default Partits