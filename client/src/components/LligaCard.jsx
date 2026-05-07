export default function LligaCard({ lliga }) {
    return (
        <div style={{
            border: "1px solid #ccc",
            padding: "10px",
            marginBottom: "10px",
            borderRadius: "8px"
        }}>
            <h3>{lliga.nom}</h3>
            <p>Tipus: {lliga.tipus}</p>
            <button>Entrar</button>
        </div>
    );
}