import { Link } from 'react-router-dom'
import './NotFound.css'

function NotFound() {
    return (
        <main className="notfound-page">
            <section className="notfound-card">
                <span className="notfound-kicker">Error 404</span>

                <h1>Pàgina no trobada</h1>

                <p>
                    La ruta que has intentat obrir no existeix o ja no està disponible.
                    Torna al dashboard per continuar gestionant el teu equip fantasy.
                </p>

                <div className="notfound-actions">
                    <Link to="/dashboard" className="notfound-main-btn">
                        Tornar al dashboard
                    </Link>

                    <Link to="/lligues" className="notfound-secondary-btn">
                        Veure lligues
                    </Link>
                </div>
            </section>
        </main>
    )
}

export default NotFound