const API_URL = "http://localhost:8000/api";

export const getLligues = async () => {
    const res = await fetch(`${API_URL}/lligues`);
    return res.json();
};

export const crearLliga = async (data) => {
    const res = await fetch(`${API_URL}/lligues`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    });
    return res.json();
};