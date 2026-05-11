const API_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

const mockJugadors = [
    {
        id: 1,
        nom: 'Lamine Yamal',
        equip: 'FC Barcelona',
        posicio: 'DAV',
        valor_mercat: 180000000,
        puntuacio_total: 0,
        puntuacio_jornada: 0,
    },
    {
        id: 2,
        nom: 'Jude Bellingham',
        equip: 'Real Madrid',
        posicio: 'MIG',
        valor_mercat: 180000000,
        puntuacio_total: 0,
        puntuacio_jornada: 0,
    },
    {
        id: 3,
        nom: 'Kylian Mbappé',
        equip: 'Real Madrid',
        posicio: 'DAV',
        valor_mercat: 170000000,
        puntuacio_total: 0,
        puntuacio_jornada: 0,
    },
    {
        id: 4,
        nom: 'Pedri',
        equip: 'FC Barcelona',
        posicio: 'MIG',
        valor_mercat: 80000000,
        puntuacio_total: 0,
        puntuacio_jornada: 0,
    },
    {
        id: 5,
        nom: 'Thibaut Courtois',
        equip: 'Real Madrid',
        posicio: 'PT',
        valor_mercat: 25000000,
        puntuacio_total: 0,
        puntuacio_jornada: 0,
    },
]

const getToken = () => {
    return localStorage.getItem('ffe_token') || localStorage.getItem('token')
}

const getHeaders = () => {
    const headers = {
        Accept: 'application/json',
        'Content-Type': 'application/json',
    }

    const token = getToken()

    if (token) {
        headers.Authorization = `Bearer ${token}`
    }

    return headers
}

const request = async (endpoint, options = {}) => {
    const response = await fetch(`${API_URL}${endpoint}`, {
        ...options,
        headers: {
            ...getHeaders(),
            ...(options.headers || {}),
        },
    })

    if (!response.ok) {
        throw new Error('Error en la petició al backend')
    }

    return response.json()
}

const normalizeJugador = (jugador) => {
    const nomComplet = `${jugador.nom || ''} ${jugador.cognoms || ''}`.trim()

    return {
        id: jugador.id,
        nom:
            jugador.nom_complet ||
            jugador.name ||
            jugador.nom ||
            nomComplet ||
            'Jugador sense nom',

        equip:
            jugador.equip_real?.nom ||
            jugador.equipReal?.nom ||
            jugador.equip?.nom ||
            jugador.equip_nom ||
            jugador.equip ||
            'Sense equip',

        posicio:
            jugador.posicio ||
            jugador.position ||
            jugador.posicion ||
            'N/D',

        valor_mercat:
            jugador.valor_mercat ??
            jugador.valorMercat ??
            jugador.valor ??
            0,

        puntuacio_total:
            jugador.puntuacio_total ??
            jugador.puntuacioTotal ??
            jugador.punts_totals ??
            jugador.puntsTotals ??
            0,

        puntuacio_jornada:
            jugador.puntuacio_jornada ??
            jugador.puntuacioJornada ??
            jugador.punts_jornada ??
            jugador.puntsJornada ??
            0,
    }
}

export const puntuacioJugadorService = {
    async getJugadors() {
        try {
            const data = await request('/jugadors')

            const jugadors = Array.isArray(data)
                ? data
                : data.data || data.jugadors || []

            return {
                data: jugadors.map(normalizeJugador),
                modeDemo: false,
            }
        } catch (error) {
            console.warn('Backend de jugadors no disponible. Usant dades demo.')
            return {
                data: mockJugadors,
                modeDemo: true,
            }
        }
    },

    async updatePuntuacio(jugadorId, payload) {
        try {
            const data = await request(`/jugadors/${jugadorId}/puntuacio`, {
                method: 'PATCH',
                body: JSON.stringify(payload),
            })

            return normalizeJugador(data.jugador || data)
        } catch (error) {
            console.warn('Endpoint de puntuació no disponible. Canvi aplicat només al frontend.')
            return normalizeJugador({
                id: jugadorId,
                ...payload,
            })
        }
    },
}