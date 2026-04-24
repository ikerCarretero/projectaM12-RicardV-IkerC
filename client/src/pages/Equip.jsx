import { useEffect, useState } from 'react'
import { api } from '../services/api'

function EquipFantasy() {
    const [equip, setEquip] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarEquip = async () => {
            try {
                setLoading(true)
                setError('')
                const meuEquip = await api.getMeuEquipFantasy()
                setEquip(meuEquip)
            } catch (err) {
                setError(err.message || 'No s’ha pogut carregar l’equip.')
            } finally {
                setLoading(false)
            }
        }

        carregarEquip()
    }, [])

    if (loading) {
        return <div className="container mt-4"><p>Carregant equip...</p></div>
    }

    if (error) {
        return <div className="container mt-4"><div className="alert alert-danger">{error}</div></div>
    }

    if (!equip) {
        return <div className="container mt-4"><div className="alert alert-warning">No s’ha trobat cap equip fantasy per a aquest usuari.</div></div>
    }

    const jugadors = equip.jugadors || []

    const porters = jugadors.filter((j) => j.posicio_base === 'Porter')
    const defenses = jugadors.filter((j) => j.posicio_base === 'Defensa')
    const migcampistes = jugadors.filter((j) => j.posicio_base === 'Migcampista')
    const davanters = jugadors.filter((j) => j.posicio_base === 'Davanter')

    return (
        <div className="container mt-4">
            <div className="card shadow-sm mb-4">
                <div className="card-body">
                    <h2 className="mb-3">{equip.nom_equip}</h2>

                    <div className="row">
                        <div className="col-md-3 mb-2"><strong>Usuari:</strong> {equip.usuari?.nom || equip.usuari?.name || '-'}</div>
                        <div className="col-md-3 mb-2"><strong>Pressupost:</strong> {equip.pressupost}</div>
                        <div className="col-md-3 mb-2"><strong>Jugadors:</strong> {jugadors.length}</div>
                        <div className="col-md-3 mb-2"><strong>Lliga:</strong> {equip.lliga_privada?.nom || '-'}</div>
                    </div>
                </div>
            </div>

            <SeccioJugadors titol="Porters" jugadors={porters} cols="col-md-6 col-lg-4" />
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

export default EquipFantasy