import { useMemo, useState } from 'react'
import { alineacioInfo, alineacioSquad } from '../data/mockData'
import './Alineacio.css'

const ESQUEMES = {
    '4-3-3': { defenses: 4, migcampistes: 3, davanters: 3 },
    '4-4-2': { defenses: 4, migcampistes: 4, davanters: 2 },
    '5-3-2': { defenses: 5, migcampistes: 3, davanters: 2 }
}

function Alineacio() {
    const [esquema, setEsquema] = useState(alineacioInfo.esquema || '4-3-3')
    const [capitaId, setCapitaId] = useState(null)
    const [seleccionantCapita, setSeleccionantCapita] = useState(false)
    const [missatge, setMissatge] = useState('')

    const formacioActual = ESQUEMES[esquema]

    const alineacioActual = useMemo(() => {
        return {
            porter: alineacioSquad.porter.slice(0, 1),
            defenses: alineacioSquad.defenses.slice(0, formacioActual.defenses),
            migcampistes: alineacioSquad.migcampistes.slice(0, formacioActual.migcampistes),
            davanters: alineacioSquad.davanters.slice(0, formacioActual.davanters)
        }
    }, [esquema, formacioActual])

    const handleAssignarCapita = () => {
        setSeleccionantCapita((prev) => !prev)
        setMissatge('')
    }

    const handleSeleccionarJugador = (jugadorId) => {
        if (!seleccionantCapita) return

        setCapitaId(jugadorId)
        setSeleccionantCapita(false)
        setMissatge('Capità assignat correctament.')
    }

    const handleGuardar = () => {
        setMissatge(`Alineació ${esquema} guardada correctament.`)
    }

    return (
        <div className="container mt-4">
            <h2 className="mb-4">Alineació</h2>

            <div className="card shadow-sm mb-4">
                <div className="card-body">
                    <div className="row text-center text-md-start">
                        <div className="col-md-3 mb-2">
                            <strong>Fitxes</strong><br />
                            {alineacioInfo.fitxes}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Jornada</strong><br />
                            {alineacioInfo.jornada} · {alineacioInfo.dataHora}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Valor equip</strong><br />
                            € {alineacioInfo.valorEquip}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Recompensa</strong><br />
                            {alineacioInfo.recompensa}
                        </div>
                    </div>
                </div>
            </div>

            <div className="d-flex gap-2 flex-wrap mb-4">
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

                <img
                    src={jugador.escut}
                    alt={jugador.equip}
                    className="player-crest"
                    onError={(e) => {
                        e.currentTarget.src = '/assets/escuts/placeholder.png'
                    }}
                />

                {esCapita && <div className="captain-badge">C</div>}
            </div>

            <div className="player-name">{jugador.nom}</div>
        </div>
    )
}

export default Alineacio