function AdminPanel() {
    return (
        <div>
            <h1 className="fw-bold mb-4">Panell d’administració</h1>

            <div className="card shadow-sm">
                <div className="card-body">
                    <h4 className="fw-bold mb-3">Zona admin</h4>
                    <p className="mb-2">Aquí podràs afegir funcionalitats d’administració.</p>
                    <p className="mb-2">Per exemple:</p>

                    <ul className="mb-0">
                        <li>gestionar competicions</li>
                        <li>gestionar equips reals</li>
                        <li>gestionar jugadors</li>
                        <li>crear jornades i partits</li>
                        <li>controlar usuaris</li>
                    </ul>
                </div>
            </div>
        </div>
    )
}

export default AdminPanel