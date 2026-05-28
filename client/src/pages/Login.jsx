import { useState } from 'react'
import { useNavigate, Link } from 'react-router-dom'
import { api } from '../services/api'
import './Login.css'

function Login() {
    const navigate = useNavigate()

    const [email, setEmail] = useState('')
    const [password, setPassword] = useState('')
    const [error, setError] = useState('')
    const [loading, setLoading] = useState(false)

    const handleSubmit = async (e) => {
        e.preventDefault()
        setError('')

        if (!email || !password) {
            setError('Has d’introduir el correu electrònic i la contrasenya.')
            return
        }

        setLoading(true)

        try {
            const result = await api.login(email, password)

            const token = result?.token || result?.access_token
            const user = result?.user || null

            if (!token) {
                throw new Error('No s’ha rebut cap token d’autenticació.')
            }

            localStorage.setItem('ffe_token', token)

            if (user) {
                localStorage.setItem('ffe_user', JSON.stringify(user))
            }

            localStorage.removeItem('ffe_guest')

            navigate('/dashboard')
        } catch (err) {
            setError(err.message || 'No s’ha pogut iniciar sessió.')
        } finally {
            setLoading(false)
        }
    }

    const handleGoogleLogin = () => {
        const apiUrl = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'
        window.location.href = `${apiUrl}/auth/google/redirect`
    }

    const handleAppleLogin = () => {
        setError('El login amb Apple encara no està disponible.')
    }

    const handleGuestLogin = () => {
        localStorage.removeItem('ffe_token')
        localStorage.removeItem('ffe_user')
        localStorage.setItem('ffe_guest', 'true')

        navigate('/competicions')
    }

    return (
        <div className="login-page">
            <div className="login-card">
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

                <form onSubmit={handleSubmit} autoComplete="off">
                    <div className="login-field">
                        <label htmlFor="login-email">Correu electrònic</label>
                        <input
                            id="login-email"
                            type="email"
                            name="login-email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            autoComplete="off"
                        />
                    </div>

                    <div className="login-field">
                        <label htmlFor="login-password">Contrasenya</label>
                        <input
                            id="login-password"
                            type="password"
                            name="login-password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            autoComplete="new-password"
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

                <div className="login-socials">
                    <button
                        type="button"
                        className="login-social-btn"
                        onClick={handleGoogleLogin}
                    >
                        <span className="login-social-icon">
                            <GoogleIcon />
                        </span>
                        <span className="login-social-text">Continua amb Google</span>
                    </button>

                    <button
                        type="button"
                        className="login-social-btn"
                        onClick={handleAppleLogin}
                    >
                        <span className="login-social-icon">
                            <AppleIcon />
                        </span>
                        <span className="login-social-text">Continua amb Apple</span>
                    </button>

                    <button
                        type="button"
                        className="login-social-btn"
                        onClick={handleGuestLogin}
                    >
                        <span className="login-social-icon">
                            <MailIcon />
                        </span>
                        <span className="login-social-text">Entrar com a convidat</span>
                    </button>
                </div>

                <p className="login-register-text">
                    No tens compte?{' '}
                    <Link to="/register">
                        Registra’t
                    </Link>
                </p>
            </div>
        </div>
    )
}

function GoogleIcon() {
    return (
        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
            <path
                fill="#4285F4"
                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
            />
            <path
                fill="#34A853"
                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
            />
            <path
                fill="#FBBC05"
                d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l3.66-2.84z"
            />
            <path
                fill="#EA4335"
                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06L5.84 9.9C6.71 7.3 9.14 5.38 12 5.38z"
            />
        </svg>
    )
}

function AppleIcon() {
    return (
        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
            <path
                fill="currentColor"
                d="M16.37 1.43c0 1.11-.44 2.14-1.16 2.93-.76.83-2.01 1.47-3.05 1.38-.13-1.06.38-2.18 1.09-2.96.78-.86 2.13-1.51 3.12-1.35zM20.5 17.36c-.55 1.27-.82 1.84-1.52 2.96-.99 1.52-2.38 3.42-4.1 3.44-1.54.02-1.94-1-4.03-.99-2.09.01-2.53 1.01-4.07.99-1.72-.02-3.04-1.73-4.03-3.25-2.76-4.24-3.05-9.22-1.35-11.86 1.21-1.88 3.12-2.98 4.91-2.98 1.82 0 2.96 1 4.46 1 1.45 0 2.34-1 4.44-1 1.59 0 3.28.87 4.48 2.37-3.94 2.16-3.3 7.79.81 9.32z"
            />
        </svg>
    )
}

function MailIcon() {
    return (
        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
            <path
                fill="none"
                stroke="currentColor"
                strokeWidth="2"
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"
            />
            <path
                fill="none"
                stroke="currentColor"
                strokeWidth="2"
                strokeLinecap="round"
                strokeLinejoin="round"
                d="m22 8-10 6L2 8"
            />
        </svg>
    )
}

export default Login