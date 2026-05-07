import { useEffect, useState } from 'react'
import { api } from '../services/api'

function DashboardHome() {
    const [resum, setResum] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')

    useEffect(() => {
        const carregarDashboard = async () => {
            try {
                setLoading(true)
                setError('')

                const user = await api.getMe()
                const equips = await api.getEquipsFantasy()
                const partits = await api.getPartits()

                const llistaEquips = Array.isArray(equips) ? equips : []
                const llistaPartits = Array.isArray(partits) ? partits : []

                const meuEquip =
                    llistaEquips.find((equip) => equip.usuari_id === user?.id) ||
                    llistaEquips.find((equip) => equip.usuari?.id === user?.id) ||
                    null

                setResum({
                    user,
                    equip: meuEquip,
                    partits: llistaPartits,
                    alineacio: null
                })
            } catch (err) {
                console.error(err)
                setError(err.message || 'No s’ha pogut carregar el dashboard.')
            } finally {
                setLoading(false)
            }
        }

        carregarDashboard()
    }, [])

    if (loading) {
        return <p>Carregant dashboard...</p>
    }

    if (error) {
        return <div className="alert alert-danger">{error}</div>
    }

    const equip = resum?.equip
    const alineacio = resum?.alineacio
    const jugadors = equip?.jugadors || []

    return (
        <div>
            <h1 className="fw-bold mb-4">Dashboard</h1>

            <div className="row mb-4">
                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Punts totals</h6>
                            <h3>{equip?.punts_totals ?? 0}</h3>
                        </div>
                    </div>
                </div>

                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Pressupost</h6>
                            <h3>{equip?.pressupost ?? 0} €</h3>
                        </div>
                    </div>
                </div>

                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Jugadors</h6>
                            <h3>{jugadors.length}</h3>
                        </div>
                    </div>
                </div>

                <div className="col-md-6 col-lg-3 mb-3">
                    <div className="card shadow-sm h-100">
                        <div className="card-body">
                            <h6 className="text-muted">Partits</h6>
                            <h3>{resum?.partits?.length ?? 0}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div className="card shadow-sm">
                <div className="card-body">
                    <h4 className="fw-bold mb-3">Resum ràpid</h4>
                    <p className="mb-2">
                        <strong>Equip:</strong> {equip?.nom_equip || 'Sense equip fantasy'}
                    </p>
                    <p className="mb-2">
                        <strong>Usuari:</strong> {resum?.user?.nom || resum?.user?.name || '-'}
                    </p>
                    <p className="mb-2">
                        <strong>Esquema actual:</strong> {alineacio?.esquema || 'Sense alineació'}
                    </p>
                    <p className="mb-0">
                        Dashboard connectat a backend.
                    </p>
                </div>
            </div>
        </div>
    )
}

export default DashboardHome