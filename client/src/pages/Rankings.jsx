import { Link } from 'react-router-dom'

function Rankings() {
    const esGuest = localStorage.getItem('ffe_guest') === 'true'

    return (
        <div>
            <div className="mb-4">
                <h1 className="fw-bold mb-2">Rankings</h1>
                <p className="text-muted mb-0">
                    Aquí podràs consultar la classificació de les teves lligues fantasy, els millors usuaris i l’evolució de cada jornada.
                </p>
            </div>

            {esGuest ? (
                <div className="card shadow-sm border-0 mb-4">
                    <div className="card-body p-4">
                        <h4 className="fw-bold mb-3">Mode convidat</h4>
                        <p className="text-muted mb-4">
                            Has entrat com a convidat. Per participar en lligues, veure classificacions i gestionar el teu equip fantasy, hauràs d’iniciar sessió amb un compte.
                        </p>

                        <div className="d-flex flex-wrap gap-3">
                            <Link to="/login" className="btn btn-dark">
                                Iniciar sessió
                            </Link>

                            <Link to="/register" className="btn btn-outline-dark">
                                Crear compte
                            </Link>
                        </div>
                    </div>
                </div>
            ) : (
                <div className="card shadow-sm border-0 mb-4">
                    <div className="card-body p-4">
                        <h4 className="fw-bold mb-3">Encara no hi ha lligues disponibles</h4>
                        <p className="text-muted mb-4">
                            Aquesta secció està preparada per mostrar els rankings reals, però de moment encara no s’han creat ni connectat les lligues fantasy.
                        </p>

                        <div className="row g-3">
                            <div className="col-md-4">
                                <div className="border rounded-4 p-3 h-100 bg-light">
                                    <div className="fw-bold mb-2">Lligues privades</div>
                                    <div className="text-muted small">
                                        Properament podràs unir-te a lligues o crear-ne de noves.
                                    </div>
                                </div>
                            </div>

                            <div className="col-md-4">
                                <div className="border rounded-4 p-3 h-100 bg-light">
                                    <div className="fw-bold mb-2">Classificació general</div>
                                    <div className="text-muted small">
                                        Es mostraran els punts, la posició i el rendiment dels usuaris.
                                    </div>
                                </div>
                            </div>

                            <div className="col-md-4">
                                <div className="border rounded-4 p-3 h-100 bg-light">
                                    <div className="fw-bold mb-2">Historial de jornades</div>
                                    <div className="text-muted small">
                                        També podràs veure l’evolució jornada a jornada.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            )}

            <div className="card shadow-sm border-0">
                <div className="card-body p-4">
                    <h5 className="fw-bold mb-3">Estat de la funcionalitat</h5>

                    <div className="row g-3">
                        <div className="col-md-6">
                            <div className="border rounded-4 p-3 h-100">
                                <div className="d-flex justify-content-between align-items-center mb-2">
                                    <span className="fw-semibold">Pantalla preparada</span>
                                    <span className="badge text-bg-success">Actiu</span>
                                </div>
                                <p className="text-muted mb-0 small">
                                    La pàgina ja està integrada dins del dashboard i preparada per mostrar contingut real.
                                </p>
                            </div>
                        </div>

                        <div className="col-md-6">
                            <div className="border rounded-4 p-3 h-100">
                                <div className="d-flex justify-content-between align-items-center mb-2">
                                    <span className="fw-semibold">Dades de lligues</span>
                                    <span className="badge text-bg-warning">Pendent</span>
                                </div>
                                <p className="text-muted mb-0 small">
                                    Quan estigui implementada la part de lligues fantasy, aquí connectarem el ranking real.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Rankings