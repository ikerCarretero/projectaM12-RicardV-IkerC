import { lligaActivaService } from './lligaActivaService'

const PRESSUPOST_DEFAULT = 250000000

const LEGACY_JUGADORS_KEY = 'ffe_jugadors_fitxats'
const LEGACY_PRESSUPOST_KEY = 'ffe_pressupost'

const jugadorsInicialsDemo = [
    // Porters
    {
        id: 101,
        nom: 'David Raya',
        equip: 'Arsenal FC',
        posicio: 'Porter',
        valor_mercat: 40000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 102,
        nom: 'Unai Simón',
        equip: 'Athletic Club',
        posicio: 'Porter',
        valor_mercat: 30000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 103,
        nom: 'Gregor Kobel',
        equip: 'Borussia Dortmund',
        posicio: 'Porter',
        valor_mercat: 40000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 104,
        nom: 'Mike Maignan',
        equip: 'AC Milan',
        posicio: 'Porter',
        valor_mercat: 35000000,
        punts: 0,
        estat: 'Disponible',
    },

    // Defenses
    {
        id: 201,
        nom: 'Jules Koundé',
        equip: 'FC Barcelona',
        posicio: 'Defensa',
        valor_mercat: 55000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 202,
        nom: 'Alessandro Bastoni',
        equip: 'Inter Milan',
        posicio: 'Defensa',
        valor_mercat: 75000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 203,
        nom: 'Nathan Aké',
        equip: 'Manchester City',
        posicio: 'Defensa',
        valor_mercat: 38000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 204,
        nom: 'Alejandro Grimaldo',
        equip: 'Bayer Leverkusen',
        posicio: 'Defensa',
        valor_mercat: 45000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 205,
        nom: 'Pau Cubarsí',
        equip: 'FC Barcelona',
        posicio: 'Defensa',
        valor_mercat: 70000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 206,
        nom: 'Piero Hincapié',
        equip: 'Bayer Leverkusen',
        posicio: 'Defensa',
        valor_mercat: 50000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 207,
        nom: 'Marc Guéhi',
        equip: 'Crystal Palace',
        posicio: 'Defensa',
        valor_mercat: 45000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 208,
        nom: 'Nuno Mendes',
        equip: 'Paris Saint-Germain',
        posicio: 'Defensa',
        valor_mercat: 75000000,
        punts: 0,
        estat: 'Disponible',
    },

    // Migcampistes
    {
        id: 301,
        nom: 'Frenkie de Jong',
        equip: 'FC Barcelona',
        posicio: 'Migcampista',
        valor_mercat: 60000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 302,
        nom: 'Federico Valverde',
        equip: 'Real Madrid',
        posicio: 'Migcampista',
        valor_mercat: 80000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 303,
        nom: 'Bruno Guimarães',
        equip: 'Newcastle United',
        posicio: 'Migcampista',
        valor_mercat: 75000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 304,
        nom: 'Martín Zubimendi',
        equip: 'Real Sociedad',
        posicio: 'Migcampista',
        valor_mercat: 60000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 305,
        nom: 'Vitinha',
        equip: 'Paris Saint-Germain',
        posicio: 'Migcampista',
        valor_mercat: 70000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 306,
        nom: 'Eduardo Camavinga',
        equip: 'Real Madrid',
        posicio: 'Migcampista',
        valor_mercat: 70000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 307,
        nom: 'Martin Ødegaard',
        equip: 'Arsenal FC',
        posicio: 'Migcampista',
        valor_mercat: 80000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 308,
        nom: 'Mikel Merino',
        equip: 'Arsenal FC',
        posicio: 'Migcampista',
        valor_mercat: 50000000,
        punts: 0,
        estat: 'Disponible',
    },

    // Davanters
    {
        id: 401,
        nom: 'Darwin Núñez',
        equip: 'Liverpool FC',
        posicio: 'Davanter',
        valor_mercat: 65000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 402,
        nom: 'Marcus Thuram',
        equip: 'Inter Milan',
        posicio: 'Davanter',
        valor_mercat: 65000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 403,
        nom: 'Ollie Watkins',
        equip: 'Aston Villa',
        posicio: 'Davanter',
        valor_mercat: 65000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 404,
        nom: 'Álvaro Morata',
        equip: 'AC Milan',
        posicio: 'Davanter',
        valor_mercat: 18000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 405,
        nom: 'Serhou Guirassy',
        equip: 'Borussia Dortmund',
        posicio: 'Davanter',
        valor_mercat: 40000000,
        punts: 0,
        estat: 'Disponible',
    },
    {
        id: 406,
        nom: 'Loïs Openda',
        equip: 'RB Leipzig',
        posicio: 'Davanter',
        valor_mercat: 60000000,
        punts: 0,
        estat: 'Disponible',
    },
]

