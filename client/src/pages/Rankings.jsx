import './Rankings.css'

function Rankings() {
    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const esGuest = localStorage.getItem('ffe_guest') === 'true'

    return (
        <div className="rankings-page">
            <div className="rankings-header">
                <h1 className="rankings-title">Rankings</h1>
                <p className="rankings-subtitle">
                    Aquí podràs consultar la classificació de les teves lligues fantasy,
                    els millors usuaris i l’evolució de cada jornada.
                </p>
            </div>

            <section className="rankings-card">
                <h2 className="rankings-card-title">Encara no hi ha lligues disponibles</h2>
                <p className="rankings-card-text">
                    Aquesta secció està preparada per mostrar els rankings reals, però de moment
                    encara no s’han creat ni connectat les lligues fantasy.
                </p>

                <div className="rankings-info-grid">
                    <div className="rankings-info-box">
                        <h3>Lligues privades</h3>
                        <p>Properament podràs unir-te a lligues o crear-ne de noves.</p>
                    </div>

                    <div className="rankings-info-box">
                        <h3>Classificació general</h3>
                        <p>Es mostraran els punts, la posició i el rendiment dels usuaris.</p>
                    </div>

                    <div className="rankings-info-box">
                        <h3>Historial de jornades</h3>
                        <p>També podràs veure l’evolució jornada a jornada.</p>
                    </div>
                </div>
            </section>

            <section className="rankings-card">
                <h2 className="rankings-card-title">Estat de la funcionalitat</h2>

                <div className="rankings-status-grid">
                    <div className="rankings-status-box">
                        <div className="rankings-status-top">
                            <strong>Pantalla preparada</strong>
                            <span className="status-badge status-ok">Actiu</span>
                        </div>
                        <p>
                            La pàgina ja està integrada dins del dashboard i preparada per mostrar
                            contingut real.
                        </p>
                    </div>

                    <div className="rankings-status-box">
                        <div className="rankings-status-top">
                            <strong>Dades de lligues</strong>
                            <span className="status-badge status-pending">Pendent</span>
                        </div>
                        <p>
                            Quan estigui implementada la part de lligues fantasy, aquí connectarem
                            el rànquing real.
                        </p>
                    </div>
                </div>
            </section>

            <section className="rankings-card">
                <h2 className="rankings-card-title">El teu estat actual</h2>

                <div className="rankings-user-grid">
                    <div className="rankings-user-box">
                        <span>Usuari</span>
                        <strong>{usuari?.nom || (esGuest ? 'Guest' : 'No identificat')}</strong>
                    </div>

                    <div className="rankings-user-box">
                        <span>Mode</span>
                        <strong>{esGuest ? 'Convidat' : 'Registrat'}</strong>
                    </div>

                    <div className="rankings-user-box">
                        <span>Participació en lligues</span>
                        <strong>Encara no disponible</strong>
                    </div>
                </div>
            </section>
        </div>
    )
}

export default Rankings