import { NavLink, useNavigate } from 'react-router-dom'
import './Sidebar.css'

function Sidebar() {
    const navigate = useNavigate()

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'
    const rol = (usuari?.rol || '').toLowerCase()

    const esAdmin = rol === 'admin'
    const mostrarZonaPrivada = !esGuest
    const mostrarZonaAdmin = mostrarZonaPrivada && esAdmin

    const handleLogout = () => {
        localStorage.removeItem('ffe_user')
        localStorage.removeItem('ffe_guest')
        localStorage.removeItem('ffe_token')
        navigate('/')
    }

    const getLinkClass = ({ isActive }) =>
        isActive ? 'sidebar-link active' : 'sidebar-link'

    const nomUsuari = usuari?.nom || (esGuest ? 'Guest' : 'Usuari')
    const inicialUsuari = nomUsuari.charAt(0).toUpperCase()

    const textRol = usuari
        ? esAdmin
            ? 'Administrador'
            : 'Usuari registrat'
        : esGuest
            ? 'Mode convidat'
            : 'Visitant'

    return (
        <aside className="sidebar">
            <div className="sidebar-top">
                <div className="sidebar-user-card">
                    <div className="sidebar-user-header">
                        <div className="sidebar-avatar">
                            {inicialUsuari}
                        </div>

                        {mostrarZonaPrivada && (
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
                        <strong>{nomUsuari}</strong>
                        <span>{textRol}</span>
                    </div>
                </div>

                <nav className="sidebar-nav">
                    <NavLink to="/dashboard" className={getLinkClass}>
                        Home
                    </NavLink>

                    {mostrarZonaPrivada && (
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

                    {mostrarZonaPrivada && (
                        <>
                            <NavLink to="/equip" className={getLinkClass}>
                                Equip
                            </NavLink>

                            <NavLink to="/mercat" className={getLinkClass}>
                                Mercat
                            </NavLink>

                            <NavLink to="/alineacio" className={getLinkClass}>
                                Alineació
                            </NavLink>
                        </>
                    )}

                    {mostrarZonaAdmin && (
                        <NavLink to="/admin/puntuacions" className={getLinkClass}>
                            Puntuacions
                        </NavLink>
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