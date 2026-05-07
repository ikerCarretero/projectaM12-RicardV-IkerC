import { useEffect, useMemo, useState } from 'react'
import { api } from '../services/api'
import './Configuracio.css'

function Configuracio() {
    const [usuari, setUsuari] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [missatge, setMissatge] = useState('')

    const [form, setForm] = useState({
        nom: '',
        email: '',
        foto: '',
        passwordActual: '',
        passwordNova: '',
        passwordNovaConfirmacio: ''
    })

    useEffect(() => {
        const carregarUsuari = async () => {
            try {
                setLoading(true)
                setError('')

                const data = await api.getMe()
                setUsuari(data)

                setForm((prev) => ({
                    ...prev,
                    nom: data?.nom || data?.name || '',
                    email: data?.email || '',
                    foto: data?.foto_perfil || data?.img || ''
                }))
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar la configuració de l’usuari.')
            } finally {
                setLoading(false)
            }
        }

        carregarUsuari()
    }, [])

    const rolNormalitzat = useMemo(() => {
        return (usuari?.rol || 'usuari').toLowerCase()
    }, [usuari])

    const inicial = useMemo(() => {
        return (form.nom || usuari?.nom || usuari?.name || 'U').charAt(0).toUpperCase()
    }, [form.nom, usuari])

    const handleChange = (e) => {
        const { name, value } = e.target
        setForm((prev) => ({
            ...prev,
            [name]: value
        }))
    }

    const handleGuardarPerfil = (e) => {
        e.preventDefault()
        setMissatge('La interfície ja està preparada. Quan el backend tingui l’endpoint d’actualització, aquí es guardaran els canvis del perfil.')
    }

    const handleCanviarPassword = (e) => {
        e.preventDefault()

        if (form.passwordNova !== form.passwordNovaConfirmacio) {
            setMissatge('La nova contrasenya i la confirmació no coincideixen.')
            return
        }

        setMissatge('La zona de canvi de contrasenya ja està preparada. Falta connectar-la a backend.')
    }

    if (loading) {
        return <p>Carregant configuració...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    return (
        <div className="config-page">
            <div className="config-header">
                <div>
                    <h1 className="config-title">Configuració</h1>
                    <p className="config-subtitle">
                        Gestiona el teu perfil, la seguretat del compte i la configuració general.
                    </p>
                </div>
            </div>

            {missatge && (
                <div className="alert alert-info">{missatge}</div>
            )}

            <div className="config-grid">
                <section className="config-card config-profile-card">
                    <div className="config-profile-top">
                        <div className="config-avatar">
                            {inicial}
                        </div>

                        <div>
                            <h2 className="config-section-title mb-1">
                                {form.nom || 'Usuari'}
                            </h2>
                            <p className="config-muted mb-1">{form.email || '-'}</p>
                            <span className={`config-role-badge ${rolNormalitzat === 'admin' ? 'is-admin' : 'is-user'}`}>
                                {rolNormalitzat}
                            </span>
                        </div>
                    </div>

                    <div className="config-divider" />

                    <form onSubmit={handleGuardarPerfil}>
                        <h3 className="config-block-title">Perfil</h3>

                        <div className="row">
                            <div className="col-md-6 mb-3">
                                <label className="form-label">Nom d’usuari</label>
                                <input
                                    type="text"
                                    className="form-control"
                                    name="nom"
                                    value={form.nom}
                                    onChange={handleChange}
                                />
                            </div>

                            <div className="col-md-6 mb-3">
                                <label className="form-label">Email</label>
                                <input
                                    type="email"
                                    className="form-control"
                                    name="email"
                                    value={form.email}
                                    onChange={handleChange}
                                />
                            </div>

                            <div className="col-12 mb-3">
                                <label className="form-label">URL foto de perfil</label>
                                <input
                                    type="text"
                                    className="form-control"
                                    name="foto"
                                    value={form.foto}
                                    onChange={handleChange}
                                    placeholder="https://..."
                                />
                                <div className="form-text">
                                    De moment ho deixem preparat com a camp d’URL.
                                </div>
                            </div>

                            <div className="col-md-6 mb-3">
                                <label className="form-label">Rol</label>
                                <input
                                    type="text"
                                    className="form-control"
                                    value={rolNormalitzat}
                                    disabled
                                />
                                <div className="form-text">
                                    El sistema llegeix el rol en minúscula: <strong>usuari</strong> o <strong>admin</strong>.
                                </div>
                            </div>
                        </div>

                        <button type="submit" className="btn btn-dark">
                            Guardar perfil
                        </button>
                    </form>
                </section>

                <section className="config-card">
                    <h2 className="config-section-title">Seguretat</h2>
                    <p className="config-muted">
                        Prepara el canvi de contrasenya del teu compte.
                    </p>

                    <form onSubmit={handleCanviarPassword}>
                        <div className="mb-3">
                            <label className="form-label">Contrasenya actual</label>
                            <input
                                type="password"
                                className="form-control"
                                name="passwordActual"
                                value={form.passwordActual}
                                onChange={handleChange}
                            />
                        </div>

                        <div className="mb-3">
                            <label className="form-label">Nova contrasenya</label>
                            <input
                                type="password"
                                className="form-control"
                                name="passwordNova"
                                value={form.passwordNova}
                                onChange={handleChange}
                            />
                        </div>

                        <div className="mb-3">
                            <label className="form-label">Confirmar nova contrasenya</label>
                            <input
                                type="password"
                                className="form-control"
                                name="passwordNovaConfirmacio"
                                value={form.passwordNovaConfirmacio}
                                onChange={handleChange}
                            />
                        </div>

                        <button type="submit" className="btn btn-outline-dark">
                            Canviar contrasenya
                        </button>
                    </form>
                </section>

                <section className="config-card">
                    <h2 className="config-section-title">Estat del compte</h2>

                    <div className="config-status-list">
                        <div className="config-status-item">
                            <span>Usuari</span>
                            <strong>{form.nom || '-'}</strong>
                        </div>

                        <div className="config-status-item">
                            <span>Email</span>
                            <strong>{form.email || '-'}</strong>
                        </div>

                        <div className="config-status-item">
                            <span>Rol detectat</span>
                            <strong>{rolNormalitzat}</strong>
                        </div>

                        <div className="config-status-item">
                            <span>Mode</span>
                            <strong>{rolNormalitzat === 'admin' ? 'Administrador' : 'Usuari normal'}</strong>
                        </div>
                    </div>
                </section>

                {rolNormalitzat === 'admin' && (
                    <section className="config-card config-admin-card">
                        <h2 className="config-section-title">Panell d’administració</h2>
                        <p className="config-muted">
                            Aquesta zona només es mostra si el rol és <strong>admin</strong>.
                        </p>

                        <div className="config-admin-grid">
                            <div className="config-admin-box">
                                <h4>Gestió d’usuaris</h4>
                                <p>Crear, editar o eliminar usuaris del sistema.</p>
                            </div>

                            <div className="config-admin-box">
                                <h4>Gestió de competicions</h4>
                                <p>Control de lligues, equips, jornades i partits.</p>
                            </div>

                            <div className="config-admin-box">
                                <h4>Gestió de plantilles</h4>
                                <p>Control de jugadors, valors de mercat i alineacions base.</p>
                            </div>

                            <div className="config-admin-box">
                                <h4>Backend pendent</h4>
                                <p>Aquesta estructura ja està preparada per connectar-se més endavant.</p>
                            </div>
                        </div>
                    </section>
                )}
            </div>
        </div>
    )
}

export default Configuracio