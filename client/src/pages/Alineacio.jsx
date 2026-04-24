import { useEffect, useMemo, useState } from 'react'
import { Link } from 'react-router-dom'
import { api } from '../services/api'
import './Alineacio.css'

const ESQUEMES = {
    '4-3-3': { defenses: 4, migcampistes: 3, davanters: 3 },
    '4-4-2': { defenses: 4, migcampistes: 4, davanters: 2 },
    '5-3-2': { defenses: 5, migcampistes: 3, davanters: 2 }
}

function Alineacio() {
    const [alineacio, setAlineacio] = useState(null)
    const [equip, setEquip] = useState(null)
    const [esquema, setEsquema] = useState('4-3-3')
    const [capitaId, setCapitaId] = useState(null)
    const [seleccionantCapita, setSeleccionantCapita] = useState(false)
    const [missatge, setMissatge] = useState('')
    const [error, setError] = useState('')
    const [loading, setLoading] = useState(true)

    useEffect(() => {
        const carregar = async () => {
            try {
                setLoading(true)
                setError('')
                const meuEquip = await api.getMeuEquipFantasy()
                const mevaAlineacio = await api.getMevaAlineacio()

                setEquip(meuEquip)
                setAlineacio(mevaAlineacio)
                setEsquema(mevaAlineacio?.esquema || '4-3-3')
            } catch (err) {
                setError(err.message || 'No s’ha pogut carregar l’alineació.')
            } finally {
                setLoading(false)
            }
        }

        carregar()
    }, [])

    const jugadors = equip?.jugadors || []
    const formacioActual = ESQUEMES[esquema]

    const alineacioActual = useMemo(() => {
        const porters = jugadors.filter((j) => j.posicio_base === 'Porter')
        const defenses = jugadors.filter((j) => j.posicio_base === 'Defensa')
        const migcampistes = jugadors.filter((j) => j.posicio_base === 'Migcampista')
        const davanters = jugadors.filter((j) => j.posicio_base === 'Davanter')

        return {
            porter: porters.slice(0, 1),
            defenses: defenses.slice(0, formacioActual.defenses),
            migcampistes: migcampistes.slice(0, formacioActual.migcampistes),
            davanters: davanters.slice(0, formacioActual.davanters)
        }
    }, [jugadors, formacioActual])

    const handleAssignarCapita = () => {
        setSeleccionantCapita((prev) => !prev)
        setMissatge('')
    }

    const handleSeleccionarJugador = (jugadorId) => {
        if (!seleccionantCapita) return
        setCapitaId(jugadorId)
        setSeleccionantCapita(false)
        setMissatge('Capità assignat visualment.')
    }

    const handleGuardar = async () => {
        try {
            setMissatge('')
            setError('')

            if (!alineacio?.id) {
                setError('No existeix cap alineació per guardar.')
                return
            }

            await api.updateAlineacio(alineacio.id, {
                esquema,
                equip_fantasy_id: alineacio.equip_fantasy_id,
                jornada_id: alineacio.jornada_id
            })

            setMissatge(`Alineació ${esquema} guardada correctament.`)
        } catch (err) {
            setError(err.message || 'No s’ha pogut guardar l’alineació.')
        }
    }

    if (loading) {
        return <div className="container mt-4"><p>Carregant alineació...</p></div>
    }

    if (error) {
        return <div className="container mt-4"><div className="alert alert-danger">{error}</div></div>
    }

    if (!equip) {
        return <div className="container mt-4"><div className="alert alert-warning">No s’ha trobat cap equip fantasy.</div></div>
    }

    return (
        <div className="container mt-4">
            <h2 className="mb-4">Alineació</h2>

            <div className="card shadow-sm mb-4">
                <div className="card-body">
                    <div className="row text-center text-md-start">
                        <div className="col-md-3 mb-2">
                            <strong>Equip</strong><br />
                            {equip.nom_equip}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Jornada</strong><br />
                            {alineacio?.jornada?.numero || '-'}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Valor equip</strong><br />
                            {equip.pressupost}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Jugadors</strong><br />
                            {jugadors.length}
                        </div>
                    </div>
                </div>
            </div>

            <div className="d-flex gap-2 flex-wrap mb-4">
                <Link to="/plantilla" className="btn btn-outline-primary">
                    Veure plantilla
                </Link>

                <select
                    className="form-select w-auto"
                    value={esquema}
                    onChange={(e) => setEsquema(e.target.value)}
                >
                    <option value="4-3-3">4-3-3</option>
                    <option value="4-4-2">4-4-2</option>
                    <option value="5-3-2">5-3-2</option>
                </select>

                <button
                    className={`btn ${seleccionantCapita ? 'btn-warning' : 'btn-secondary'}`}
                    onClick={handleAssignarCapita}
                >
                    {seleccionantCapita ? 'Selecciona un jugador' : 'Assignar capità'}
                </button>

                <button className="btn btn-danger" onClick={handleGuardar}>
                    Guardar
                </button>
            </div>

            {missatge && (
                <div className="alert alert-success mb-4" role="alert">
                    {missatge}
                </div>
            )}

            <div className="pitch">
                <div className="pitch-row porter-row">
                    {alineacioActual.porter.map((jugador) => (
                        <JugadorPitchCard
                            key={jugador.id}
                            jugador={jugador}
                            esCapita={capitaId === jugador.id}
                            seleccionantCapita={seleccionantCapita}
                            onSeleccionar={handleSeleccionarJugador}
                        />
                    ))}
                </div>

                <div className="pitch-row defenses-row">
                    {alineacioActual.defenses.map((jugador) => (
                        <JugadorPitchCard
                            key={jugador.id}
                            jugador={jugador}
                            esCapita={capitaId === jugador.id}
                            seleccionantCapita={seleccionantCapita}
                            onSeleccionar={handleSeleccionarJugador}
                        />
                    ))}
                </div>

                <div className="pitch-row mids-row">
                    {alineacioActual.migcampistes.map((jugador) => (
                        <JugadorPitchCard
                            key={jugador.id}
                            jugador={jugador}
                            esCapita={capitaId === jugador.id}
                            seleccionantCapita={seleccionantCapita}
                            onSeleccionar={handleSeleccionarJugador}
                        />
                    ))}
                </div>

                <div className="pitch-row forwards-row">
                    {alineacioActual.davanters.map((jugador) => (
                        <JugadorPitchCard
                            key={jugador.id}
                            jugador={jugador}
                            esCapita={capitaId === jugador.id}
                            seleccionantCapita={seleccionantCapita}
                            onSeleccionar={handleSeleccionarJugador}
                        />
                    ))}
                </div>
            </div>
        </div>
    )
}

function JugadorPitchCard({ jugador, esCapita, seleccionantCapita, onSeleccionar }) {
    return (
        <div
            className={`player-card ${esCapita ? 'capita' : ''} ${seleccionantCapita ? 'seleccionable' : ''}`}
            onClick={() => onSeleccionar(jugador.id)}
        >
            <div className="player-top">
                <div className="player-avatar">
                    {jugador.nom.charAt(0)}
                </div>

                {esCapita && <div className="captain-badge">C</div>}
            </div>

            <div className="player-name">{jugador.nom}</div>
        </div>
    )
}

export default Alineacio