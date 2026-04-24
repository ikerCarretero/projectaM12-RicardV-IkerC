import { Link } from 'react-router-dom'

function Navbar() {
    return (
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <div className="container">
                <Link className="navbar-brand" to="/">
                    Fantasy Champions
                </Link>

                <button
                    className="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav ms-auto align-items-lg-center">
                        <li className="nav-item">
                            <Link className="nav-link" to="/competicions">Competicions</Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" to="/rankings">Rankings</Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" to="/equip">El meu equip</Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" to="/alineacio">Alineació</Link>
                        </li>
                        <li className="nav-item ms-lg-2">
                            <Link className="btn btn-outline-light btn-sm me-lg-2 mt-2 mt-lg-0" to="/login">
                                Login
                            </Link>
                        </li>
                        <li className="nav-item mt-2 mt-lg-0">
                            <Link className="btn btn-primary btn-sm" to="/register">
                                Register
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    )
}

export default Navbar