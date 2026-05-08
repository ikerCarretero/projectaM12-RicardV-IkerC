function EmptyState({ icon = '⚽', title, text, actions, items = [] }) {
    return (
        <section className="app-empty-state">
            <div className="app-empty-icon">
                {icon}
            </div>

            <h2>{title}</h2>

            {text && <p>{text}</p>}

            {actions && (
                <div className="app-empty-actions">
                    {actions}
                </div>
            )}

            {items.length > 0 && (
                <div className="app-info-grid mt-4 text-start">
                    {items.map((item) => (
                        <div className="app-info-box" key={item.title}>
                            <strong>{item.title}</strong>
                            <span>{item.text}</span>
                        </div>
                    ))}
                </div>
            )}
        </section>
    )
}

export default EmptyState