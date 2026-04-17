import { Navigate } from 'react-router-dom'

function ProtectedRoute({ children, allowGuest = false }) {
    const user = JSON.parse(localStorage.getItem('ffe_user') || 'null')
    const isGuest = localStorage.getItem('ffe_guest') === 'true'

    if (!user && !isGuest) {
        return <Navigate to="/" replace />
    }

    if (!allowGuest && isGuest) {
        return <Navigate to="/dashboard" replace />
    }

    return children
}

export default ProtectedRoute