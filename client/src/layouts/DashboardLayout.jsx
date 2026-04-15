import { Outlet } from 'react-router-dom'
import Sidebar from '../components/Sidebar'
import './DashboardLayout.css'

function DashboardLayout() {
    return (
        <div className="dashboard-layout">
            <Sidebar />

            <div className="dashboard-main">
                <div className="dashboard-content">
                    <Outlet />
                </div>
            </div>
        </div>
    )
}

export default DashboardLayout