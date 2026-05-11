import { NavLink, useNavigate } from 'react-router-dom'
import './Sidebar.css'

function Sidebar() {
    const navigate = useNavigate()

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'
    const rol = (usuari?.rol || '').toLowerCase()
    const esAdmin = rol === 'admin'

    const handleLogout = () => {
        localStorage.removeItem('ffe_user')
        localStorage.removeItem('ffe_guest')
        localStorage.removeItem('ffe_token')
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

                    <NavLink to="/competicions" className={getLinkClass}>
                        Competicions
                    </NavLink>

                    <NavLink to="/rankings" className={getLinkClass}>
                        Rankings
                    </NavLink>

                    {!esGuest && (
                        <>
                            <NavLink to="/equip" className={getLinkClass}>
                                Equip
                            </NavLink>

                            <NavLink to="/alineacio" className={getLinkClass}>
                                Alineació
                            </NavLink>

                            {esAdmin && (
                                <NavLink
                                    to="/admin/puntuacions"
                                    className={getLinkClass}
                                >
                                    Puntuacions
                                </NavLink>
                            )}
                        </>
                    )}
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