const obtenirLligaActiva = () => {
    return lligaActivaService.obtenir()
}

const obtenirIdLliga = () => {
    const lliga = obtenirLligaActiva()

    if (!lliga) {
        return 'sense_lliga'
    }

    return lliga.id || lliga.codi || lliga.codi_acces || lliga.nom || 'sense_lliga'
}

const obtenirSeedLliga = () => {
    const lliga = obtenirLligaActiva()

    if (!lliga) {
        return 'sense_lliga'
    }

    return `${lliga.id || ''}-${lliga.codi || ''}-${lliga.codi_acces || ''}-${lliga.nom || ''}`
}

const getJugadorsKey = () => {
    return `ffe_jugadors_fitxats_lliga_${obtenirIdLliga()}`
}

const getPressupostKey = () => {
    return `ffe_pressupost_lliga_${obtenirIdLliga()}`
}

const llegirJson = (key, fallback) => {
    try {
        const data = localStorage.getItem(key)
        return data ? JSON.parse(data) : fallback
    } catch {
        return fallback
    }
}

const guardarJson = (key, value) => {
    localStorage.setItem(key, JSON.stringify(value))
}

const normalitzarJugador = (jugador) => {
    return {
        ...jugador,
        id: Number(jugador.id),
        nom: jugador.nom || jugador.name || 'Jugador',
        equip: jugador.equip || jugador.equip_real || jugador.club || 'Sense equip',
        posicio: jugador.posicio || jugador.posicio_base || 'Jugador',
        valor_mercat: Number(
            jugador.valor_mercat ||
            jugador.valorMercat ||
            jugador.valor ||
            jugador.preu ||
            0
        ),
        punts: Number(jugador.punts || 0),
        estat: jugador.estat || 'Fitxat',
    }
}

const hashString = (text) => {
    let hash = 0

    for (let i = 0; i < text.length; i++) {
        hash = (hash << 5) - hash + text.charCodeAt(i)
        hash |= 0
    }

    return Math.abs(hash)
}

const randomSeeded = (seed) => {
    let value = seed % 2147483647

    if (value <= 0) {
        value += 2147483646
    }

    return () => {
        value = (value * 16807) % 2147483647
        return (value - 1) / 2147483646
    }
}

const barrejarPerLliga = (array, salt = '') => {
    const seed = hashString(`${obtenirSeedLliga()}-${salt}-${Date.now()}`)
    const random = randomSeeded(seed)
    const copia = [...array]

    for (let i = copia.length - 1; i > 0; i--) {
        const j = Math.floor(random() * (i + 1))
        const temp = copia[i]
        copia[i] = copia[j]
        copia[j] = temp
    }

    return copia
}

const filtrarPerPosicio = (jugadors, valors) => {
    return jugadors.filter((jugador) => {
        const posicio = String(jugador.posicio || '').toLowerCase()

        return valors.some((valor) => posicio.includes(valor))
    })
}

const generarEquipInicial = () => {
    const candidats = jugadorsInicialsDemo.filter(
        (jugador) => Number(jugador.valor_mercat || 0) <= 80000000
    )

    const porters = barrejarPerLliga(
        filtrarPerPosicio(candidats, ['porter', 'portero', 'pt']),
        'porters'
    )

    const defenses = barrejarPerLliga(
        filtrarPerPosicio(candidats, ['defensa', 'def']),
        'defenses'
    )

    const migcampistes = barrejarPerLliga(
        filtrarPerPosicio(candidats, ['migcampista', 'mig', 'centro']),
        'migcampistes'
    )

    const davanters = barrejarPerLliga(
        filtrarPerPosicio(candidats, ['davanter', 'delantero', 'dav', 'forward']),
        'davanters'
    )

    const equip = [
        ...porters.slice(0, 2),
        ...defenses.slice(0, 4),
        ...migcampistes.slice(0, 4),
        ...davanters.slice(0, 3),
    ]

    return equip.map((jugador) =>
        normalitzarJugador({
            ...jugador,
            estat: 'Fitxat',
            origen: 'Equip inicial',
        })
    )
}

const sincronitzarCompatibilitat = (jugadors, pressupost) => {
    guardarJson(LEGACY_JUGADORS_KEY, jugadors)
    localStorage.setItem(LEGACY_PRESSUPOST_KEY, String(pressupost))
}

