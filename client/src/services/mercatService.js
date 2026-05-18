const API_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

const getToken = () => localStorage.getItem('ffe_token')

const headers = () => {
    const token = getToken()

    return {
        Accept: 'application/json',
        'Content-Type': 'application/json',
        ...(token ? { Authorization: `Bearer ${token}` } : {}),
    }
}

const jugadorsDemo = [
    {
        id: 1,
        nom: 'Lamine Yamal',
        equip: 'FC Barcelona',
        posicio: 'Davanter',
        valor_mercat: 90000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 2,
        nom: 'Jude Bellingham',
        equip: 'Real Madrid',
        posicio: 'Migcampista',
        valor_mercat: 120000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 3,
        nom: 'Kylian Mbappé',
        equip: 'Real Madrid',
        posicio: 'Davanter',
        valor_mercat: 160000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 4,
        nom: 'Pedri',
        equip: 'FC Barcelona',
        posicio: 'Migcampista',
        valor_mercat: 80000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 5,
        nom: 'Virgil van Dijk',
        equip: 'Liverpool FC',
        posicio: 'Defensa',
        valor_mercat: 35000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 6,
        nom: 'Alisson Becker',
        equip: 'Liverpool FC',
        posicio: 'Porter',
        valor_mercat: 28000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 7,
        nom: 'Bukayo Saka',
        equip: 'Arsenal FC',
        posicio: 'Davanter',
        valor_mercat: 140000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 8,
        nom: 'Florian Wirtz',
        equip: 'Bayer Leverkusen',
        posicio: 'Migcampista',
        valor_mercat: 130000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 9,
        nom: 'Erling Haaland',
        equip: 'Manchester City',
        posicio: 'Davanter',
        valor_mercat: 180000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 10,
        nom: 'Rodri',
        equip: 'Manchester City',
        posicio: 'Migcampista',
        valor_mercat: 110000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 11,
        nom: 'Rúben Dias',
        equip: 'Manchester City',
        posicio: 'Defensa',
        valor_mercat: 80000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 12,
        nom: 'Thibaut Courtois',
        equip: 'Real Madrid',
        posicio: 'Porter',
        valor_mercat: 25000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 13,
        nom: 'Nicolò Barella',
        equip: 'Inter Milan',
        posicio: 'Migcampista',
        valor_mercat: 80000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 14,
        nom: 'Achraf Hakimi',
        equip: 'Paris Saint-Germain',
        posicio: 'Defensa',
        valor_mercat: 65000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 15,
        nom: 'Ousmane Dembélé',
        equip: 'Paris Saint-Germain',
        posicio: 'Davanter',
        valor_mercat: 75000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 16,
        nom: 'Rafael Leão',
        equip: 'AC Milan',
        posicio: 'Davanter',
        valor_mercat: 75000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 17,
        nom: 'Joshua Kimmich',
        equip: 'Bayern München',
        posicio: 'Migcampista',
        valor_mercat: 50000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 18,
        nom: 'Manuel Neuer',
        equip: 'Bayern München',
        posicio: 'Porter',
        valor_mercat: 4000000,
        punts: 0,
        estat: 'Disponible',
    },
]

const normalitzarJugadors = (data) => {
    let jugadors = []

    if (Array.isArray(data)) {
        jugadors = data
    } else if (Array.isArray(data?.jugadors)) {
        jugadors = data.jugadors
    } else if (Array.isArray(data?.data)) {
        jugadors = data.data
    }

    return jugadors.map((jugador) => ({
        id: jugador.id,
        nom: jugador.nom || jugador.name || 'Jugador',
        equip:
            jugador.equip ||
            jugador.equip_real?.nom ||
            jugador.equipReal?.nom ||
            'Sense equip',
        posicio:
            jugador.posicio ||
            jugador.posicio_base ||
            jugador.position ||
            'Jugador',
        valor_mercat: Number(
            jugador.valor_mercat ||
            jugador.valorMercat ||
            jugador.valor ||
            0
        ),
        punts: Number(jugador.punts || jugador.puntuacio_total || 0),
        estat: jugador.estat || 'Disponible',
        foto: jugador.foto || jugador.imatge || '',
    }))
}

export const mercatService = {
    async getJugadorsMercat() {
        try {
            const response = await fetch(`${API_URL}/mercat`, {
                method: 'GET',
                headers: headers(),
            })

            if (!response.ok) {
                throw new Error('No s’ha pogut carregar el mercat')
            }

            const data = await response.json()
            const jugadors = normalitzarJugadors(data)

            if (jugadors.length === 0) {
                console.warn('Mercat buit al backend. Es fa servir mode demo.')
                return jugadorsDemo
            }

            return jugadors
        } catch (error) {
            console.warn('Mercat en mode demo:', error.message)
            return jugadorsDemo
        }
    },

    async fitxarJugador(jugadorId) {
        try {
            const response = await fetch(`${API_URL}/mercat/${jugadorId}/fitxar`, {
                method: 'POST',
                headers: headers(),
            })

            if (!response.ok) {
                throw new Error('No s’ha pogut fitxar el jugador')
            }

            return await response.json()
        } catch (error) {
            console.warn('Fitxatge en mode local/demo:', error.message)

            return {
                success: true,
                message: 'Fitxatge gestionat en mode local.',
            }
        }
    },
}

export default mercatService