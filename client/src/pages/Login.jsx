import { useState } from 'react'
import { useNavigate, Link } from 'react-router-dom'
import { api } from '../services/api'
import './Auth.css'

function Login() {
    const navigate = useNavigate()

    const [formData, setFormData] = useState({
        email: '',
        password: ''
    })

    const [error, setError] = useState('')
    const [loading, setLoading] = useState(false)

    const handleChange = (e) => {
        const { name, value } = e.target
        setFormData((prev) => ({
            ...prev,
            [name]: value
        }))
    }

    const handleSubmit = async (e) => {
        e.preventDefault()
        setError('')

        if (!formData.email || !formData.password) {
            setError('Has d’omplir tots els camps.')
            return
        }

        setLoading(true)

        try {
            const result = await api.login(formData.email, formData.password)

            const token = result?.token || result?.access_token
            const user = result?.user || null

            if (!token) {
                throw new Error('El servidor no ha retornat cap token.')
            }

            localStorage.setItem('ffe_token', token)

            if (user) {
                localStorage.setItem('ffe_user', JSON.stringify(user))
            }

            localStorage.removeItem('ffe_guest')
            navigate('/dashboard')
        } catch (err) {
            setError(err.message || 'Error en iniciar sessió.')
        } finally {
            setLoading(false)
        }
    }

    return (
        <div className="auth-page">
            <div className="auth-wrapper">
                <div className="auth-box shadow-sm">
                    <h1 className="auth-title">Iniciar sessió</h1>

                    <form onSubmit={handleSubmit}>
                        <div className="auth-inputs">
                            <input
                                type="email"
                                name="email"
                                className="auth-input"
                                placeholder="Email"
                                value={formData.email}
                                onChange={handleChange}
                            />

                            <input
                                type="password"
                                name="password"
                                className="auth-input"
                                placeholder="Password"
                                value={formData.password}
                                onChange={handleChange}
                            />
                        </div>

                        {error && (
                            <div className="alert alert-danger mt-3 mb-0">
                                {error}
                            </div>
                        )}

                        <button
                            type="submit"
                            className="btn btn-dark w-100 mt-3"
                            disabled={loading}
                        >
                            {loading ? 'Entrant...' : 'Entrar'}
                        </button>
                    </form>

                    <div className="auth-divider">
                        <span>Or</span>
                    </div>

                    <div className="auth-social-buttons">
                        <button className="btn btn-outline-dark w-100" type="button" onClick={() => navigate('/login')}>
                            Google
                        </button>

                        <button className="btn btn-outline-dark w-100" type="button" onClick={() => navigate('/login')}>
                            Apple
                        </button>

                        <button className="btn btn-outline-dark w-100" type="button" onClick={() => navigate('/login')}>
                            Mail
                        </button>
                    </div>

                    <p className="auth-bottom-text mt-4 mb-0">
                        No tens compte? <Link to="/register" className="auth-link">Registra’t</Link>
                    </p>
                </div>
            </div>
        </div>
    )
}

export default Login