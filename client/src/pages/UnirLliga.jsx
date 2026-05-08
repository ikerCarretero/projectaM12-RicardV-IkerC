import { useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import { unirLligaPrivada } from '../services/lligaPrivadaService'
import './Lligues.css'

function UnirLliga() {
    const navigate = useNavigate()

    const [codi, setCodi] = useState('')
    const [loading, setLoading] = useState(false)
    const [error, setError] = useState('')

    const handleChange = (e) => {
        setCodi(e.target.value.toUpperCase())
    }

    const handleSubmit = async (e) => {
        e.preventDefault()
        setError('')

        const codiNet = codi.trim()

        if (codiNet.length < 4) {
            setError('Introdueix un codi de lliga vàlid.')
            return
        }

        setLoading(true)

        try {
            const data = await unirLligaPrivada(codiNet)

            const lliga =
                data?.lliga ||
                data?.lliga_privada ||
                data?.data ||
                data

            const lligaId = lliga?.id

            if (lligaId) {
                navigate(`/lligues/${lligaId}`)
            } else {
                navigate('/lligues')
            }
        } catch (error) {
            setError(error.message)
        } finally {
            setLoading(false)
        }
    }

    return (
        <main className="lligues-page">
            <section className="lligues-header">
                <div>
                    <p className="lligues-kicker">Codi d’invitació</p>
                    <h1>Unir-me a una lliga</h1>
                    <p>
                        Introdueix el codi que t’ha passat un amic per entrar
                        a la seva lliga privada.
                    </p>
                </div>

                <Link to="/lligues" className="lligues-secondary-btn">
                    Tornar
                </Link>
            </section>

            <section className="lliga-form-card unir-card">
                <div className="lliga-form-info">
                    <h2>Entrar amb codi</h2>
                    <p>
                        Introdueix el codi per accedir a la lliga privada.
                    </p>
                </div>

                {error && (
                    <div className="lliga-error">
                        {error}
                    </div>
                )}

                <form className="lliga-form" onSubmit={handleSubmit}>
                    <div className="lliga-field">
                        <label htmlFor="codi">Codi de la lliga</label>
                        <input
                            id="codi"
                            name="codi"
                            type="text"
                            value={codi}
                            onChange={handleChange}
                            placeholder="Ex: FC-8XK2Q"
                            required
                        />
                    </div>

                    <button
                        type="submit"
                        className="lligues-main-btn"
                        disabled={loading}
                    >
                        {loading ? 'Entrant...' : 'Unir-me a la lliga'}
                    </button>
                </form>
            </section>
        </main>
    )
}

export default UnirLliga