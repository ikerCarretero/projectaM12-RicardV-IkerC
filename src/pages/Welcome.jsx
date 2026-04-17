import { useNavigate } from 'react-router-dom'
import './Welcome.css'

function Welcome() {
    const navigate = useNavigate()

    const entrarComGuest = () => {
        localStorage.setItem('ffe_guest', 'true')
        localStorage.removeItem('ffe_user')
        navigate('/dashboard')
    }

    return (
        <div className="welcome-page">
            <div className="welcome-wrapper">
                <div className="welcome-box shadow-sm">
                    <h1 className="welcome-title">Fantasy Champions</h1>

                    <form
                        onSubmit={(e) => {
                            e.preventDefault()
                            navigate('/login')
                        }}
                    >
                        <div className="welcome-inputs">
                            <input
                                type="email"
                                className="welcome-input"
                                placeholder="Email"
                            />
                            <input
                                type="password"
                                className="welcome-input"
                                placeholder="Password"
                            />
                        </div>

                        <button type="submit" className="btn btn-dark w-100 mt-3">
                            Entrar
                        </button>
                    </form>

                    <div className="welcome-divider">
                        <span>Or</span>
                    </div>

                    <div className="social-buttons">
                        <button
                            type="button"
                            className="btn btn-outline-dark w-100"
                            onClick={() => navigate('/login')}
                        >
                            Google
                        </button>

                        <button
                            type="button"
                            className="btn btn-outline-dark w-100"
                            onClick={() => navigate('/login')}
                        >
                            Apple
                        </button>

                        <button
                            type="button"
                            className="btn btn-outline-dark w-100"
                            onClick={() => navigate('/login')}
                        >
                            Mail
                        </button>

                        <button
                            type="button"
                            className="btn btn-success w-100"
                            onClick={entrarComGuest}
                        >
                            Entrar com a guest
                        </button>
                    </div>

                    <p className="welcome-bottom-text mt-4 mb-0">
                        No tens compte?{' '}
                        <span className="welcome-link" onClick={() => navigate('/register')}>
                            Registra’t
                        </span>
                    </p>
                </div>
            </div>
        </div>
    )
}

export default Welcome