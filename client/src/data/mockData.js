export const competicions = [
    {
        id: 1,
        nom: 'UEFA Champions League',
        temporada: '2025/2026',
        nombreEquips: 36,
        format: 'Amb el format dels 36 equips de Champions League'
    }
]

export const grupsPerPais = [
    {
        pais: 'Inglaterra',
        bandera: '/assets/banderes/inglaterra.png',
        equips: [
            { nom: 'Manchester City', escut: '/assets/escuts/manchester-city.png' },
            { nom: 'Arsenal', escut: '/assets/escuts/arsenal.png' },
            { nom: 'Liverpool', escut: '/assets/escuts/liverpool.png' },
            { nom: 'Chelsea', escut: '/assets/escuts/chelsea.png' },
            { nom: 'Newcastle', escut: '/assets/escuts/newcastle.png' },
            { nom: 'Tottenham', escut: '/assets/escuts/tottenham.png' }

        ]
    },

    {
        pais: 'Espanya',
        bandera: '/assets/banderes/espanya.png',
        equips: [
            { nom: 'Barcelona', escut: '/assets/escuts/barcelona.png' },
            { nom: 'Real Madrid', escut: '/assets/escuts/real-madrid.png' },
            { nom: 'Atlético de Madrid', escut: '/assets/escuts/atletico-madrid.png' },
            { nom: 'Villarreal', escut: '/assets/escuts/villarreal.png' },
            { nom: 'Athletic Club', escut: '/assets/escuts/athletic-club.png' }
        ]
    },

    {
        pais: 'Alemanya',
        bandera: '/assets/banderes/alemanya.png',
        equips: [
            { nom: 'Bayern München', escut: '/assets/escuts/bayer-munchen.png' },
            { nom: 'Bayer Leverkusen', escut: '/assets/escuts/bayer-leverkusenpng' },
            { nom: 'Borussia Dortmund', escut: '/assets/escuts/borussia-dormund.png' },
            { nom: 'Eintracht Frankfurt', escut: '/assets/escuts/eintracht-frankfurt.png' },
        ]
    },

    {
        pais: 'Itàlia',
        bandera: '/assets/banderes/italia.png',
        equips: [
            { nom: 'Napoli', escut: '/assets/escuts/napoli.png' },
            { nom: 'Inter', escut: '/assets/escuts/inter' },
            { nom: 'Atalanta', escut: '/assets/escuts/Atalanta.png' },
            { nom: 'Juventus', escut: '/assets/escuts/juventus.png' },

        ]
    },

    {
        pais: 'França',
        bandera: '/assets/banderes/frança.png',
        equips: [
            { nom: 'Paris Saint-Germain', escut: '/assets/escuts/paris-saint-germain.png' },
            { nom: 'Olympique Marsella', escut: '/assets/escuts/olympique-marsella' },
            { nom: 'Monaco', escut: '/assets/escuts/monaco.png' },
        ]
    },


    { pais: 'Països Baixos', equips: ['PSV', 'Ajax'] },
    { pais: 'Portugal', equips: ['Benfica', 'Sporting CP'] },
    { pais: 'Bèlgica', equips: ['Club Brujas', 'Union Saint-Gilloise'] },
    { pais: 'Turquia', equips: ['Galatasaray'] },
    { pais: 'Txèquia', equips: ['Slavia Praha'] },
    { pais: 'Grècia', equips: ['Olympiacos'] },
    { pais: 'Dinamarca', equips: ['Copenhagen'] },
    { pais: 'Noruega', equips: ['Bodø/Glimt'] },
    { pais: 'Xipre', equips: ['Pafos'] },
    { pais: 'Kazakhstan', equips: ['Kairat Almaty'] },


    {
        pais: 'Azerbaidjan',
        equips: [
            { nom: 'Qarabağ', escut: '/assets/escuts/qarabag.png' },
        ]
    }
]




