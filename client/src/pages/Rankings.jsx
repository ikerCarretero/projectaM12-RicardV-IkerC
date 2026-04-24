function Rankings() {
    const ranking = [
        { id: 1, usuari: 'RikyFantasy', punts: 1543, valor: '532.816.567 €' },
        { id: 2, usuari: 'ChampionsMaster', punts: 1498, valor: '520.100.000 €' },
        { id: 3, usuari: 'TopElevenEU', punts: 1462, valor: '510.450.000 €' },
        { id: 4, usuari: 'GolFantasy', punts: 1411, valor: '501.300.000 €' },
        { id: 5, usuari: 'EuroLeagueBoss', punts: 1390, valor: '497.900.000 €' }
    ]

    return (
        <div>
            <h1 className="fw-bold mb-4">Rankings</h1>

            <div className="card shadow-sm">
                <div className="card-header fw-bold">
                    Ranking global: Top 100
                </div>

                <div className="list-group list-group-flush">
                    {ranking.map((item, index) => (
                        <div key={item.id} className="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <div className="fw-bold">
                                    #{index + 1} - {item.usuari}
                                </div>
                                <small className="text-muted">{item.valor}</small>
                            </div>

                            <div className="fw-bold text-primary">
                                {item.punts} pts
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    )
}

export default Rankings