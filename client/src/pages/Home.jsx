import { Link } from 'react-router-dom'

function Home() {
    return (
        <div className="container mt-4">
            <div className="p-5 bg-light rounded-4 shadow-sm">
                <h1 className="fw-bold">Football Fantasy Europe</h1>
                <p className="mb-4">
                    Projecte fantasy basat en la UEFA Champions League 2025/2026.
                </p>

                <div className="d-flex gap-2 flex-wrap">
                    <Link to="/competicions" className="btn btn-primary">
                        Veure competicions
                    </Link>
                    <Link to="/login" className="btn btn-dark">
                        Iniciar sessió
                    </Link>
                    <Link to="/register" className="btn btn-outline-primary">
                        Registrar-me
                    </Link>
                </div>
            </div>
        </div>
    )
}

export default Home