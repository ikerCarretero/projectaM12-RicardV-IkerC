import { Routes, Route } from 'react-router-dom'

import PublicLayout from './layouts/PublicLayout.jsx'
import DashboardLayout from './layouts/DashboardLayout.jsx'
import ProtectedRoute from './components/ProtectedRoute.jsx'

import DashboardHome from './pages/DashboardHome.jsx'
import Competicions from './pages/Competicions.jsx'
import CompeticioDetail from './pages/CompeticioDetail.jsx'
import EquipRealDetail from './pages/EquipRealDetail.jsx'
import Equip from './pages/Equip.jsx'
import Plantilla from './pages/Plantilla.jsx'
import Alineacio from './pages/Alineacio.jsx'
import Rankings from './pages/Rankings.jsx'
import Configuracio from './pages/Configuracio.jsx'
import Welcome from './pages/Welcome.jsx'
import Login from './pages/Login.jsx'
import Register from './pages/Register.jsx'

function App() {
  return (
    <Routes>
      <Route element={<PublicLayout />}>
        <Route path="/" element={<Welcome />} />
        <Route path="/home" element={<Welcome />} />
        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Register />} />
      </Route>

      <Route
        element={
          <ProtectedRoute allowGuest={true}>
            <DashboardLayout />
          </ProtectedRoute>
        }
      >
        <Route path="/dashboard" element={<DashboardHome />} />
        <Route path="/competicions" element={<Competicions />} />
        <Route path="/competicions/:id" element={<CompeticioDetail />} />
        <Route path="/equips-reals/:id" element={<EquipRealDetail />} />
        <Route path="/rankings" element={<Rankings />} />
      </Route>

      <Route
        element={
          <ProtectedRoute allowGuest={false}>
            <DashboardLayout />
          </ProtectedRoute>
        }
      >
        <Route path="/equip" element={<Equip />} />
        <Route path="/plantilla" element={<Plantilla />} />
        <Route path="/alineacio" element={<Alineacio />} />
        <Route path="/configuracio" element={<Configuracio />} />
      </Route>
    </Routes>
  )
}

export default App