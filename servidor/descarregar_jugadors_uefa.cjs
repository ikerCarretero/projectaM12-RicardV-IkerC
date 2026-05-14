const fs = require("fs/promises");
const path = require("path");

const jugadors = require("./jugadors_uefa.json");

const carpetaDestino = path.join(__dirname, "public", "images", "jugadors");

async function descarregarImatge(jugador) {
    try {
        const resposta = await fetch(jugador.url, {
            headers: {
                "user-agent": "Mozilla/5.0",
                "referer": "https://es.uefa.com/"
            }
        });

        if (!resposta.ok) {
            console.log(`ERROR ${resposta.status}: ${jugador.nom} -> ${jugador.url}`);
            return;
        }

        const buffer = Buffer.from(await resposta.arrayBuffer());
        const rutaFinal = path.join(carpetaDestino, jugador.fitxer);

        await fs.writeFile(rutaFinal, buffer);

        console.log(`OK: ${jugador.fitxer}`);
    } catch (error) {
        console.log(`ERROR descarregant ${jugador.nom}: ${error.message}`);
    }
}

async function main() {
    await fs.mkdir(carpetaDestino, { recursive: true });

    for (const jugador of jugadors) {
        await descarregarImatge(jugador);
    }

    console.log("Descàrrega finalitzada.");
}

main();