export const jugadors = [
    { id: 1, nom: 'Lamine Yamal', equip: 'Barcelona', pais: 'Espanya', posicio: 'DAVANTER', valorMercat: 41, puntuacioTotal: 105 },
    { id: 2, nom: 'Raphinha', equip: 'Barcelona', pais: 'Brasil', posicio: 'DAVANTER', valorMercat: 42, puntuacioTotal: 140 },
    { id: 3, nom: 'Pedri', equip: 'Barcelona', pais: 'Espanya', posicio: 'MIGCAMPISTA', valorMercat: 40, puntuacioTotal: 138 },
    { id: 4, nom: 'Courtois', equip: 'Real Madrid', pais: 'Bèlgica', posicio: 'PORTER', valorMercat: 24, puntuacioTotal: 110 },
    { id: 5, nom: 'Bellingham', equip: 'Real Madrid', pais: 'Anglaterra', posicio: 'MIGCAMPISTA', valorMercat: 55, puntuacioTotal: 165 },
    { id: 6, nom: 'Mbappé', equip: 'Real Madrid', pais: 'França', posicio: 'DAVANTER', valorMercat: 60, puntuacioTotal: 175 },
    { id: 7, nom: 'Haaland', equip: 'Manchester City', pais: 'Noruega', posicio: 'DAVANTER', valorMercat: 58, puntuacioTotal: 170 },
    { id: 8, nom: 'Rodri', equip: 'Manchester City', pais: 'Espanya', posicio: 'MIGCAMPISTA', valorMercat: 45, puntuacioTotal: 150 },
    { id: 9, nom: 'Rúben Dias', equip: 'Manchester City', pais: 'Portugal', posicio: 'DEFENSA', valorMercat: 30, puntuacioTotal: 120 },
    { id: 10, nom: 'Salah', equip: 'Liverpool', pais: 'Egipte', posicio: 'DAVANTER', valorMercat: 50, puntuacioTotal: 168 },
    { id: 11, nom: 'Van Dijk', equip: 'Liverpool', pais: 'Països Baixos', posicio: 'DEFENSA', valorMercat: 32, puntuacioTotal: 130 },
    { id: 12, nom: 'Alisson', equip: 'Liverpool', pais: 'Brasil', posicio: 'PORTER', valorMercat: 26, puntuacioTotal: 112 },
    { id: 13, nom: 'Kane', equip: 'Bayern München', pais: 'Anglaterra', posicio: 'DAVANTER', valorMercat: 52, puntuacioTotal: 172 },
    { id: 14, nom: 'Musiala', equip: 'Bayern München', pais: 'Alemanya', posicio: 'MIGCAMPISTA', valorMercat: 47, puntuacioTotal: 158 },
    { id: 15, nom: 'Kimmich', equip: 'Bayern München', pais: 'Alemanya', posicio: 'MIGCAMPISTA', valorMercat: 36, puntuacioTotal: 135 },
    { id: 16, nom: 'Marquinhos', equip: 'Paris Saint-Germain', pais: 'Brasil', posicio: 'DEFENSA', valorMercat: 25, puntuacioTotal: 108 },
    { id: 17, nom: 'Dembélé', equip: 'Paris Saint-Germain', pais: 'França', posicio: 'DAVANTER', valorMercat: 41, puntuacioTotal: 142 },
    { id: 18, nom: 'Vitinha', equip: 'Paris Saint-Germain', pais: 'Portugal', posicio: 'MIGCAMPISTA', valorMercat: 34, puntuacioTotal: 126 }
]

export const partits = [
    { id: 1, jornada: 1, dataHora: '2025-09-16 21:00', local: 'Juventus', visitant: 'Borusia Dortmund', resultat: '4-4', estadi: 'Juventus Stadium' },
    { id: 2, jornada: 1, dataHora: '2025-09-17 21:00', local: 'Bayern München', visitant: 'Chelsea', resultat: '3-1', estadi: 'Allianz Arena' },
    { id: 3, jornada: 1, dataHora: '2025-09-18 21:00', local: 'Newcastle', visitant: 'Barcelona', resultat: '1-2', estadi: 'St James Park' },
    { id: 4, jornada: 2, dataHora: '2025-09-30 18:45', local: 'Kairat Almaty', visitant: 'Real Madrid', resultat: '0-5', estadi: 'Almaty Ortalyk Stadion' },
    { id: 5, jornada: 2, dataHora: '2025-10-01 18:45', local: 'Barcelona', visitant: 'Olympiacos', resultat: '6-1', estadi: 'Estadi Olímpic de Montjuïc' },
    { id: 6, jornada: 2, dataHora: '2025-10-21 21:00', local: 'Bayer Leverkusen', visitant: 'Paris Saint-Germain', resultat: '2-7', estadi: 'BayArena' }
]

