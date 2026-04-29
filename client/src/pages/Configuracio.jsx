import { useEffect, useState } from 'react'
import { api } from '../services/api'

function Configuracio() {
    const [usuari, setUsuari] = useState(null)
    const [loading, setLoading] = useState(true)
    const [missatge, setMissatge] = useState('')
    const [error, setError] = useState('')

    const [perfil, setPerfil] = useState({
        nom: '',
        email: ''
    })

    const [passwords, setPasswords] = useState({
        password: '',
        password_confirmation: ''
    })

    const [avatarPreview, setAvatarPreview] = useState(
        localStorage.getItem('ffe_user_avatar') || ''
    )

    useEffect(() => {
        const carregarUsuari = async () => {
            try {
                setLoading(true)
                setError('')

                const data = await api.getMe()

                setUsuari(data)
                setPerfil({
                    nom: data?.nom || data?.name || '',
                    email: data?.email || ''
                })
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar la configuració.')
            } finally {
                setLoading(false)
            }
        }

        carregarUsuari()
    }, [])

    const rolNormalitzat = (usuari?.rol || 'usuari').toLowerCase()
    const esAdmin = rolNormalitzat === 'admin'

    const guardarPerfil = async (e) => {
        e.preventDefault()

        try {
            setMissatge('')
            setError('')

            const actualitzat = await api.updateUsuari(usuari.id, {
                nom: perfil.nom,
                email: perfil.email
            })

            const usuariActualitzat = {
                ...usuari,
                ...actualitzat,
                rol: (actualitzat?.rol || usuari?.rol || 'usuari').toLowerCase()
            }

            setUsuari(usuariActualitzat)
            localStorage.setItem('ffe_user', JSON.stringify(usuariActualitzat))
            setMissatge('Perfil actualitzat correctament.')
        } catch (err) {
            console.error(err)
            setError(err.message || 'No s’ha pogut actualitzar el perfil.')
        }
    }

    const canviarContrasenya = async (e) => {
        e.preventDefault()

        if (!passwords.password || !passwords.password_confirmation) {
            setError('Omple els dos camps de contrasenya.')
            setMissatge('')
            return
        }

        if (passwords.password !== passwords.password_confirmation) {
            setError('Les contrasenyes no coincideixen.')
            setMissatge('')
            return
        }

        try {
            setMissatge('')
            setError('')

            await api.updateUsuari(usuari.id, {
                password: passwords.password
            })

            setPasswords({
                password: '',
                password_confirmation: ''
            })

            setMissatge('Contrasenya actualitzada correctament.')
        } catch (err) {
            console.error(err)
            setError(err.message || 'No s’ha pogut canviar la contrasenya.')
        }
    }

    const canviarAvatar = (e) => {
        const file = e.target.files?.[0]
        if (!file) return

        const reader = new FileReader()

        reader.onload = () => {
            const resultat = reader.result
            setAvatarPreview(resultat)
            localStorage.setItem('ffe_user_avatar', resultat)
            setMissatge('Foto de perfil actualitzada al navegador.')
            setError('')
        }

        reader.readAsDataURL(file)
    }

    if (loading) {
        return <p>Carregant configuració...</p>
    }

    if (error && !usuari) {
        return <div className="alert alert-danger">{error}</div>
    }

    return (
        <div>
            <h1 className="fw-bold mb-4">Configuració</h1>

            {missatge && <div className="alert alert-success">{missatge}</div>}
            {error && <div className="alert alert-danger">{error}</div>}

            <div className="row">
                <div className="col-lg-4 mb-4">
                    <div className="card shadow-sm h-100">
                        <div className="card-body text-center">
                            <div
                                className="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle"
                                style={{
                                    width: '110px',
                                    height: '110px',
                                    background: 'linear-gradient(135deg, #6f59fd, #33efff)',
                                    color: '#fff',
                                    fontSize: '38px',
                                    fontWeight: '700',
                                    overflow: 'hidden'
                                }}
                            >
                                {avatarPreview ? (
                                    <img
                                        src={avatarPreview}
                                        alt="Avatar"
                                        style={{ width: '100%', height: '100%', objectFit: 'cover' }}
                                    />
                                ) : (
                                    (usuari?.nom || 'U').charAt(0).toUpperCase()
                                )}
                            </div>

                            <h4 className="fw-bold mb-1">{usuari?.nom || usuari?.name}</h4>
                            <p className="text-muted mb-2">{usuari?.email}</p>

                            <span className={`badge ${esAdmin ? 'text-bg-danger' : 'text-bg-primary'}`}>
                                {rolNormalitzat}
                            </span>

                            <div className="mt-4">
                                <label className="form-label fw-semibold">Foto de perfil</label>
                                <input
                                    type="file"
                                    accept="image/*"
                                    className="form-control"
                                    onChange={canviarAvatar}
                                />
                                <small className="text-muted d-block mt-2">
                                    De moment es guarda al navegador. Si la vols persistent a la BD,
                                    s’haurà d’afegir camp al backend.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-8">
                    <div className="card shadow-sm mb-4">
                        <div className="card-body">
                            <h4 className="fw-bold mb-3">Dades del compte</h4>

                            <form onSubmit={guardarPerfil}>
                                <div className="mb-3">
                                    <label className="form-label">Nom</label>
                                    <input
                                        type="text"
                                        className="form-control"
                                        value={perfil.nom}
                                        onChange={(e) =>
                                            setPerfil({ ...perfil, nom: e.target.value })
                                        }
                                    />
                                </div>

                                <div className="mb-3">
                                    <label className="form-label">Email</label>
                                    <input
                                        type="email"
                                        className="form-control"
                                        value={perfil.email}
                                        onChange={(e) =>
                                            setPerfil({ ...perfil, email: e.target.value })
                                        }
                                    />
                                </div>

                                <div className="mb-3">
                                    <label className="form-label">Rol</label>
                                    <input
                                        type="text"
                                        className="form-control"
                                        value={rolNormalitzat}
                                        disabled
                                    />
                                    <small className="text-muted">
                                        La comprovació es fa en minúscules: <code>admin</code> o <code>usuari</code>.
                                    </small>
                                </div>

                                <button type="submit" className="btn btn-dark">
                                    Guardar perfil
                                </button>
                            </form>
                        </div>
                    </div>

                    <div className="card shadow-sm mb-4">
                        <div className="card-body">
                            <h4 className="fw-bold mb-3">Canviar contrasenya</h4>

                            <form onSubmit={canviarContrasenya}>
                                <div className="mb-3">
                                    <label className="form-label">Nova contrasenya</label>
                                    <input
                                        type="password"
                                        className="form-control"
                                        value={passwords.password}
                                        onChange={(e) =>
                                            setPasswords({
                                                ...passwords,
                                                password: e.target.value
                                            })
                                        }
                                    />
                                </div>

                                <div className="mb-3">
                                    <label className="form-label">Repetir contrasenya</label>
                                    <input
                                        type="password"
                                        className="form-control"
                                        value={passwords.password_confirmation}
                                        onChange={(e) =>
                                            setPasswords({
                                                ...passwords,
                                                password_confirmation: e.target.value
                                            })
                                        }
                                    />
                                </div>

                                <button type="submit" className="btn btn-primary">
                                    Actualitzar contrasenya
                                </button>
                            </form>
                        </div>
                    </div>

                    {esAdmin && (
                        <div className="card shadow-sm border-danger">
                            <div className="card-body">
                                <h4 className="fw-bold text-danger mb-2">Panell d’administració</h4>
                                <p className="mb-0">
                                    Aquest compte té permisos d’administrador.
                                </p>
                            </div>
                        </div>
                    )}
                </div>
            </div>
        </div>
    )
}

export default Configuracio