import { useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import { crearLligaPrivada } from '../services/lligaPrivadaService'
import './Lligues.css'

function CrearLliga() {
    const navigate = useNavigate()

    const [formData, setFormData] = useState({
        nom: '',
        descripcio: '',
        pressupost_inicial: 100000000,
        max_participants: 10,
    })

    const [loading, setLoading] = useState(false)
    const [error, setError] = useState('')

    const handleChange = (e) => {
        const { name, value } = e.target

        setFormData((prev) => ({
            ...prev,
            [name]: value,
        }))
    }

    const handleSubmit = async (e) => {
        e.preventDefault()
        setError('')

        if (formData.nom.trim().length < 3) {
            setError('El nom de la lliga ha de tenir com a mínim 3 caràcters.')
            return
        }

        setLoading(true)

        try {
            const payload = {
                nom: formData.nom.trim(),
                descripcio: formData.descripcio.trim(),
                pressupost_inicial: Number(formData.pressupost_inicial),
                max_participants: Number(formData.max_participants),
            }

            const data = await crearLligaPrivada(payload)

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
                    <p className="lligues-kicker">Lligues privades</p>
                    <h1>Crear lliga d’amics</h1>
                    <p>
                        Crea una lliga privada per jugar amb el teu grup d’amics.
                        Després podràs compartir el codi d’invitació.
                    </p>
                </div>

                <Link to="/lligues" className="lligues-secondary-btn">
                    Tornar
                </Link>
            </section>

            <section className="lliga-form-card">
                <div className="lliga-form-info">
                    <h2>Configuració inicial</h2>
                    <p>
                        Defineix les dades bàsiques de la lliga.
                    </p>
                </div>

                {error && (
                    <div className="lliga-error">
                        {error}
                    </div>
                )}

                <form className="lliga-form" onSubmit={handleSubmit}>
                    <div className="lliga-field">
                        <label htmlFor="nom">Nom de la lliga</label>
                        <input
                            id="nom"
                            name="nom"
                            type="text"
                            value={formData.nom}
                            onChange={handleChange}
                            placeholder="Ex: Champions amb els amics"
                            required
                        />
                    </div>

                    <div className="lliga-field">
                        <label htmlFor="descripcio">Descripció</label>
                        <textarea
                            id="descripcio"
                            name="descripcio"
                            value={formData.descripcio}
                            onChange={handleChange}
                            placeholder="Ex: Lliga privada per jugar entre nosaltres aquesta temporada."
                            rows="4"
                        />
                    </div>

                    <div className="lliga-form-grid">
                        <div className="lliga-field">
                            <label htmlFor="pressupost_inicial">
                                Pressupost inicial
                            </label>
                            <input
                                id="pressupost_inicial"
                                name="pressupost_inicial"
                                type="number"
                                min="0"
                                step="1000000"
                                value={formData.pressupost_inicial}
                                onChange={handleChange}
                            />
                        </div>

                        <div className="lliga-field">
                            <label htmlFor="max_participants">
                                Màxim participants
                            </label>
                            <input
                                id="max_participants"
                                name="max_participants"
                                type="number"
                                min="2"
                                max="30"
                                value={formData.max_participants}
                                onChange={handleChange}
                            />
                        </div>
                    </div>

                    <button
                        type="submit"
                        className="lligues-main-btn"
                        disabled={loading}
                    >
                        {loading ? 'Creant lliga...' : 'Crear lliga'}
                    </button>
                </form>
            </section>
        </main>
    )
}

export default CrearLliga