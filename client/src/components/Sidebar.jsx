import { useState } from 'react'
import { NavLink, useLocation, useNavigate } from 'react-router-dom'
import './Sidebar.css'

function Sidebar() {
    const navigate = useNavigate()
    const location = useLocation()

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'
    const rol = (usuari?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin'

    const equipRoutes = ['/equip', '/mercat', '/alineacio']
    const equipActiu = equipRoutes.some((ruta) =>
        location.pathname.startsWith(ruta)
    )

    const [equipObert, setEquipObert] = useState(equipActiu)

    const handleLogout = () => {
        localStorage.removeItem('ffe_user')
        localStorage.removeItem('ffe_guest')
        localStorage.removeItem('ffe_token')
        localStorage.removeItem('ffe_lliga_activa')
        navigate('/')
    }

    const getLinkClass = ({ isActive }) =>
        isActive ? 'sidebar-link active' : 'sidebar-link'

    return (
        <aside className="sidebar">
            <div className="sidebar-top">
                <div className="sidebar-user-card">
                    <div className="sidebar-user-header">
                        <div className="sidebar-avatar">
                            {(usuari?.nom || 'G').charAt(0).toUpperCase()}
                        </div>

                        {!esGuest && (
                            <button
                                type="button"
                                className="sidebar-settings-btn"
                                onClick={() => navigate('/configuracio')}
                                title="Configuració"
                            >
                                ⚙️
                            </button>
                        )}
                    </div>

                    <div className="sidebar-user-info">
                        <strong>
                            {usuari?.nom || (esGuest ? 'Guest' : 'Usuari')}
                        </strong>

                        <span>
                            {usuari
                                ? rol === 'admin'
                                    ? 'Administrador'
                                    : 'Usuari registrat'
                                : esGuest
                                    ? 'Mode convidat'
                                    : 'Visitant'}
                        </span>
                    </div>
                </div>

                <nav className="sidebar-nav">
                    <NavLink to="/dashboard" className={getLinkClass}>
                        Home
                    </NavLink>

                    {!esGuest && (
                        <NavLink to="/lligues" className={getLinkClass}>
                            Lligues
                        </NavLink>
                    )}

                    {!esGuest && (
                        <div className="sidebar-group">
                            <button
                                type="button"
                                className={
                                    equipActiu
                                        ? 'sidebar-link sidebar-dropdown-btn active'
                                        : 'sidebar-link sidebar-dropdown-btn'
                                }
                                onClick={() => setEquipObert(!equipObert)}
                            >
                                <span>Equip</span>
                                <span className="sidebar-dropdown-arrow">
                                    {equipObert ? '▾' : '▸'}
                                </span>
                            </button>

                            {equipObert && (
                                <div className="sidebar-submenu">
                                    <NavLink
                                        to="/equip"
                                        className={({ isActive }) =>
                                            isActive
                                                ? 'sidebar-sublink active'
                                                : 'sidebar-sublink'
                                        }
                                    >
                                        Plantilla
                                    </NavLink>

                                    <NavLink
                                        to="/mercat"
                                        className={({ isActive }) =>
                                            isActive
                                                ? 'sidebar-sublink active'
                                                : 'sidebar-sublink'
                                        }
                                    >
                                        Mercat
                                    </NavLink>

                                    <NavLink
                                        to="/alineacio"
                                        className={({ isActive }) =>
                                            isActive
                                                ? 'sidebar-sublink active'
                                                : 'sidebar-sublink'
                                        }
                                    >
                                        Alineació
                                    </NavLink>
                                </div>
                            )}
                        </div>
                    )}

                    <NavLink to="/rankings" className={getLinkClass}>
                        Rankings
                    </NavLink>

                    {esAdmin && !esGuest && (
                        <NavLink to="/puntuacions" className={getLinkClass}>
                            Puntuacions
                        </NavLink>
                    )}

                    <div className="sidebar-nav-separator"></div>

                    <NavLink to="/competicions" className={getLinkClass}>
                        Competicions
                    </NavLink>
                </nav>
            </div>

            <button
                type="button"
                className="sidebar-logout-btn"
                onClick={handleLogout}
            >
                Sortir
            </button>
        </aside>
    )
}

export default Sidebar