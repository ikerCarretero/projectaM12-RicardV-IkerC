import { useEffect, useMemo, useState } from 'react'
import { Link, useParams } from 'react-router-dom'
import { api } from '../services/api'

function EquipRealDetail() {
    const { id } = useParams()

    const [equip, setEquip] = useState(null)
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState('')
    const [filtrePosicio, setFiltrePosicio] = useState('')

    useEffect(() => {
        const carregarEquip = async () => {
            try {
                setLoading(true)
                setError('')

                const response = await api.getEquipReal(id)
                const data = response?.data || response

                setEquip(data)
            } catch (err) {
                console.error(err)
                setError('No s’ha pogut carregar l’equip.')
            } finally {
                setLoading(false)
            }
        }

        carregarEquip()
    }, [id])

    const jugadors = equip?.jugadors || []

    const jugadorsFiltrats = useMemo(() => {
        if (!filtrePosicio) return jugadors
        return jugadors.filter((jugador) => normalitzarPosicio(jugador.posicio_base) === filtrePosicio)
    }, [jugadors, filtrePosicio])

    if (loading) {
        return (
            <div className="container mt-4">
                <p>Carregant equip...</p>
            </div>
        )
    }

    if (error) {
        return (
            <div className="container mt-4">
                <div className="alert alert-danger">{error}</div>
            </div>
        )
    }

    if (!equip) {
        return (
            <div className="container mt-4">
                <p>No s’ha trobat l’equip.</p>
            </div>
        )
    }

    return (
        <div className="container mt-4">
            <div className="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-4">
                <div>
                    <h2 className="mb-2">{equip.nom}</h2>
                    <p className="mb-1"><strong>País:</strong> {equip.pais}</p>
                    <p className="mb-1"><strong>Competició:</strong> {equip.competicio?.nom || '-'}</p>
                    <p className="mb-0"><strong>Jugadors:</strong> {jugadors.length}</p>
                </div>

                <div className="d-flex gap-2 align-items-center flex-wrap">
                    <Link to={`/competicions/${equip.competicio_id}`} className="btn btn-outline-secondary">
                        Tornar a competició
                    </Link>

                    <select
                        className="form-select"
                        style={{ width: '180px' }}
                        value={filtrePosicio}
                        onChange={(e) => setFiltrePosicio(e.target.value)}
                    >
                        <option value="">Totes les posicions</option>
                        <option value="PORTER">Porter</option>
                        <option value="DEFENSA">Defensa</option>
                        <option value="MIGCAMPISTA">Migcampista</option>
                        <option value="DAVANTER">Davanter</option>
                    </select>
                </div>
            </div>

            <div className="row">
                {jugadorsFiltrats.map((jugador) => (
                    <div className="col-md-6 col-lg-4 mb-4" key={jugador.id}>
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <h5 className="card-title">{jugador.nom}</h5>
                                <p className="mb-1">
                                    <strong>Posició:</strong> {normalitzarPosicio(jugador.posicio_base)}
                                </p>
                                <p className="mb-1">
                                    <strong>Valor:</strong> {(Number(jugador.valor_mercat || 0) / 1000000).toFixed(1)} M€
                                </p>
                                <p className="mb-0">
                                    <strong>Punts:</strong> {Number(jugador.puntuacio_total || 0)}
                                </p>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    )
}

function normalitzarPosicio(posicio) {
    const valor = (posicio || '').toLowerCase()

    if (valor.includes('porter')) return 'PORTER'
    if (valor.includes('defensa')) return 'DEFENSA'
    if (valor.includes('mig')) return 'MIGCAMPISTA'
    if (valor.includes('davanter')) return 'DAVANTER'

    return posicio?.toUpperCase() || 'DESCONEGUDA'
}

export default EquipRealDetail