import { Navigate } from 'react-router-dom'

function AdminRoute({ children }) {
    let usuari = null

    try {
        usuari = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    } catch {
        usuari = null
    }

    const esGuest = localStorage.getItem('ffe_guest') === 'true'

    const rol = String(usuari?.rol || usuari?.role || '').toLowerCase()
    const esAdmin = rol === 'admin' || rol === 'administrador'

    if (esGuest || !usuari) {
        return <Navigate to="/login" replace />
    }

    if (!esAdmin) {
        return <Navigate to="/dashboard" replace />
    }

    return children
}

export default AdminRoute