const fs = require("fs/promises");
const path = require("path");

const equip = process.argv[2];
const fitxerJson = process.argv[3];

if (!equip || !fitxerJson) {
    console.log("ús: node descarregar_jugadors_equip.cjs nom-equip fitxer.json");
    console.log("exemple: node descarregar_jugadors_equip.cjs liverpool jugadors_uefa_liverpool.json");
    process.exit(1);
}

const rutaJson = path.join(__dirname, fitxerJson);
const jugadors = require(rutaJson);

const carpetaDestino = path.join(__dirname, "public", "images", "jugadors", equip);

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

    console.log(`Descàrrega finalitzada per a: ${equip}`);
}

main();
