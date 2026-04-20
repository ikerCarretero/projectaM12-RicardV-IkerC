import { equipFantasy, equipFantasyJugadors } from '../data/mockData'

function Plantilla() {
    const porters = equipFantasyJugadors.filter((j) => j.posicio === 'PORTER')
    const defenses = equipFantasyJugadors.filter((j) => j.posicio === 'DEFENSA')
    const migcampistes = equipFantasyJugadors.filter((j) => j.posicio === 'MIGCAMPISTA')
    const davanters = equipFantasyJugadors.filter((j) => j.posicio === 'DAVANTER')

    return (
        <div>
            <div className="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                <div>
                    <h1 className="fw-bold mb-1">Plantilla</h1>
                    <p className="text-muted mb-0">Tots els jugadors disponibles del teu equip</p>
                </div>
            </div>

            <div className="card shadow-sm mb-4">
                <div className="card-body">
                    <div className="row">
                        <div className="col-md-3 mb-2">
                            <strong>Nom equip:</strong><br />
                            {equipFantasy.nom}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Usuari:</strong><br />
                            {equipFantasy.usuari}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Pressupost:</strong><br />
                            {equipFantasy.pressupost} M€
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Total jugadors:</strong><br />
                            {equipFantasyJugadors.length}
                        </div>
                    </div>
                </div>
            </div>

            <SeccioPlantilla titol="Porters" jugadors={porters} tipus="porter" />
            <SeccioPlantilla titol="Defenses" jugadors={defenses} tipus="defensa" />
            <SeccioPlantilla titol="Migcampistes" jugadors={migcampistes} tipus="migcampista" />
            <SeccioPlantilla titol="Davanters" jugadors={davanters} tipus="davanter" />
        </div>
    )
}

function SeccioPlantilla({ titol, jugadors, tipus }) {
    return (
        <div className="mb-4">
            <h3 className={`fw-bold mb-3 section-title section-title--${tipus}`}>{titol}</h3>

            <div className="row">
                {jugadors.map((jugador) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={jugador.id}>
                        <div className="card h-100 shadow-sm border-0">
                            <div className="card-body">
                                <div className="d-flex justify-content-between align-items-start mb-2">
                                    <h5 className="card-title mb-0">{jugador.nom}</h5>
                                    <span className={`position-badge position-badge--${tipus}`}>
                                        {jugador.posicio}
                                    </span>
                                </div>

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

export default Plantilla