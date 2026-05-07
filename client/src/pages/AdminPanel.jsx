import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { api } from '../services/api'
import './AdminPanel.css'

function AdminPanel() {
    const usuariLocal = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const rol = (usuariLocal?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin'

    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [dades, setDades] = useState({
        competicions: [],
        jugadors: [],
        partits: [],
        equipsFantasy: []
    })

    const [estatApi, setEstatApi] = useState({
        competicions: 'pendent',
        jugadors: 'pendent',
        partits: 'pendent',
        equipsFantasy: 'pendent'
    })

    useEffect(() => {
        const carregarPanell = async () => {
            if (!esAdmin) {
                setLoading(false)
                return
            }

            try {
                setLoading(true)
                setError('')

                const [
                    competicionsResult,
                    jugadorsResult,
                    partitsResult,
                    equipsFantasyResult
                ] = await Promise.allSettled([
                    api.getCompeticions(),
                    api.getJugadors(),
                    api.getPartits(),
                    api.getEquipsFantasy()
                ])

                const competicions =
                    competicionsResult.status === 'fulfilled' && Array.isArray(competicionsResult.value)
                        ? competicionsResult.value
                        : []

                const jugadors =
                    jugadorsResult.status === 'fulfilled' && Array.isArray(jugadorsResult.value)
                        ? jugadorsResult.value
                        : []

                const partits =
                    partitsResult.status === 'fulfilled' && Array.isArray(partitsResult.value)
                        ? partitsResult.value
                        : []

                const equipsFantasy =
                    equipsFantasyResult.status === 'fulfilled' && Array.isArray(equipsFantasyResult.value)
                        ? equipsFantasyResult.value
                        : []

                setDades({
                    competicions,
                    jugadors,
                    partits,
                    equipsFantasy
                })

                setEstatApi({
                    competicions: competicionsResult.status === 'fulfilled' ? 'actiu' : 'error',
                    jugadors: jugadorsResult.status === 'fulfilled' ? 'actiu' : 'error',
                    partits: partitsResult.status === 'fulfilled' ? 'actiu' : 'error',
                    equipsFantasy: equipsFantasyResult.status === 'fulfilled' ? 'actiu' : 'error'
                })
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar el panell d’administració.')
            } finally {
                setLoading(false)
            }
        }

        carregarPanell()
    }, [esAdmin])

    const resum = useMemo(() => {
        const totalEquipsReals = dades.competicions.reduce(
            (acc, competicio) => acc + (competicio.equips_reals?.length || 0),
            0
        )

        const totalJornades = dades.competicions.reduce(
            (acc, competicio) => acc + (competicio.jornades?.length || 0),
            0
        )

        return {
            competicions: dades.competicions.length,
            equipsReals: totalEquipsReals,
            jornades: totalJornades,
            jugadors: dades.jugadors.length,
            partits: dades.partits.length,
            equipsFantasy: dades.equipsFantasy.length
        }
    }, [dades])

    if (loading) {
        return <p>Carregant panell d’administració...</p>
    }

    if (!esAdmin) {
        return (
            <div className="admin-page">
                <section className="admin-denied-card">
                    <div className="admin-denied-icon">🔒</div>

                    <h1>Accés restringit</h1>

                    <p>
                        Aquesta zona només està disponible per a usuaris amb rol
                        <strong> admin</strong>.
                    </p>

                    <div className="admin-denied-info">
                        <span>Rol detectat</span>
                        <strong>{rol || 'sense rol'}</strong>
                    </div>

                    <Link to="/dashboard" className="admin-main-button">
                        Tornar al dashboard
                    </Link>
                </section>
            </div>
        )
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    return (
        <div className="admin-page">
            <div className="admin-header">
                <div>
                    <span className="admin-badge">Panell intern</span>
                    <h1 className="admin-title">Administració</h1>
                    <p className="admin-subtitle">
                        Control general del projecte fantasy: competicions, equips, jugadors,
                        partits, lligues i configuració futura del sistema.
                    </p>
                </div>

                <div className="admin-user-card">
                    <div className="admin-user-avatar">
                        {usuariLocal?.nom?.charAt(0)?.toUpperCase() || 'A'}
                    </div>

                    <div>
                        <strong>{usuariLocal?.nom || usuariLocal?.name || 'Admin'}</strong>
                        <span>Rol: {rol}</span>
                    </div>
                </div>
            </div>

            <div className="admin-stats-grid">
                <AdminStatCard title="Competicions" value={resum.competicions} />
                <AdminStatCard title="Equips reals" value={resum.equipsReals} />
                <AdminStatCard title="Jugadors" value={resum.jugadors} />
                <AdminStatCard title="Partits" value={resum.partits} />
                <AdminStatCard title="Jornades" value={resum.jornades} />
                <AdminStatCard title="Equips fantasy" value={resum.equipsFantasy} />
            </div>

            <section className="admin-section">
                <div className="admin-section-header">
                    <div>
                        <h2>Mòduls d’administració</h2>
                        <p>
                            Estructura preparada per gestionar totes les parts importants del projecte.
                        </p>
                    </div>
                </div>

                <div className="admin-modules-grid">
                    <AdminModuleCard
                        icon="👤"
                        title="Usuaris"
                        text="Gestió d’usuaris, rols i permisos."
                        status="Pendent backend"
                    />

                    <AdminModuleCard
                        icon="🏆"
                        title="Competicions"
                        text="Gestió de lligues, temporades, logos i banderes."
                        status="Preparat"
                        link="/competicions"
                    />

                    <AdminModuleCard
                        icon="🛡️"
                        title="Equips reals"
                        text="Gestió d’equips, països, escuts i competicions associades."
                        status="Preparat"
                    />

                    <AdminModuleCard
                        icon="⚽"
                        title="Jugadors"
                        text="Gestió de plantilles, posicions, punts i valor de mercat."
                        status="Preparat"
                    />

                    <AdminModuleCard
                        icon="📅"
                        title="Jornades"
                        text="Gestió del calendari de cada competició."
                        status="Pendent dades"
                    />

                    <AdminModuleCard
                        icon="🏟️"
                        title="Partits"
                        text="Gestió de partits, resultats i estadístiques."
                        status="Preparat"
                    />

                    <AdminModuleCard
                        icon="👥"
                        title="Lligues fantasy"
                        text="Gestió de lligues privades i participants."
                        status="Pendent backend"
                        link="/rankings"
                    />

                    <AdminModuleCard
                        icon="📋"
                        title="Alineacions"
                        text="Control d’esquemes, titulars, reserves i capità."
                        status="Visual preparat"
                        link="/alineacio"
                    />
                </div>
            </section>

            <section className="admin-layout-grid">
                <div className="admin-section">
                    <div className="admin-section-header">
                        <div>
                            <h2>Estat de connexió API</h2>
                            <p>
                                Validació ràpida dels principals endpoints que consumeix el frontend.
                            </p>
                        </div>
                    </div>

                    <div className="admin-api-list">
                        <AdminApiItem title="Competicions" status={estatApi.competicions} />
                        <AdminApiItem title="Jugadors" status={estatApi.jugadors} />
                        <AdminApiItem title="Partits" status={estatApi.partits} />
                        <AdminApiItem title="Equips fantasy" status={estatApi.equipsFantasy} />
                    </div>
                </div>

                <div className="admin-section">
                    <div className="admin-section-header">
                        <div>
                            <h2>Accions ràpides</h2>
                            <p>
                                Accessos útils per provar les zones principals del projecte.
                            </p>
                        </div>
                    </div>

                    <div className="admin-actions">
                        <Link to="/dashboard" className="admin-action-button">
                            Dashboard
                        </Link>

                        <Link to="/competicions" className="admin-action-button">
                            Competicions
                        </Link>

                        <Link to="/equip" className="admin-action-button">
                            El meu equip
                        </Link>

                        <Link to="/alineacio" className="admin-action-button">
                            Alineació
                        </Link>
                    </div>
                </div>
            </section>

            <section className="admin-section">
                <div className="admin-section-header">
                    <div>
                        <h2>Notes del panell</h2>
                        <p>
                            Aquesta pantalla ja està preparada visualment. Més endavant es poden
                            activar formularis reals de creació, edició i eliminació.
                        </p>
                    </div>
                </div>

                <div className="admin-notes-grid">
                    <div className="admin-note-box">
                        <strong>CRUD pendent</strong>
                        <span>
                            Quan el backend estigui complet, aquí es podran afegir botons de crear,
                            editar i eliminar.
                        </span>
                    </div>

                    <div className="admin-note-box">
                        <strong>Imatges preparades</strong>
                        <span>
                            El sistema ja pot reservar espais per logos de lligues, banderes i escuts.
                        </span>
                    </div>

                    <div className="admin-note-box">
                        <strong>Rol admin</strong>
                        <span>
                            Aquesta pàgina només es mostra correctament si l’usuari té rol
                            <strong> admin</strong>.
                        </span>
                    </div>
                </div>
            </section>
        </div>
    )
}

function AdminStatCard({ title, value }) {
    return (
        <div className="admin-stat-card">
            <span>{title}</span>
            <strong>{value}</strong>
        </div>
    )
}

function AdminModuleCard({ icon, title, text, status, link }) {
    const content = (
        <div className="admin-module-card">
            <div className="admin-module-icon">{icon}</div>

            <div>
                <h3>{title}</h3>
                <p>{text}</p>
                <span className="admin-module-status">{status}</span>
            </div>
        </div>
    )

    if (link) {
        return (
            <Link to={link} className="admin-module-link">
                {content}
            </Link>
        )
    }

    return content
}

function AdminApiItem({ title, status }) {
    const classe = status === 'actiu' ? 'status-ok' : status === 'error' ? 'status-error' : 'status-pending'
    const text = status === 'actiu' ? 'Actiu' : status === 'error' ? 'Error' : 'Pendent'

    return (
        <div className="admin-api-item">
            <span>{title}</span>
            <strong className={`admin-api-status ${classe}`}>{text}</strong>
        </div>
    )
}

export default AdminPanel