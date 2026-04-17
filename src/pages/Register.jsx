import { useState } from 'react'
import { useNavigate, Link } from 'react-router-dom'
import './Auth.css'

function Register() {
    const navigate = useNavigate()

    const [formData, setFormData] = useState({
        nom: '',
        email: '',
        password: '',
        confirmPassword: ''
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

    const handleSubmit = (e) => {
        e.preventDefault()
        setError('')

        if (!formData.nom || !formData.email || !formData.password || !formData.confirmPassword) {
            setError('Has d’omplir tots els camps.')
            return
        }

        if (formData.password !== formData.confirmPassword) {
            setError('Les contrasenyes no coincideixen.')
            return
        }

        setLoading(true)

        setTimeout(() => {
            localStorage.setItem(
                'ffe_user',
                JSON.stringify({
                    nom: formData.nom,
                    email: formData.email
                })
            )

            localStorage.removeItem('ffe_guest')
            setLoading(false)
            navigate('/dashboard')
        }, 800)
    }

    return (
        <div className="auth-page">
            <div className="auth-wrapper">
                <div className="auth-box shadow-sm">
                    <h1 className="auth-title">Crear compte</h1>

                    <form onSubmit={handleSubmit}>
                        <div className="auth-inputs">
                            <input
                                type="text"
                                name="nom"
                                className="auth-input"
                                placeholder="Nom"
                                value={formData.nom}
                                onChange={handleChange}
                            />

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

                            <input
                                type="password"
                                name="confirmPassword"
                                className="auth-input"
                                placeholder="Confirm Password"
                                value={formData.confirmPassword}
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
                            {loading ? 'Registrant...' : 'Registrar-me'}
                        </button>
                    </form>

                    <p className="auth-bottom-text mt-4 mb-0">
                        Ja tens compte? <Link to="/login" className="auth-link">Inicia sessió</Link>
                    </p>
                </div>
            </div>
        </div>
    )
}

export default Register