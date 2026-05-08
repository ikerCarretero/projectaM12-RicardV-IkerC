import { Link } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import './Lligues.css'

function LligaPrivadaDetail() {
    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Detall de lliga"
                title="Lliga privada"
                subtitle="Aquí es mostrarà la informació de la lliga, membres, equips fantasy i classificació."
                actions={
                    <Link to="/lligues" className="app-btn app-btn-secondary">
                        Tornar a lligues
                    </Link>
                }
            />

            <section className="lliga-detail-grid">
                <article className="app-card">
                    <p className="app-page-kicker">Informació</p>
                    <h2 className="mb-3">Dades de la lliga</h2>

                    <div className="app-info-grid">
                        <div className="app-info-box">
                            <strong>Membres</strong>
                            <span>Pendent de connectar.</span>
                        </div>

                        <div className="app-info-box">
                            <strong>Equips fantasy</strong>
                            <span>Pendent de connectar.</span>
                        </div>

                        <div className="app-info-box">
                            <strong>Codi d’invitació</strong>
                            <span>Pendent de generar.</span>
                        </div>
                    </div>
                </article>

                <article className="app-card">
                    <p className="app-page-kicker">Classificació</p>
                    <h2 className="mb-3">Rànquing de la lliga</h2>

                    <div className="app-info-box">
                        <strong>Encara no hi ha dades</strong>
                        <span>
                            Quan hi hagi equips i jornades, aquí es mostrarà la classificació.
                        </span>
                    </div>
                </article>
            </section>
        </main>
    )
}

export default LligaPrivadaDetail