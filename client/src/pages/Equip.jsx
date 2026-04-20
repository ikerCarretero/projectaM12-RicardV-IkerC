import { equipFantasy, equipFantasyJugadors } from '../data/mockData'

function EquipFantasy() {
    const porters = equipFantasyJugadors.filter((j) => j.posicio === 'PORTER')
    const defenses = equipFantasyJugadors.filter((j) => j.posicio === 'DEFENSA')
    const migcampistes = equipFantasyJugadors.filter((j) => j.posicio === 'MIGCAMPISTA')
    const davanters = equipFantasyJugadors.filter((j) => j.posicio === 'DAVANTER')

    return (
        <div className="container mt-4">
            <div className="card shadow-sm mb-4">
                <div className="card-body">
                    <h2 className="mb-3">{equipFantasy.nom}</h2>

                    <div className="row">
                        <div className="col-md-3 mb-2"><strong>Usuari:</strong> {equipFantasy.usuari}</div>
                        <div className="col-md-3 mb-2"><strong>Pressupost:</strong> {equipFantasy.pressupost} M€</div>
                        <div className="col-md-3 mb-2"><strong>Punts totals:</strong> {equipFantasy.puntsTotals}</div>
                        <div className="col-md-3 mb-2"><strong>Esquema:</strong> {equipFantasy.esquema}</div>
                    </div>
                </div>
            </div>

            <SeccioJugadors titol="Porter" jugadors={porters} cols="col-md-6 col-lg-4" />
            <SeccioJugadors titol="Defenses" jugadors={defenses} cols="col-md-6 col-lg-3" />
            <SeccioJugadors titol="Migcampistes" jugadors={migcampistes} cols="col-md-6 col-lg-4" />
            <SeccioJugadors titol="Davanters" jugadors={davanters} cols="col-md-6 col-lg-4" />
        </div>
    )
}

function SeccioJugadors({ titol, jugadors, cols }) {
    return (
        <div className="mb-4">
            <h3 className="mb-3">{titol}</h3>
            <div className="row">
                {jugadors.map((jugador) => (
                    <div className={`${cols} mb-3`} key={jugador.id}>
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <h5 className="card-title">{jugador.nom}</h5>
                                <p className="mb-1"><strong>Equip:</strong> {jugador.equip}</p>
                                <p className="mb-1"><strong>Valor:</strong> {jugador.valorMercat} M€</p>
                                <p className="mb-0"><strong>Punts:</strong> {jugador.punts}</p>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default EquipFantasy