const API_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

const PRESSUPOST_INICIAL = 250000000

const getToken = () => localStorage.getItem('ffe_token')

const getUsuari = () => {
    try {
        return JSON.parse(localStorage.getItem('ffe_user') || 'null')
    } catch (error) {
        return null
    }
}

const getLligaActivaId = () => {
    return localStorage.getItem('ffe_lliga_activa_id') || 'demo'
}

const getMercatStorageKey = () => {
    const usuari = getUsuari()
    const usuariKey = usuari?.id || usuari?.email || usuari?.nom || 'usuari_demo'
    const lligaId = getLligaActivaId()

    return `ffe_mercat_${usuariKey}_${lligaId}`
}

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
]

const getEstatLocal = () => {
    const key = getMercatStorageKey()

    try {
        const stored = localStorage.getItem(key)

        if (!stored) {
            return {
                pressupost: PRESSUPOST_INICIAL,
                jugadorsFitxats: [],
            }
        }

        const parsed = JSON.parse(stored)

        return {
            pressupost: parsed.pressupost ?? PRESSUPOST_INICIAL,
            jugadorsFitxats: Array.isArray(parsed.jugadorsFitxats)
                ? parsed.jugadorsFitxats
                : [],
        }
    } catch (error) {
        return {
            pressupost: PRESSUPOST_INICIAL,
            jugadorsFitxats: [],
        }
    }
}

const guardarEstatLocal = (estat) => {
    const key = getMercatStorageKey()
    localStorage.setItem(key, JSON.stringify(estat))
}

const aplicarEstatLocalAlsJugadors = (jugadors) => {
    const estat = getEstatLocal()

    return jugadors.map((jugador) => {
        const estaFitxat = estat.jugadorsFitxats.includes(jugador.id)

        return {
            ...jugador,
            fitxat: estaFitxat,
            estat: estaFitxat ? 'Fitxat' : jugador.estat || 'Disponible',
        }
    })
}

export const mercatService = {
    getPressupostInicial() {
        return PRESSUPOST_INICIAL
    },

    getPressupostActual() {
        return getEstatLocal().pressupost
    },

    getEstatMercatLocal() {
        return getEstatLocal()
    },

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

            const jugadors = Array.isArray(data)
                ? data
                : data.jugadors || data.data || []

            return aplicarEstatLocalAlsJugadors(jugadors)
        } catch (error) {
            console.warn('Mercat en mode demo:', error.message)
            return aplicarEstatLocalAlsJugadors(jugadorsDemo)
        }
    },

    async fitxarJugador(jugador) {
        const estatActual = getEstatLocal()

        if (estatActual.jugadorsFitxats.includes(jugador.id)) {
            return {
                ok: true,
                mode: 'local',
                message: 'Jugador ja fitxat',
            }
        }

        const valorJugador = Number(jugador.valor_mercat || 0)

        if (valorJugador > estatActual.pressupost) {
            throw new Error('No tens pressupost suficient')
        }

        try {
            await fetch(`${API_URL}/mercat/${jugador.id}/fitxar`, {
                method: 'POST',
                headers: headers(),
            })
        } catch (error) {
            console.warn('Fitxatge guardat només en mode demo:', error.message)
        }

        const nouEstat = {
            pressupost: estatActual.pressupost - valorJugador,
            jugadorsFitxats: [...estatActual.jugadorsFitxats, jugador.id],
        }

        guardarEstatLocal(nouEstat)

        return {
            ok: true,
            mode: 'local',
            pressupost: nouEstat.pressupost,
            jugadorsFitxats: nouEstat.jugadorsFitxats,
        }
    },

    async getJugadorsFitxats() {
        const jugadors = await this.getJugadorsMercat()
        return jugadors.filter((jugador) => jugador.fitxat)
    },

    resetMercatDemo() {
        guardarEstatLocal({
            pressupost: PRESSUPOST_INICIAL,
            jugadorsFitxats: [],
        })
    },
}