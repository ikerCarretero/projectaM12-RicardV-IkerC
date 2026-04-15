import { equipFantasy, partits, jugadors } from '../data/mockData'

function DashboardHome() {
    return (
        <div>
            <h1 className="fw-bold mb-4">Dashboard</h1>

            <div className="row mb-4">
                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Punts totals</h6>
                            <h3>{equipFantasy.puntsTotals}</h3>
                        </div>
                    </div>
                </div>

                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Pressupost</h6>
                            <h3>{equipFantasy.pressupost} M€</h3>
                        </div>
                    </div>
                </div>

                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Jugadors</h6>
                            <h3>{jugadors.length}</h3>
                        </div>
                    </div>
                </div>

                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Partits mock</h6>
                            <h3>{partits.length}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div className="card shadow-sm">
                <div className="card-body">
                    <h4 className="fw-bold mb-3">Resum ràpid</h4>
                    <p className="mb-2">
                        <strong>Equip:</strong> {equipFantasy.nom}
                    </p>
                    <p className="mb-2">
                        <strong>Esquema actual:</strong> {equipFantasy.esquema}
                    </p>
                    <p className="mb-0">
                        Aquí després hi podreu posar notícies, alertes, pròxims partits i resum de puntuació.
                    </p>
                </div>
            </div>
        </div>
    )
}

export default DashboardHome