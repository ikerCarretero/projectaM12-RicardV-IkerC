import { Outlet } from 'react-router-dom'
import Sidebar from '../components/Sidebar.jsx'
import './DashboardLayout.css'

function DashboardLayout() {
    return (
        <div className="dashboard-layout">
            <Sidebar />

            <main className="dashboard-content">
                <Outlet />
            </main>
        </div>
    )
}

export default DashboardLayout