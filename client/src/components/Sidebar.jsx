import { NavLink, useNavigate } from 'react-router-dom'
import './Sidebar.css'

function Sidebar() {
    const navigate = useNavigate()

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'

    const handleLogout = () => {
        localStorage.removeItem('ffe_user')
        localStorage.removeItem('ffe_guest')
        navigate('/')
    }

    return (
        <aside className="sidebar">
            <div>
                <div className="sidebar-user">
                    <div className="sidebar-avatar">
                        {usuari?.nom?.charAt(0) || 'G'}
                    </div>
                    <div>
                        <div className="sidebar-user-name">
                            {usuari?.nom || (esGuest ? 'Guest' : 'Usuari')}
                        </div>
                        <div className="sidebar-user-role">
                            {usuari ? 'Usuari registrat' : esGuest ? 'Mode convidat' : 'Visitant'}
                        </div>
                    </div>
                </div>

                <nav className="sidebar-nav">
                    <NavLink to="/dashboard" className="sidebar-link">
                        Home
                    </NavLink>

                    <NavLink to="/competicions" className="sidebar-link">
                        Competicions
                    </NavLink>

                    <NavLink to="/jugadors" className="sidebar-link">
                        Jugadors
                    </NavLink>

                    <NavLink to="/partits" className="sidebar-link">
                        Partits
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

                            <NavLink to="/configuracio" className="sidebar-link">
                                Configuració
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