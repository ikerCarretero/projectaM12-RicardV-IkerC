import { Link } from 'react-router-dom'
import PageHeader from '../components/ui/PageHeader'
import EmptyState from '../components/ui/EmptyState'
import './Lligues.css'

function Lligues() {
    const lligues = []

    return (
        <main className="app-page lligues-page">
            <PageHeader
                kicker="Lligues privades"
                title="Les meves lligues"
                subtitle="Crea una lliga d’amics o uneix-te a una lliga privada amb codi. Sense lligues públiques ni patrocinades."
                actions={
                    <>
                        <Link to="/lligues/crear" className="app-btn app-btn-primary">
                            Crear lliga
                        </Link>

                        <Link to="/lligues/unir" className="app-btn app-btn-secondary">
                            Unir-me amb codi
                        </Link>
                    </>
                }
            />

            {lligues.length === 0 ? (
                <EmptyState
                    icon="👥"
                    title="Encara no tens cap lliga"
                    text="Quan creïs o t’uneixis a una lliga privada, apareixerà aquí amb els teus amics, classificació i equips fantasy."
                    actions={
                        <>
                            <Link to="/lligues/crear" className="app-btn app-btn-primary">
                                Crear la meva lliga
                            </Link>

                            <Link to="/lligues/unir" className="app-btn app-btn-secondary">
                                Tinc un codi
                            </Link>
                        </>
                    }
                    items={[
                        {
                            title: 'Lliga d’amics',
                            text: 'Només hi entra qui té el codi privat.',
                        },
                        {
                            title: 'Codi privat',
                            text: 'Ideal per compartir-lo pel grup de WhatsApp.',
                        },
                        {
                            title: 'Fantasy privat',
                            text: 'Sense lligues públiques ni patrocinades.',
                        },
                    ]}
                />
            ) : (
                <section className="lligues-grid">
                    {lligues.map((lliga) => (
                        <article className="lliga-card" key={lliga.id}>
                            <div className="lliga-card-top">
                                <div>
                                    <span className="app-badge app-badge-purple">
                                        Lliga privada
                                    </span>

                                    <h2>{lliga.nom}</h2>
                                </div>

                                <div className="lliga-code">
                                    <span>Codi</span>
                                    <strong>{lliga.codi}</strong>
                                </div>
                            </div>

                            <p className="lliga-description">
                                {lliga.descripcio || 'Fantasy privat entre amics.'}
                            </p>

                            <div className="lliga-info-grid">
                                <div>
                                    <span>Membres</span>
                                    <strong>{lliga.membres ?? 0}</strong>
                                </div>

                                <div>
                                    <span>Equips</span>
                                    <strong>{lliga.equips ?? 0}</strong>
                                </div>
                            </div>

                            <Link
                                to={`/lligues/${lliga.id}`}
                                className="app-btn app-btn-primary w-100"
                            >
                                Entrar a la lliga
                            </Link>
                        </article>
                    ))}
                </section>
            )}
        </main>
    )
}

export default Lligues