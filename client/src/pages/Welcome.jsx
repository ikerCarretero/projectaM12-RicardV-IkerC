import { useEffect, useState } from 'react'
import { useNavigate } from 'react-router-dom'
import { api } from '../services/api'
import './Welcome.css'

function Welcome() {
    const navigate = useNavigate()
    const [competicions, setCompeticions] = useState([])
    const [loadingCompeticions, setLoadingCompeticions] = useState(true)

    useEffect(() => {
        const carregarCompeticions = async () => {
            try {
                setLoadingCompeticions(true)
                const data = await api.getCompeticions()
                setCompeticions(Array.isArray(data) ? data.slice(0, 5) : [])
            } catch (error) {
                console.error('Error carregant competicions:', error)
                setCompeticions([])
            } finally {
                setLoadingCompeticions(false)
            }
        }

        carregarCompeticions()
    }, [])

    const entrarComGuest = () => {
        localStorage.setItem('ffe_guest', 'true')
        localStorage.removeItem('ffe_user')
        localStorage.removeItem('ffe_token')
        navigate('/dashboard')
    }

    return (
        <div className="landing-page">
            <section className="landing-hero">
                <div className="landing-hero-overlay"></div>

                <div className="landing-hero-content container">
                    <div className="landing-hero-left">
                        <span className="landing-badge">Fantasy de fútbol de la Champions League </span>

                        <h1 className="landing-title">
                            Construeix el teu <span>Fantasy Champions</span>
                        </h1>

                        <p className="landing-subtitle">
                            Explora les grans competicions europees, consulta plantilles completes,
                            descobreix alineacions ideals i prepara el teu equip fantasy amb una
                            experiència visual molt més pro.
                        </p>

                        <div className="landing-actions">
                            <button
                                className="landing-btn landing-btn-primary"
                                onClick={() => navigate('/competicions')}
                            >
                                Explorar competicions
                            </button>

                            <button
                                className="landing-btn landing-btn-secondary"
                                onClick={entrarComGuest}
                            >
                                Entrar com a guest
                            </button>

                            <button
                                className="landing-btn landing-btn-ghost"
                                onClick={() => navigate('/login')}
                            >
                                Iniciar sessió
                            </button>
                        </div>

                        <div className="landing-stats">
                            <div className="landing-stat-card">
                                <strong>Competicions</strong>
                                <span>Les grans lligues europees</span>
                            </div>

                            <div className="landing-stat-card">
                                <strong>Plantilles</strong>
                                <span>Jugadors i valor de mercat</span>
                            </div>

                            <div className="landing-stat-card">
                                <strong>Alineacions</strong>
                                <span>Esquemes visuals i XI ideal</span>
                            </div>
                        </div>
                    </div>

                    <div className="landing-hero-right">
                        <div className="hero-panel hero-panel-main">
                            <div className="hero-panel-header">
                                <span className="dot dot-cyan"></span>
                                <span className="dot dot-pink"></span>
                                <span className="dot dot-blue"></span>
                            </div>

                            <div className="hero-panel-field">
                                <div className="field-line field-line-top"></div>
                                <div className="field-line field-line-mid"></div>
                                <div className="field-circle"></div>

                                <div className="player-chip player-gk">GK</div>

                                <div className="player-row row-def">
                                    <div className="player-chip">DEF</div>
                                    <div className="player-chip">DEF</div>
                                    <div className="player-chip">DEF</div>
                                    <div className="player-chip">DEF</div>
                                </div>

                                <div className="player-row row-mid">
                                    <div className="player-chip">MID</div>
                                    <div className="player-chip">MID</div>
                                    <div className="player-chip">MID</div>
                                </div>

                                <div className="player-row row-att">
                                    <div className="player-chip">ATT</div>
                                    <div className="player-chip">ATT</div>
                                    <div className="player-chip">ATT</div>
                                </div>
                            </div>
                        </div>

                        <div className="hero-floating-card hero-floating-card-one">
                            <span className="floating-label">Alineació ideal</span>
                            <strong>4-3-3</strong>
                        </div>

                        <div className="hero-floating-card hero-floating-card-two">
                            <span className="floating-label">Plantilles reals</span>
                            <strong>Jugadors · Valor · Punts</strong>
                        </div>
                    </div>
                </div>
            </section>

            <section className="landing-section container">
                <div className="landing-section-heading">
                    <h2>Què pots fer</h2>
                    <p>
                        Una base sòlida per consultar equips, comparar plantilles i preparar el
                        teu fantasy.
                    </p>
                </div>

                <div className="landing-features-grid">
                    <article className="landing-feature-card">
                        <div className="feature-icon">🏆</div>
                        <h3>Explora competicions</h3>
                        <p>
                            Consulta Premier League, La Liga, Serie A, Bundesliga i més en una sola
                            plataforma.
                        </p>
                    </article>

                    <article className="landing-feature-card">
                        <div className="feature-icon">👥</div>
                        <h3>Plantilles completes</h3>
                        <p>
                            Entra a cada equip i revisa tots els jugadors amb posició, valor i
                            puntuació total.
                        </p>
                    </article>

                    <article className="landing-feature-card">
                        <div className="feature-icon">📋</div>
                        <h3>Alineacions ideals</h3>
                        <p>
                            Visualitza l’onze ideal de cada equip amb diferents esquemes i banqueta.
                        </p>
                    </article>

                    <article className="landing-feature-card">
                        <div className="feature-icon">⚡</div>
                        <h3>Mode guest</h3>
                        <p>
                            Navega i descobreix l’aplicació ràpidament sense haver de registrar-te.
                        </p>
                    </article>
                </div>
            </section>

            <section className="landing-section container">
                <div className="landing-section-heading">
                    <h2>Competicions destacades</h2>
                    <p>Accés ràpid a les principals lligues europees.</p>
                </div>

                <div className="landing-competitions-grid">
                    {loadingCompeticions ? (
                        <div className="landing-empty-box">Carregant competicions...</div>
                    ) : competicions.length > 0 ? (
                        competicions.map((competicio) => (
                            <article className="competition-card" key={competicio.id}>
                                <div className="competition-card-top">
                                    <span className="competition-pill">Competició</span>
                                    <span className="competition-season">
                                        {competicio.temporada || '2025-2026'}
                                    </span>
                                </div>

                                <h3>{competicio.nom}</h3>

                                <p>
                                    {competicio.equips_reals?.length || 0} equips participants
                                </p>

                                <button
                                    className="competition-link"
                                    onClick={() => navigate(`/competicions/${competicio.id}`)}
                                >
                                    Veure competició
                                </button>
                            </article>
                        ))
                    ) : (
                        <div className="landing-empty-box">
                            Encara no hi ha competicions disponibles per mostrar.
                        </div>
                    )}
                </div>
            </section>

            <section className="landing-cta container">
                <div className="landing-cta-box">
                    <div>
                        <h2>Preparat per dominar el teu fantasy?</h2>
                        <p>
                            Consulta equips, descobreix alineacions ideals i entra a l’app amb un
                            estil molt més visual i professional.
                        </p>
                    </div>

                    <div className="landing-cta-actions">
                        <button
                            className="landing-btn landing-btn-primary"
                            onClick={() => navigate('/register')}
                        >
                            Crear compte
                        </button>

                        <button
                            className="landing-btn landing-btn-secondary"
                            onClick={entrarComGuest}
                        >
                            Provar com a guest
                        </button>
                    </div>
                </div>
            </section>
        </div>
    )
}

export default Welcome