export const equipFantasy = {
    nom: 'Riky Fantasy FC',
    usuari: 'Ricard',
    pressupost: 12,
    puntsTotals: 1543,
    esquema: '4-3-3'
}

export const equipFantasyJugadors = [
    { id: 1, nom: 'Courtois', equip: 'Real Madrid', posicio: 'PORTER', valorMercat: 24, punts: 110 },
    { id: 2, nom: 'Rúben Dias', equip: 'Manchester City', posicio: 'DEFENSA', valorMercat: 30, punts: 120 },
    { id: 3, nom: 'Van Dijk', equip: 'Liverpool', posicio: 'DEFENSA', valorMercat: 32, punts: 130 },
    { id: 4, nom: 'Marquinhos', equip: 'Paris Saint-Germain', posicio: 'DEFENSA', valorMercat: 25, punts: 108 },
    { id: 5, nom: 'Koundé', equip: 'Barcelona', posicio: 'DEFENSA', valorMercat: 28, punts: 118 },
    { id: 6, nom: 'Pedri', equip: 'Barcelona', posicio: 'MIGCAMPISTA', valorMercat: 40, punts: 138 },
    { id: 7, nom: 'Bellingham', equip: 'Real Madrid', posicio: 'MIGCAMPISTA', valorMercat: 55, punts: 165 },
    { id: 8, nom: 'Musiala', equip: 'Bayern München', posicio: 'MIGCAMPISTA', valorMercat: 47, punts: 158 },
    { id: 9, nom: 'Lamine Yamal', equip: 'Barcelona', posicio: 'DAVANTER', valorMercat: 41, punts: 105 },
    { id: 10, nom: 'Mbappé', equip: 'Real Madrid', posicio: 'DAVANTER', valorMercat: 60, punts: 175 },
    { id: 11, nom: 'Haaland', equip: 'Manchester City', posicio: 'DAVANTER', valorMercat: 58, punts: 170 }
]

export const alineacioInfo = {
    fitxes: '25/26',
    jornada: 2,
    dataHora: '21/10 21:00h',
    valorEquip: '532.816.567',
    recompensa: '+100.000',
    esquema: '4-3-3'
}

export const alineacioSquad = {
    porter: [
        { id: 1, nom: 'Courtois', equip: 'Real Madrid', escut: '/assets/escuts/real-madrid.png' }
    ],
    defenses: [
        { id: 2, nom: 'Rúben Dias', equip: 'Manchester City', escut: '/assets/escuts/manchester-city.png' },
        { id: 3, nom: 'Van Dijk', equip: 'Liverpool', escut: '/assets/escuts/liverpool.png' },
        { id: 4, nom: 'Marquinhos', equip: 'Paris Saint-Germain', escut: '/assets/escuts/paris-saint-germain.png' },
        { id: 5, nom: 'Koundé', equip: 'Barcelona', escut: '/assets/escuts/barcelona.png' },
        { id: 12, nom: 'Araujo', equip: 'Barcelona', escut: '/assets/escuts/barcelona.png' }
    ],
    migcampistes: [
        { id: 6, nom: 'Pedri', equip: 'Barcelona', escut: '/assets/escuts/barcelona.png' },
        { id: 7, nom: 'Bellingham', equip: 'Real Madrid', escut: '/assets/escuts/real-madrid.png' },
        { id: 8, nom: 'Musiala', equip: 'Bayern München', escut: '/assets/escuts/bayern-munchen.png' },
        { id: 13, nom: 'Kimmich', equip: 'Bayern München', escut: '/assets/escuts/bayern-munchen.png' }
    ],
    davanters: [
        { id: 9, nom: 'Lamine Yamal', equip: 'Barcelona', escut: '/assets/escuts/barcelona.png' },
        { id: 10, nom: 'Mbappé', equip: 'Real Madrid', escut: '/assets/escuts/real-madrid.png' },
        { id: 11, nom: 'Haaland', equip: 'Manchester City', escut: '/assets/escuts/manchester-city.png' }
    ]
}