import { Link } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import './Lligues.css'

function UnirLliga() {
    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Unir-se a una lliga"
                title="Entrar amb codi privat"
                subtitle="Introdueix el codi que t’ha passat l’administrador de la lliga."
                actions={
                    <Link to="/lligues" className="app-btn app-btn-secondary">
                        Tornar a lligues
                    </Link>
                }
            />

            <section className="app-card app-card-large lligues-form-card">
                <form className="lligues-form">
                    <div className="lligues-field">
                        <label htmlFor="codi">Codi de la lliga</label>
                        <input
                            id="codi"
                            type="text"
                            placeholder="Ex: ABC123"
                        />
                    </div>

                    <button type="button" className="app-btn app-btn-primary">
                        Unir-me a la lliga
                    </button>
                </form>
            </section>
        </main>
    )
}

export default UnirLliga