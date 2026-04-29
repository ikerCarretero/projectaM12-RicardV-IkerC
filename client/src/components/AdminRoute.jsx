import { Navigate } from 'react-router-dom'

function AdminRoute({ children }) {
    let user = null

    try {
        user = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    } catch {
        user = null
    }

    const token = localStorage.getItem('ffe_token')

    if (!user || !token) {
        return <Navigate to="/login" replace />
    }

    if (user.rol !== 'admin') {
        return <Navigate to="/dashboard" replace />
    }

    return children
}

export default AdminRoute