import { useEffect, useState } from 'react'
import { api } from '../services/api'

function Plantilla() {
    const [equip, setEquip] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarPlantilla = async () => {
            try {
                setLoading(true)
                setError('')
                const meuEquip = await api.getMeuEquipFantasy()
                setEquip(meuEquip)
            } catch (err) {
                setError(err.message || 'No s’ha pogut carregar la plantilla.')
            } finally {
                setLoading(false)
            }
        }

        carregarPlantilla()
    }, [])

    if (loading) {
        return <p>Carregant plantilla...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    if (!equip) {
        return <div className="alert alert-warning">No s’ha trobat cap equip fantasy.</div>
    }

    const jugadors = equip.jugadors || []

    const porters = jugadors.filter((j) => j.posicio_base === 'Porter')
    const defenses = jugadors.filter((j) => j.posicio_base === 'Defensa')
    const migcampistes = jugadors.filter((j) => j.posicio_base === 'Migcampista')
    const davanters = jugadors.filter((j) => j.posicio_base === 'Davanter')

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
                            {equip.nom_equip}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Usuari:</strong><br />
                            {equip.usuari?.nom || equip.usuari?.name || '-'}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Pressupost:</strong><br />
                            {equip.pressupost}
                        </div>
                        <div className="col-md-3 mb-2">
                            <strong>Total jugadors:</strong><br />
                            {jugadors.length}
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
                                        {jugador.posicio_base}
                                    </span>
                                </div>

                                <p className="mb-1"><strong>Equip:</strong> {jugador.equip_real?.nom || 'Sense equip'}</p>
                                <p className="mb-1"><strong>Valor:</strong> {jugador.valor_mercat}</p>
                                <p className="mb-0"><strong>Punts:</strong> {jugador.puntuacio_total}</p>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

export default Plantilla