const getJugadorsFitxats = () => {
    const jugadors = llegirJson(getJugadorsKey(), [])
    return Array.isArray(jugadors) ? jugadors.map(normalitzarJugador) : []
}

const setJugadorsFitxats = (jugadors) => {
    const jugadorsNormalitzats = Array.isArray(jugadors)
        ? jugadors.map(normalitzarJugador)
        : []

    guardarJson(getJugadorsKey(), jugadorsNormalitzats)
    sincronitzarCompatibilitat(jugadorsNormalitzats, getPressupost())

    return jugadorsNormalitzats
}

const getPressupost = () => {
    const value = localStorage.getItem(getPressupostKey())

    if (value === null || value === undefined) {
        return PRESSUPOST_DEFAULT
    }

    return Number(value || PRESSUPOST_DEFAULT)
}

const setPressupost = (pressupost) => {
    const value = Number(pressupost || 0)

    localStorage.setItem(getPressupostKey(), String(value))
    localStorage.setItem(LEGACY_PRESSUPOST_KEY, String(value))

    return value
}

const assegurarEquipInicial = () => {
    const keyJugadors = getJugadorsKey()
    const keyPressupost = getPressupostKey()

    const jaExisteixEquip = localStorage.getItem(keyJugadors)

    if (!jaExisteixEquip) {
        const equipInicial = generarEquipInicial()

        guardarJson(keyJugadors, equipInicial)

        if (localStorage.getItem(keyPressupost) === null) {
            localStorage.setItem(keyPressupost, String(PRESSUPOST_DEFAULT))
        }

        sincronitzarCompatibilitat(equipInicial, getPressupost())

        return equipInicial
    }

    const jugadors = getJugadorsFitxats()

    if (localStorage.getItem(keyPressupost) === null) {
        localStorage.setItem(keyPressupost, String(PRESSUPOST_DEFAULT))
    }

    sincronitzarCompatibilitat(jugadors, getPressupost())

    return jugadors
}

const esJugadorFitxat = (jugadorId) => {
    return getJugadorsFitxats().some(
        (jugador) => Number(jugador.id) === Number(jugadorId)
    )
}

const fitxarJugador = (jugador) => {
    assegurarEquipInicial()

    const jugadorNormalitzat = normalitzarJugador(jugador)
    const jugadors = getJugadorsFitxats()
    const pressupostActual = getPressupost()

    if (esJugadorFitxat(jugadorNormalitzat.id)) {
        throw new Error('Aquest jugador ja està fitxat en aquesta lliga.')
    }

    if (pressupostActual < jugadorNormalitzat.valor_mercat) {
        throw new Error('No tens prou pressupost per fitxar aquest jugador.')
    }

    const nousJugadors = [
        ...jugadors,
        {
            ...jugadorNormalitzat,
            estat: 'Fitxat',
            origen: 'Mercat',
        },
    ]

    const nouPressupost = pressupostActual - jugadorNormalitzat.valor_mercat

    guardarJson(getJugadorsKey(), nousJugadors)
    setPressupost(nouPressupost)
    sincronitzarCompatibilitat(nousJugadors, nouPressupost)

    return {
        jugadors: nousJugadors,
        pressupost: nouPressupost,
        jugador: jugadorNormalitzat,
    }
}

const vendreJugador = (jugadorId) => {
    assegurarEquipInicial()

    const jugadors = getJugadorsFitxats()
    const jugadorVenut = jugadors.find(
        (jugador) => Number(jugador.id) === Number(jugadorId)
    )

    if (!jugadorVenut) {
        throw new Error('No s’ha trobat el jugador a la plantilla.')
    }

    const nousJugadors = jugadors.filter(
        (jugador) => Number(jugador.id) !== Number(jugadorId)
    )

    const nouPressupost = getPressupost() + Number(jugadorVenut.valor_mercat || 0)

    guardarJson(getJugadorsKey(), nousJugadors)
    setPressupost(nouPressupost)
    sincronitzarCompatibilitat(nousJugadors, nouPressupost)

    return {
        jugadors: nousJugadors,
        pressupost: nouPressupost,
        jugador: jugadorVenut,
    }
}

const reiniciarEquipLligaActual = () => {
    localStorage.removeItem(getJugadorsKey())
    localStorage.removeItem(getPressupostKey())

    return assegurarEquipInicial()
}

export const equipFantasyLocalService = {
    assegurarEquipInicial,
    getJugadorsFitxats,
    setJugadorsFitxats,
    getPressupost,
    setPressupost,
    fitxarJugador,
    vendreJugador,
    esJugadorFitxat,
    reiniciarEquipLligaActual,
}

export default equipFantasyLocalService