import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { mercatService } from '../services/mercatService'
import './Alineacio.css'

function Alineacio() {
    const [jugadorsFitxats, setJugadorsFitxats] = useState([])
    const [loading, setLoading] = useState(true)

    const [formacio, setFormacio] = useState(
        localStorage.getItem('ffe_formacio') || '4-3-3'
    )

    const usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')

    useEffect(() => {
        const carregarJugadorsFitxats = async () => {
            try {
                setLoading(true)
                const data = await mercatService.getJugadorsFitxats()
                setJugadorsFitxats(Array.isArray(data) ? data : [])
            } catch (error) {
                console.error('Error carregant alineació:', error)
                setJugadorsFitxats([])
            } finally {
                setLoading(false)
            }
        }

        carregarJugadorsFitxats()
    }, [])

    useEffect(() => {
        localStorage.setItem('ffe_formacio', formacio)
    }, [formacio])

    const formatEuros = (valor) => {
        return new Intl.NumberFormat('ca-ES', {
            style: 'currency',
            currency: 'EUR',
            maximumFractionDigits: 0,
        }).format(Number(valor || 0))
    }

    const totalValor = useMemo(() => {
        return jugadorsFitxats.reduce(
            (total, jugador) => total + Number(jugador.valor_mercat || 0),
            0
        )
    }, [jugadorsFitxats])

    const totalPunts = useMemo(() => {
        return jugadorsFitxats.reduce(
            (total, jugador) => total + Number(jugador.punts || 0),
            0
        )
    }, [jugadorsFitxats])

    const porters = useMemo(
        () => jugadorsFitxats.filter((j) => j.posicio === 'Porter'),
        [jugadorsFitxats]
    )

    const defenses = useMemo(
        () => jugadorsFitxats.filter((j) => j.posicio === 'Defensa'),
        [jugadorsFitxats]
    )

    const migcampistes = useMemo(
        () => jugadorsFitxats.filter((j) => j.posicio === 'Migcampista'),
        [jugadorsFitxats]
    )

    const davanters = useMemo(
        () => jugadorsFitxats.filter((j) => j.posicio === 'Davanter'),
        [jugadorsFitxats]
    )

    const renderJugadorMini = (jugador) => (
        <article className="alineacio-player-card" key={jugorKey(jugador)}>
            <div className="alineacio-player-avatar">
                {jugador.nom?.charAt(0).toUpperCase() || 'J'}
            </div>

            <div className="alineacio-player-info">
                <strong>{jugador.nom}</strong>
                <span>{jugador.equip}</span>
            </div>

            <div className="alineacio-player-value">
                {formatEuros(jugador.valor_mercat)}
            </div>
        </article>
    )

    const jugorKey = (jugador) => {
        return `${jugador.id}-${jugador.nom}`
    }

    const renderPitchPlayer = (jugador, fallbackText, index) => {
        if (!jugador) {
            return (
                <div className="pitch-player pitch-player-empty" key={`${fallbackText}-${index}`}>
                    {fallbackText}
                </div>
            )
        }

        return (
            <div
                className="pitch-player"
                key={`${jugador.id}-${jugador.nom}-${index}`}
                title={`${jugador.nom} - ${jugador.equip}`}
            >
                <span>{jugador.nom?.split(' ')[0]}</span>
                <small>{jugador.posicio}</small>
            </div>
        )
    }

    const renderRow = (players, slots, fallbackText, className) => {
        return (
            <div className={`pitch-row ${className}`}>
                {Array.from({ length: slots }).map((_, index) =>
                    renderPitchPlayer(players[index], fallbackText, index)
                )}
            </div>
        )
    }

    const renderFormacio = () => {
        if (formacio === '4-4-2') {
            return (
                <>
                    {renderRow(porters, 1, 'PT', 'pitch-row-gk')}
                    {renderRow(defenses, 4, 'DEF', 'pitch-row-def')}
                    {renderRow(migcampistes, 4, 'MIG', 'pitch-row-mid')}
                    {renderRow(davanters, 2, 'DAV', 'pitch-row-att')}
                </>
            )
        }

        if (formacio === '3-5-2') {
            return (
                <>
                    {renderRow(porters, 1, 'PT', 'pitch-row-gk')}
                    {renderRow(defenses, 3, 'DEF', 'pitch-row-def')}
                    {renderRow(migcampistes, 5, 'MIG', 'pitch-row-mid')}
                    {renderRow(davanters, 2, 'DAV', 'pitch-row-att')}
                </>
            )
        }

        if (formacio === '4-2-3-1') {
            return (
                <>
                    {renderRow(porters, 1, 'PT', 'pitch-row-gk')}
                    {renderRow(defenses, 4, 'DEF', 'pitch-row-def')}
                    {renderRow(migcampistes.slice(0, 2), 2, 'MIG', 'pitch-row-mid-small')}
                    {renderRow(migcampistes.slice(2, 5), 3, 'MIG', 'pitch-row-mid')}
                    {renderRow(davanters, 1, 'DAV', 'pitch-row-att')}
                </>
            )
        }

        return (
            <>
                {renderRow(porters, 1, 'PT', 'pitch-row-gk')}
                {renderRow(defenses, 4, 'DEF', 'pitch-row-def')}
                {renderRow(migcampistes, 3, 'MIG', 'pitch-row-mid')}
                {renderRow(davanters, 3, 'DAV', 'pitch-row-att')}
            </>
        )
    }

    return (
        <main className="app-page alineacio-page">
            <section className="alineacio-header">
                <div>
                    <p className="alineacio-kicker">Alineació fantasy</p>

                    <h1>Alineació</h1>

                    <p>
                        Gestiona els jugadors que has fitxat i prepara una primera
                        estructura visual del teu equip.
                    </p>
                </div>

                <div className="alineacio-header-card">
                    <span>Jugadors fitxats</span>
                    <strong>{jugadorsFitxats.length}</strong>
                </div>
            </section>

            {loading ? (
                <section className="alineacio-empty-card">
                    <h2>Carregant alineació...</h2>
                    <p>Estem consultant els teus jugadors fitxats.</p>
                </section>
            ) : jugadorsFitxats.length === 0 ? (
                <section className="alineacio-empty-card">
                    <h2>Alineació no disponible</h2>

                    <p>
                        Encara no tens cap jugador fitxat. Ves al mercat i fitxa alguns
                        jugadors per començar a construir el teu equip.
                    </p>

                    <div className="alineacio-empty-info">
                        <div>
                            <strong>Usuari</strong>
                            <span>{usuari?.nom || 'Usuari'}</span>
                        </div>

                        <div>
                            <strong>Estat</strong>
                            <span>Pendent d’equip fantasy</span>
                        </div>

                        <div>
                            <strong>Mòdul</strong>
                            <span>Connectat amb mercat demo</span>
                        </div>
                    </div>

                    <Link to="/mercat" className="alineacio-main-btn">
                        Anar al mercat
                    </Link>
                </section>
            ) : (
                <>
                    <section className="alineacio-summary-grid">
                        <article className="alineacio-summary-card">
                            <span>Porters</span>
                            <strong>{porters.length}</strong>
                        </article>

                        <article className="alineacio-summary-card">
                            <span>Defenses</span>
                            <strong>{defenses.length}</strong>
                        </article>

                        <article className="alineacio-summary-card">
                            <span>Migcampistes</span>
                            <strong>{migcampistes.length}</strong>
                        </article>

                        <article className="alineacio-summary-card">
                            <span>Davanters</span>
                            <strong>{davanters.length}</strong>
                        </article>
                    </section>

                    <section className="alineacio-main-grid">
                        <article className="alineacio-card alineacio-field-card">
                            <div className="alineacio-card-header">
                                <div>
                                    <p className="alineacio-kicker">Vista tàctica</p>
                                    <h2>Onze inicial</h2>
                                </div>

                                <div className="alineacio-formation-box">
                                    <label htmlFor="formacio">Formació</label>

                                    <select
                                        id="formacio"
                                        value={formacio}
                                        onChange={(event) => setFormacio(event.target.value)}
                                    >
                                        <option value="4-3-3">4-3-3</option>
                                        <option value="4-4-2">4-4-2</option>
                                        <option value="3-5-2">3-5-2</option>
                                        <option value="4-2-3-1">4-2-3-1</option>
                                    </select>
                                </div>
                            </div>

                            <div className="alineacio-pitch">
                                {renderFormacio()}
                            </div>
                        </article>

                        <article className="alineacio-card alineacio-stats-card">
                            <p className="alineacio-kicker">Resum</p>
                            <h2>Estat de la plantilla</h2>

                            <div className="alineacio-stats-list">
                                <div>
                                    <span>Formació</span>
                                    <strong>{formacio}</strong>
                                </div>

                                <div>
                                    <span>Valor total</span>
                                    <strong>{formatEuros(totalValor)}</strong>
                                </div>

                                <div>
                                    <span>Punts totals</span>
                                    <strong>{totalPunts}</strong>
                                </div>

                                <div>
                                    <span>Usuari</span>
                                    <strong>{usuari?.nom || 'Usuari'}</strong>
                                </div>

                                <div>
                                    <span>Estat</span>
                                    <strong>En construcció</strong>
                                </div>
                            </div>

                            <Link to="/mercat" className="alineacio-secondary-btn">
                                Fitxar més jugadors
                            </Link>
                        </article>
                    </section>

                    <section className="alineacio-content-grid">
                        <article className="alineacio-card">
                            <p className="alineacio-kicker">Plantilla actual</p>
                            <h2>Jugadors fitxats</h2>

                            <div className="alineacio-players-list">
                                {jugadorsFitxats.map(renderJugadorMini)}
                            </div>
                        </article>

                        <article className="alineacio-card">
                            <p className="alineacio-kicker">Distribució</p>
                            <h2>Equip per posicions</h2>

                            <div className="alineacio-position-block">
                                <h3>Porters</h3>
                                {porters.length > 0 ? (
                                    porters.map(renderJugadorMini)
                                ) : (
                                    <p>Cap porter fitxat.</p>
                                )}
                            </div>

                            <div className="alineacio-position-block">
                                <h3>Defenses</h3>
                                {defenses.length > 0 ? (
                                    defenses.map(renderJugadorMini)
                                ) : (
                                    <p>Cap defensa fitxat.</p>
                                )}
                            </div>

                            <div className="alineacio-position-block">
                                <h3>Migcampistes</h3>
                                {migcampistes.length > 0 ? (
                                    migcampistes.map(renderJugadorMini)
                                ) : (
                                    <p>Cap migcampista fitxat.</p>
                                )}
                            </div>

                            <div className="alineacio-position-block">
                                <h3>Davanters</h3>
                                {davanters.length > 0 ? (
                                    davanters.map(renderJugadorMini)
                                ) : (
                                    <p>Cap davanter fitxat.</p>
                                )}
                            </div>
                        </article>
                    </section>
                </>
            )}
        </main>
    )
}

export default Alineacio