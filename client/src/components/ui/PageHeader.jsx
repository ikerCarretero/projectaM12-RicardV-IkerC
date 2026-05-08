function PageHeader({ kicker, title, subtitle, actions }) {
    return (
        <section className="app-page-header">
            <div>
                {kicker && <p className="app-page-kicker">{kicker}</p>}

                <h1 className="app-page-title">{title}</h1>

                {subtitle && (
                    <p className="app-page-subtitle">
                        {subtitle}
                    </p>
                )}
            </div>

            {actions && (
                <div className="app-page-actions">
                    {actions}
                </div>
            )}
        </section>
    )
}

export default PageHeader