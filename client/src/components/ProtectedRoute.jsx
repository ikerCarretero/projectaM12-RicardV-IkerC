import { Navigate } from 'react-router-dom'

function ProtectedRoute({ children, allowGuest = false }) {
    let user = null

    try {
        user = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    } catch {
        user = null
    }

    const token = localStorage.getItem('ffe_token')
    const isGuest = localStorage.getItem('ffe_guest') === 'true'

    if (!user && !token && !isGuest) {
        return <Navigate to="/login" replace />
    }

    if (!allowGuest && isGuest) {
        return <Navigate to="/dashboard" replace />
    }

    return children
}

export default ProtectedRoute