import { NavLink, Link, useNavigate } from 'react-router-dom'
import './Sidebar.css'

function Sidebar() {
    const navigate = useNavigate()

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'
    const avatarGuardat = localStorage.getItem('ffe_user_avatar')

    const rolNormalitzat = (usuari?.rol || 'usuari').toLowerCase()
    const esAdmin = rolNormalitzat === 'admin'

    const handleLogout = () => {
        localStorage.removeItem('ffe_user')
        localStorage.removeItem('ffe_guest')
        localStorage.removeItem('ffe_token')
        navigate('/')
    }

    return (
        <aside className="sidebar">
            <div>
                <div className="sidebar-user sidebar-user-card">
                    <div className="sidebar-user-main">
                        <div className="sidebar-avatar">
                            {avatarGuardat ? (
                                <img
                                    src={avatarGuardat}
                                    alt="Avatar usuari"
                                    className="sidebar-avatar-image"
                                />
                            ) : (
                                usuari?.nom?.charAt(0) || 'G'
                            )}
                        </div>

                        <div>
                            <div className="sidebar-user-name">
                                {usuari?.nom || (esGuest ? 'Guest' : 'Usuari')}
                            </div>

                            <div className="sidebar-user-role">
                                {usuari
                                    ? esAdmin
                                        ? 'Administrador'
                                        : 'Usuari registrat'
                                    : esGuest
                                        ? 'Mode convidat'
                                        : 'Visitant'}
                            </div>
                        </div>
                    </div>

                    {!esGuest && (
                        <Link
                            to="/configuracio"
                            className="sidebar-settings-link"
                            title="Configuració del compte"
                        >
                            ⚙️
                        </Link>
                    )}
                </div>

                <nav className="sidebar-nav">
                    <NavLink to="/dashboard" className="sidebar-link">
                        Home
                    </NavLink>

                    <NavLink to="/competicions" className="sidebar-link">
                        Competicions
                    </NavLink>

                    <NavLink to="/rankings" className="sidebar-link">
                        Rankings
                    </NavLink>

                    {!esGuest && (
                        <>
                            <NavLink to="/equip" className="sidebar-link">
                                Equip
                            </NavLink>

                            <NavLink to="/alineacio" className="sidebar-link">
                                Alineació
                            </NavLink>
                        </>
                    )}
                </nav>
            </div>

            <button className="btn btn-danger w-100 mt-4" onClick={handleLogout}>
                Sortir
            </button>
        </aside>
    )
}

export default Sidebar