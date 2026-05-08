import { Link } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import './Lligues.css'

function CrearLliga() {
    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Nova lliga privada"
                title="Crear lliga d’amics"
                subtitle="Crea una lliga fantasy privada i comparteix el codi només amb el teu grup."
                actions={
                    <Link to="/lligues" className="app-btn app-btn-secondary">
                        Tornar a lligues
                    </Link>
                }
            />

            <section className="app-card app-card-large lligues-form-card">
                <div className="app-info-grid mb-4">
                    <div className="app-info-box">
                        <strong>Privada</strong>
                        <span>Només hi entrarà qui tingui el codi.</span>
                    </div>

                    <div className="app-info-box">
                        <strong>Amics</strong>
                        <span>Ideal per grups petits o coneguts.</span>
                    </div>

                    <div className="app-info-box">
                        <strong>Administració</strong>
                        <span>El creador podrà gestionar la lliga.</span>
                    </div>
                </div>

                <form className="lligues-form">
                    <div className="lligues-field">
                        <label htmlFor="nom">Nom de la lliga</label>
                        <input
                            id="nom"
                            type="text"
                            placeholder="Ex: Lliga dels col·legues"
                        />
                    </div>

                    <div className="lligues-field">
                        <label htmlFor="descripcio">Descripció</label>
                        <textarea
                            id="descripcio"
                            placeholder="Ex: Fantasy privat entre amics de classe"
                        />
                    </div>

                    <button type="button" className="app-btn app-btn-primary">
                        Crear lliga
                    </button>
                </form>
            </section>
        </main>
    )
}

export default CrearLliga