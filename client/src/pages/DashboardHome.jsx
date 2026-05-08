import { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { api } from '../services/api'
import PageHeader from '../components/ui/PageHeader'
import StatCard from '../components/ui/StatCard'
import './DashboardHome.css'

function DashboardHome() {
    const [resum, setResum] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarDashboard = async () => {
            try {
                setLoading(true)
                setError('')

                const user = await api.getMe()
                const equips = await api.getEquipsFantasy()
                const partits = await api.getPartits()

                const llistaEquips = Array.isArray(equips) ? equips : []
                const llistaPartits = Array.isArray(partits) ? partits : []

                const meuEquip =
                    llistaEquips.find((equip) => equip.usuari_id === user?.id) ||
                    llistaEquips.find((equip) => equip.usuari?.id === user?.id) ||
                    null

                setResum({
                    user,
                    equip: meuEquip,
                    partits: llistaPartits,
                    alineacio: null,
                })
            } catch (err) {
                console.error(err)
                setError(err.message || 'No s’ha pogut carregar el dashboard.')
            } finally {
                setLoading(false)
            }
        }

        carregarDashboard()
    }, [])

    if (loading) {
        return (
            <main className="app-page dashboard-page">
                <div className="app-card">
                    Carregant dashboard...
                </div>
            </main>
        )
    }

    if (error) {
        return (
            <main className="app-page dashboard-page">
                <div className="alert alert-danger">{error}</div>
            </main>
        )
    }

    const equip = resum?.equip
    const alineacio = resum?.alineacio
    const jugadors = equip?.jugadors || []

    return (
        <main className="app-page dashboard-page">
            <PageHeader
                title="Dashboard"
                subtitle="Visió ràpida del teu estat fantasy, equip, pressupost i accions principals."
            />

            <section className="app-stat-grid">
                <StatCard label="Punts totals" value={equip?.punts_totals ?? 0} />
                <StatCard label="Pressupost" value={`${equip?.pressupost ?? 0} €`} />
                <StatCard label="Jugadors" value={jugadors.length} />
                <StatCard label="Partits" value={resum?.partits?.length ?? 0} />
            </section>

            <section className="dashboard-grid">
                <article className="app-card dashboard-summary-card">
                    <div className="dashboard-card-title-row">
                        <div>
                            <p className="app-page-kicker">Resum ràpid</p>
                            <h2>El teu estat actual</h2>
                        </div>

                        <span className="app-badge app-badge-purple">
                            Connectat
                        </span>
                    </div>

                    <div className="dashboard-summary-list">
                        <div className="dashboard-summary-item">
                            <span>Equip</span>
                            <strong>{equip?.nom_equip || 'Sense equip fantasy'}</strong>
                        </div>

                        <div className="dashboard-summary-item">
                            <span>Usuari</span>
                            <strong>{resum?.user?.nom || resum?.user?.name || '-'}</strong>
                        </div>

                        <div className="dashboard-summary-item">
                            <span>Esquema actual</span>
                            <strong>{alineacio?.esquema || 'Sense alineació'}</strong>
                        </div>

                        <div className="dashboard-summary-item">
                            <span>Backend</span>
                            <strong>Connectat</strong>
                        </div>
                    </div>
                </article>

                <article className="app-card dashboard-actions-card">
                    <p className="app-page-kicker">Accions ràpides</p>
                    <h2>Què vols fer ara?</h2>

                    <div className="dashboard-actions-grid">
                        <Link to="/lligues" className="app-btn app-btn-primary">
                            Veure lligues
                        </Link>

                        <Link to="/lligues/crear" className="app-btn app-btn-secondary">
                            Crear lliga
                        </Link>

                        <Link to="/equip" className="app-btn app-btn-secondary">
                            El meu equip
                        </Link>

                        <Link to="/alineacio" className="app-btn app-btn-secondary">
                            Alineació
                        </Link>
                    </div>
                </article>
            </section>

            <section className="app-card dashboard-project-card">
                <p className="app-page-kicker">Fantasy privat</p>
                <h2>Projecte preparat per lligues d’amics</h2>

                <div className="app-info-grid">
                    <div className="app-info-box">
                        <strong>Lligues privades</strong>
                        <span>El sistema està pensat perquè només hi entrin usuaris amb codi.</span>
                    </div>

                    <div className="app-info-box">
                        <strong>Equips fantasy</strong>
                        <span>Cada usuari podrà gestionar el seu equip dins de la lliga.</span>
                    </div>

                    <div className="app-info-box">
                        <strong>Rànquing</strong>
                        <span>La classificació es podrà calcular segons punts i jornades.</span>
                    </div>
                </div>
            </section>
        </main>
    )
}

export default DashboardHome