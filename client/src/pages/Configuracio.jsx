import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { lligaActivaService } from '../services/lligaActivaService'
import { equipFantasyLocalService } from '../services/equipFantasyLocalService'
import './Configuracio.css'

const API_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

function Configuracio() {
    const [usuari, setUsuari] = useState(null)
    const [lligaActiva, setLligaActiva] = useState(null)
    const [missatge, setMissatge] = useState('')
    const [error, setError] = useState('')
    const [resumLocal, setResumLocal] = useState({
        clausDemo: 0,
        clausAlineacio: 0,
        clausEquip: 0,
    })

    useEffect(() => {
        carregarDades()
    }, [])

    const carregarDades = () => {
        setUsuari(obtenirUsuariActual())
        setLligaActiva(lligaActivaService.obtenir())
        setResumLocal(obtenirResumLocalStorage())
    }

    const inicialUsuari = useMemo(() => {
        return usuari?.name?.charAt(0)?.toUpperCase()
            || usuari?.nom?.charAt(0)?.toUpperCase()
            || usuari?.email?.charAt(0)?.toUpperCase()
            || 'U'
    }, [usuari])

    const nomUsuari = usuari?.name || usuari?.nom || 'Usuari'
    const emailUsuari = usuari?.email || 'Sense correu'
    const rolUsuari = usuari?.rol || usuari?.role || 'usuari'

    const mostrarMissatge = (text) => {
        setError('')
        setMissatge(text)

        setTimeout(() => {
            setMissatge('')
        }, 2600)
    }

    const mostrarError = (text) => {
        setMissatge('')
        setError(text)

        setTimeout(() => {
            setError('')
        }, 3000)
    }

    const reiniciarEquipActual = () => {
        try {
            const lliga = lligaActivaService.obtenir()

            if (!lliga) {
                mostrarError('No hi ha cap lliga activa per reiniciar.')
                return
            }

            equipFantasyLocalService.reiniciarEquipLligaActual()
            netejarAlineacionsLliga(lliga.id)

            carregarDades()
            mostrarMissatge('Equip i alineació de la lliga activa reiniciats.')
        } catch (err) {
            mostrarError(err.message || 'No s’ha pogut reiniciar l’equip.')
        }
    }

    const netejarDadesDemo = () => {
        const clausEliminades = []

        Object.keys(localStorage).forEach((key) => {
            const esClauDemo =
                key.startsWith('ffe_jugadors_fitxats_lliga_') ||
                key.startsWith('ffe_pressupost_lliga_') ||
                key.startsWith('ffe_alineacio_') ||
                key.startsWith('ffe_puntuacions') ||
                key.startsWith('ffe_admin') ||
                key === 'ffe_jugadors_fitxats' ||
                key === 'ffe_pressupost'

            if (esClauDemo) {
                localStorage.removeItem(key)
                clausEliminades.push(key)
            }
        })

        carregarDades()
        mostrarMissatge(`Dades demo netejades (${clausEliminades.length} claus).`)
    }

    const copiarInfoDemo = async () => {
        const info = {
            api_url: API_URL,
            usuari: {
                nom: nomUsuari,
                email: emailUsuari,
                rol: rolUsuari,
            },
            lliga_activa: lligaActiva || null,
            resum_local_storage: resumLocal,
        }

        try {
            await navigator.clipboard.writeText(JSON.stringify(info, null, 2))
            mostrarMissatge('Informació de demo copiada al porta-retalls.')
        } catch {
            mostrarError('No s’ha pogut copiar la informació.')
        }
    }

    return (
        <main className="app-page configuracio-page">
            <section className="configuracio-header">
                <div>
                    <span className="configuracio-kicker">Configuració</span>

                    <h1>Configuració del compte</h1>

                    <p>
                        Revisa l’estat de la sessió, la lliga activa i les dades locals
                        utilitzades durant la demo.
                    </p>
                </div>

                <div className="configuracio-header-card">
                    <span>Mode actual</span>
                    <strong>Client + fallback local</strong>
                </div>
            </section>

            {missatge && (
                <div className="configuracio-alert configuracio-alert-success">
                    {missatge}
                </div>
            )}

            {error && (
                <div className="configuracio-alert configuracio-alert-error">
                    {error}
                </div>
            )}

            <section className="configuracio-grid">
                <article className="configuracio-card configuracio-profile-card">
                    <span className="configuracio-kicker">Usuari</span>

                    <div className="configuracio-user-box">
                        <div className="configuracio-avatar">{inicialUsuari}</div>

                        <div>
                            <h2>{nomUsuari}</h2>
                            <p>{emailUsuari}</p>
                        </div>
                    </div>

                    <div className="configuracio-info-list">
                        <div>
                            <span>Rol</span>
                            <strong>{normalitzarRol(rolUsuari)}</strong>
                        </div>

                        <div>
                            <span>Estat sessió</span>
                            <strong>{usuari ? 'Sessió iniciada' : 'Sense sessió'}</strong>
                        </div>
                    </div>
                </article>

                <article className="configuracio-card">
                    <span className="configuracio-kicker">Lliga activa</span>

                    <h2>{lligaActiva?.nom || 'Cap lliga activa'}</h2>

                    <p>
                        Aquesta és la lliga que utilitzen actualment el mercat, la
                        plantilla i l’alineació.
                    </p>

                    <div className="configuracio-info-list">
                        <div>
                            <span>ID / Codi</span>
                            <strong>
                                {lligaActiva?.id ||
                                    lligaActiva?.codi ||
                                    lligaActiva?.codi_acces ||
                                    '—'}
                            </strong>
                        </div>

                        <div>
                            <span>Pressupost actual</span>
                            <strong>
                                {formatMoney(equipFantasyLocalService.getPressupost())}
                            </strong>
                        </div>
                    </div>

                    <div className="configuracio-actions">
                        <Link to="/lligues" className="configuracio-secondary-btn">
                            Canviar lliga
                        </Link>

                        <Link to="/mercat" className="configuracio-secondary-btn">
                            Anar al mercat
                        </Link>
                    </div>
                </article>

                <article className="configuracio-card">
                    <span className="configuracio-kicker">Backend</span>

                    <h2>Connexió API</h2>

                    <p>
                        El client està preparat per connectar-se al backend. Si alguna
                        ruta encara no existeix, es manté el mode local per poder fer demo.
                    </p>

                    <div className="configuracio-api-box">
                        <span>URL API</span>
                        <strong>{API_URL}</strong>
                    </div>

                    <div className="configuracio-status-row">
                        <span className="configuracio-status-dot"></span>
                        <strong>Fallback local activat</strong>
                    </div>
                </article>

                <article className="configuracio-card">
                    <span className="configuracio-kicker">Dades locals</span>

                    <h2>Mode demo</h2>

                    <p>
                        Control ràpid del localStorage per reiniciar proves sense haver
                        d’entrar a les eines del navegador.
                    </p>

                    <div className="configuracio-local-grid">
                        <div>
                            <span>Claus demo</span>
                            <strong>{resumLocal.clausDemo}</strong>
                        </div>

                        <div>
                            <span>Equips</span>
                            <strong>{resumLocal.clausEquip}</strong>
                        </div>

                        <div>
                            <span>Alineacions</span>
                            <strong>{resumLocal.clausAlineacio}</strong>
                        </div>
                    </div>

                    <div className="configuracio-actions">
                        <button
                            type="button"
                            className="configuracio-main-btn"
                            onClick={reiniciarEquipActual}
                        >
                            Reiniciar equip actual
                        </button>

                        <button
                            type="button"
                            className="configuracio-danger-btn"
                            onClick={netejarDadesDemo}
                        >
                            Netejar dades demo
                        </button>
                    </div>
                </article>
            </section>

            <section className="configuracio-card configuracio-wide-card">
                <div>
                    <span className="configuracio-kicker">Diagnòstic</span>
                    <h2>Informació per proves</h2>
                    <p>
                        Pots copiar un resum de la configuració actual per compartir-lo
                        amb el teu company quan reviseu la connexió amb l’API.
                    </p>
                </div>

                <button
                    type="button"
                    className="configuracio-main-btn"
                    onClick={copiarInfoDemo}
                >
                    Copiar informació
                </button>
            </section>
        </main>
    )
}

