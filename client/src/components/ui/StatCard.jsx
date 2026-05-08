function StatCard({ label, value }) {
    return (
        <article className="app-stat-card">
            <span className="app-stat-label">{label}</span>
            <h3 className="app-stat-value">{value}</h3>
        </article>
    )
}

export default StatCard