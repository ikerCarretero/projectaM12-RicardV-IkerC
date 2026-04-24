import { useState } from "react";
import { crearLliga } from "../services/lligaService";
import { useNavigate } from "react-router-dom";

export default function CrearLliga() {
    const [nom, setNom] = useState("");
    const [tipus, setTipus] = useState("privada");
    const navigate = useNavigate();

    const handleSubmit = async (e) => {
        e.preventDefault();

        await crearLliga({ nom, tipus });

        navigate("/dashboard");
    };

    return (
        <div>
            <h2>Crear lliga</h2>

            <form onSubmit={handleSubmit}>
                <input
                    type="text"
                    placeholder="Nom de la lliga"
                    value={nom}
                    onChange={(e) => setNom(e.target.value)}
                    required
                />

                <select value={tipus} onChange={(e) => setTipus(e.target.value)}>
                    <option value="privada">Privada</option>
                    <option value="publica">Pública</option>
                </select>

                <button type="submit">Crear</button>
            </form>
        </div>
    );
}