const obtenirUsuariActual = () => {
    try {
        return JSON.parse(localStorage.getItem('ffe_user') || 'null')
    } catch {
        return null
    }
}

const obtenirResumLocalStorage = () => {
    const keys = Object.keys(localStorage)

    return {
        clausDemo: keys.filter((key) => key.startsWith('ffe_')).length,
        clausAlineacio: keys.filter((key) => key.startsWith('ffe_alineacio_')).length,
        clausEquip: keys.filter((key) =>
            key.startsWith('ffe_jugadors_fitxats_lliga_')
        ).length,
    }
}

const netejarAlineacionsLliga = (lligaId) => {
    Object.keys(localStorage).forEach((key) => {
        if (
            key.startsWith(`ffe_alineacio_formacio_lliga_${lligaId}`) ||
            key.startsWith(`ffe_alineacio_titulars_lliga_${lligaId}`)
        ) {
            localStorage.removeItem(key)
        }
    })
}

const normalitzarRol = (rol) => {
    const value = String(rol || '').toLowerCase()

    if (value === 'admin') return 'Administrador'
    if (value === 'administrador') return 'Administrador'
    if (value === 'guest') return 'Convidat'

    return 'Usuari registrat'
}

const formatMoney = (value) => {
    return new Intl.NumberFormat('ca-ES', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0,
    }).format(Number(value || 0))
}

export default Configuracio