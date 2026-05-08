import { useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import './Login.css'

import googleIcon from '../assets/icons/google.svg'
import appleIcon from '../assets/icons/apple.svg'

function Login() {
    const navigate = useNavigate()

    const [email, setEmail] = useState('admin@fantasy.com')
    const [password, setPassword] = useState('123456')
    const [loading, setLoading] = useState(false)
    const [error, setError] = useState('')

    const apiUrl = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

    const handleSubmit = async (e) => {
        e.preventDefault()
        setError('')
        setLoading(true)

        try {
            const response = await fetch(`${apiUrl}/login`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Accept: 'application/json',
                },
                body: JSON.stringify({
                    email,
                    password,
                }),
            })

            const data = await response.json()

            if (!response.ok) {
                throw new Error(data.message || 'No s’ha pogut iniciar sessió')
            }

            const token = data.token || data.access_token
            const user = data.user || data.usuari

            localStorage.setItem('ffe_token', token)
            localStorage.setItem('ffe_user', JSON.stringify(user))
            localStorage.removeItem('ffe_guest')

            navigate('/dashboard')
        } catch (error) {
            setError(error.message)
        } finally {
            setLoading(false)
        }
    }

    const handleGuestAccess = () => {
        localStorage.removeItem('ffe_token')
        localStorage.removeItem('ffe_user')
        localStorage.setItem('ffe_guest', 'true')

        navigate('/dashboard')
    }

    return (
        <main className="login-page">
            <section className="login-card">

                <h1>Iniciar sessió</h1>

                <p className="login-subtitle">
                    Accedeix al teu compte per gestionar el teu equip fantasy,
                    les teves lligues i la teva alineació.
                </p>

                {error && (
                    <div className="login-error">
                        {error}
                    </div>
                )}

                <form className="login-form" onSubmit={handleSubmit}>
                    <div className="login-field">
                        <label htmlFor="email">Correu electrònic</label>
                        <input
                            id="email"
                            type="email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            autoComplete="email"
                            required
                        />
                    </div>

                    <div className="login-field">
                        <label htmlFor="password">Contrasenya</label>
                        <input
                            id="password"
                            type="password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            autoComplete="current-password"
                            required
                        />
                    </div>

                    <button
                        type="submit"
                        className="login-main-btn"
                        disabled={loading}
                    >
                        {loading ? 'Entrant...' : 'Entrar'}
                    </button>
                </form>

                <div className="login-divider">
                    <span>o</span>
                </div>

                <div className="login-social-buttons">
                    <button
                        type="button"
                        className="login-social-btn"
                        onClick={() => alert('Login amb Google pendent d’implementar')}
                    >
                        <img
                            src={googleIcon}
                            alt="Google"
                            className="login-social-icon"
                        />
                        <span>Continua amb Google</span>
                    </button>

                    <button
                        type="button"
                        className="login-social-btn"
                        onClick={() => alert('Login amb Apple pendent d’implementar')}
                    >
                        <img
                            src={appleIcon}
                            alt="Apple"
                            className="login-social-icon"
                        />
                        <span>Continua amb Apple</span>
                    </button>

                    <button
                        type="button"
                        className="login-social-btn"
                        onClick={handleGuestAccess}
                    >
                        <span className="login-mail-icon">✉</span>
                        <span>Entrar com a convidat</span>
                    </button>
                </div>

                <p className="login-register-text">
                    No tens compte?{' '}
                    <Link to="/register">
                        Registra’t
                    </Link>
                </p>
            </section>
        </main>
    )
}

export default Login