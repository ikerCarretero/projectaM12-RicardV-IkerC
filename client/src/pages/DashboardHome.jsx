import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import './DashboardHome.css'

function DashboardHome() {
    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'

    const lligaActiva = lligaActivaService.obtenir()
    const jugadorsFitxats = lligaActiva
        ? equipFantasyLocalService.getJugadorsFitxats()
        : []

    const pressupost = lligaActiva
        ? equipFantasyLocalService.getPressupost()
        : 0

    const valorPlantilla = jugadorsFitxats.reduce(
        (total, jugador) => total + Number(jugador.valor_mercat || 0),
        0
    )

    const porters = comptarPerPosicio(jugadorsFitxats, ['porter', 'portero', 'pt'])
    const defenses = comptarPerPosicio(jugadorsFitxats, ['defensa', 'def'])
    const migcampistes = comptarPerPosicio(jugadorsFitxats, [
        'migcampista',
        'mig',
        'centrocampista',
    ])
    const davanters = comptarPerPosicio(jugadorsFitxats, [
        'davanter',
        'delantero',
        'dav',
        'forward',
    ])

    const nomUsuari =
        usuari?.nom ||
        usuari?.name ||
        usuari?.email?.split('@')[0] ||
        (esGuest ? 'Guest' : 'Usuari')

    return (
        <main className="app-page dashboard-page">
            <section className="dashboard-hero">
                <div>
                    <span className="dashboard-kicker">Panell principal</span>

                    <h1>Dashboard</h1>

                    <p>
                        Visió ràpida del teu estat fantasy, equip, pressupost i lliga activa.
                    </p>
                </div>

                <div className="dashboard-user-pill">
                    <span>Usuari</span>
                    <strong>{nomUsuari}</strong>
                </div>
            </section>

            <section className="dashboard-stats-grid">
                <article className="dashboard-stat-card">
                    <span>Pressupost</span>
                    <strong>{formatMoney(pressupost)}</strong>
                </article>

                <article className="dashboard-stat-card">
                    <span>Jugadors fitxats</span>
                    <strong>{jugadorsFitxats.length}</strong>
                </article>

                <article className="dashboard-stat-card">
                    <span>Valor plantilla</span>
                    <strong>{formatMoney(valorPlantilla)}</strong>
                </article>

                <article className="dashboard-stat-card">
                    <span>Lliga activa</span>
                    <strong>{lligaActiva ? lligaActiva.nom : 'Cap'}</strong>
                </article>
            </section>

            {!lligaActiva ? (
                <section className="dashboard-empty-card">
                    <span className="dashboard-kicker">Fantasy privat</span>

                    <h2>Encara no tens cap lliga activa</h2>

                    <p>
                        Selecciona una lliga privada o crea’n una de nova per activar el teu
                        mercat, plantilla i alineació.
                    </p>

                    <div className="dashboard-actions">
                        <Link to="/lligues" className="dashboard-main-btn">
                            Veure lligues
                        </Link>

                        <Link to="/crear-lliga" className="dashboard-secondary-btn">
                            Crear lliga
                        </Link>
                    </div>
                </section>
            ) : (
                <>
                    <section className="dashboard-main-grid">
                        <article className="dashboard-card dashboard-summary-card">
                            <span className="dashboard-kicker">Resum ràpid</span>

                            <h2>El teu estat actual</h2>

                            <div className="dashboard-info-list">
                                <div>
                                    <span>Equip</span>
                                    <strong>
                                        {jugadorsFitxats.length > 0
                                            ? `${jugadorsFitxats.length} jugadors`
                                            : 'Sense plantilla'}
                                    </strong>
                                </div>

                                <div>
                                    <span>Usuari</span>
                                    <strong>{nomUsuari}</strong>
                                </div>

                                <div>
                                    <span>Esquema actual</span>
                                    <strong>4-3-3</strong>
                                </div>

                                <div>
                                    <span>Backend</span>
                                    <strong>Connectat / demo local</strong>
                                </div>
                            </div>

                            <div className="dashboard-actions">
                                <Link to="/mercat" className="dashboard-main-btn">
                                    Anar al mercat
                                </Link>

                                <Link to="/alineacio" className="dashboard-secondary-btn">
                                    Preparar alineació
                                </Link>
                            </div>
                        </article>

                        <article className="dashboard-card dashboard-league-card">
                            <span className="dashboard-kicker">Lliga activa</span>

                            <h2>{lligaActiva.nom}</h2>

                            <p>
                                Aquesta és la lliga que s’està utilitzant per calcular el teu
                                pressupost, plantilla, mercat i alineació.
                            </p>

                            <div className="dashboard-league-code">
                                <span>Codi</span>
                                <strong>
                                    {lligaActiva.codi ||
                                        lligaActiva.codi_invitacio ||
                                        'Sense codi'}
                                </strong>
                            </div>

                            <Link to="/lligues" className="dashboard-secondary-btn">
                                Canviar lliga
                            </Link>
                        </article>
                    </section>

                    <section className="dashboard-main-grid">
                        <article className="dashboard-card">
                            <span className="dashboard-kicker">Distribució</span>

                            <h2>Plantilla per posicions</h2>

                            <div className="dashboard-position-grid">
                                <div>
                                    <span>Porters</span>
                                    <strong>{porters}</strong>
                                </div>

                                <div>
                                    <span>Defenses</span>
                                    <strong>{defenses}</strong>
                                </div>

                                <div>
                                    <span>Migcampistes</span>
                                    <strong>{migcampistes}</strong>
                                </div>

                                <div>
                                    <span>Davanters</span>
                                    <strong>{davanters}</strong>
                                </div>
                            </div>
                        </article>

                        <article className="dashboard-card">
                            <span className="dashboard-kicker">Accions ràpides</span>

                            <h2>Continua la gestió</h2>

                            <div className="dashboard-quick-actions">
                                <Link to="/equip">Veure plantilla</Link>
                                <Link to="/mercat">Fitxar jugadors</Link>
                                <Link to="/alineacio">Editar alineació</Link>
                                <Link to="/rankings">Consultar rànquings</Link>
                            </div>
                        </article>
                    </section>
                </>
            )}
        </main>
    )
}

const comptarPerPosicio = (jugadors, valors) => {
    return jugadors.filter((jugador) => {
        const posicio = String(jugador.posicio || '').toLowerCase()

        return valors.some((valor) => posicio.includes(valor))
    }).length
}

const formatMoney = (value) => {
    const numberValue = Number(value || 0)

    return new Intl.NumberFormat('ca-ES', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0,
    }).format(numberValue)
}

export default DashboardHome