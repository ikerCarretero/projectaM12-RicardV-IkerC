import { competicions, grupsPerPais } from '../data/mockData'

function CompeticioDetail() {
    const competicio = competicions[0]

    return (
        <div className="container mt-4">
            <div className="mb-4">
                <h2>{competicio.nom}</h2>
                <p className="mb-1"><strong>Temporada:</strong> {competicio.temporada}</p>
                <p className="mb-0"><strong>Format:</strong> {competicio.format}</p>
            </div>

            <h3 className="mb-3">Equips participants</h3>

            <div className="row">
                {grupsPerPais.map((grup) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={grup.pais}>
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <h5 className="card-title d-flex align-items-center gap-2">
                                    <img
                                        src={grup.bandera}
                                        alt={`Bandera de ${grup.pais}`}
                                        width="24"
                                        height="18"
                                        style={{ objectFit: 'cover', borderRadius: '3px' }}
                                        onError={(e) => {
                                            e.currentTarget.src = '/assets/banderes/placeholder.png'
                                        }}
                                    />
                                    <span>{grup.pais}</span>
                                </h5>

                                <ul className="mb-0 list-unstyled">
                                    {grup.equips.map((equip) => (
                                        <li
                                            key={equip.nom}
                                            className="d-flex align-items-center gap-2 mb-2"
                                        >
                                            <img
                                                src={equip.escut}
                                                alt={`Escut de ${equip.nom}`}
                                                width="22"
                                                height="22"
                                                style={{ objectFit: 'contain' }}
                                                onError={(e) => {
                                                    e.currentTarget.src = '/assets/escuts/placeholder.png'
                                                }}
                                            />
                                            <span>{equip.nom}</span>
                                        </li>
                                    ))}
                                </ul>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default CompeticioDetail