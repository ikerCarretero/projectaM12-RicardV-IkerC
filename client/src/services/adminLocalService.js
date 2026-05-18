import { lligaActivaService } from './lligaActivaService'
import { equipFantasyLocalService } from './equipFantasyLocalService'

const getLligaId = () => lligaActivaService.obtenirId() || 'demo'

const getKey = (name) => `ffe_admin_${name}_lliga_${getLligaId()}`

const getCurrentUser = () => {
    try {
        return JSON.parse(localStorage.getItem('ffe_user') || 'null')
    } catch {
        return null
    }
}

const getCurrentUserId = () => {
    const user = getCurrentUser()

    return String(user?.id || user?.email || user?.nom || 'current-user')
}

const defaultJugadors = [
    {
        id: 1,
        nom: 'Lamine Yamal',
        equip: 'FC Barcelona',
        posicio: 'Davanter',
        valor_mercat: 90000000,
        punts: 0,
        foto: '',
    },
    {
        id: 2,
        nom: 'Jude Bellingham',
        equip: 'Real Madrid',
        posicio: 'Migcampista',
        valor_mercat: 120000000,
        punts: 0,
        foto: '',
    },
    {
        id: 3,
        nom: 'Kylian Mbappé',
        equip: 'Real Madrid',
        posicio: 'Davanter',
        valor_mercat: 160000000,
        punts: 0,
        foto: '',
    },
]

const normalitzarJugador = (jugador) => ({
    id: jugador.id,
    nom: jugador.nom || 'Jugador',
    equip: jugador.equip || jugador.equip_real?.nom || 'Sense equip',
    posicio: jugador.posicio || 'Jugador',
    valor_mercat: Number(jugador.valor_mercat || 0),
    punts: Number(jugador.punts || 0),
    foto: jugador.foto || jugador.imatge || '',
    estat: jugador.estat || 'Disponible',
    origen: jugador.origen || 'Admin',
})

export const adminLocalService = {
    getJugadors() {
        const key = getKey('jugadors')

        try {
            const guardats = localStorage.getItem(key)

            if (guardats) {
                return JSON.parse(guardats)
            }
        } catch {
            return []
        }

        const jugadorsEquip = equipFantasyLocalService.getJugadorsFitxats()

        const inicials =
            jugadorsEquip.length > 0
                ? jugadorsEquip.map(normalitzarJugador)
                : defaultJugadors.map(normalitzarJugador)

        localStorage.setItem(key, JSON.stringify(inicials))

        return inicials
    },

    setJugadors(jugadors) {
        localStorage.setItem(getKey('jugadors'), JSON.stringify(jugadors || []))
    },

    actualitzarJugador(jugadorActualitzat) {
        const jugadors = this.getJugadors()

        const nousJugadors = jugadors.map((jugador) =>
            String(jugador.id) === String(jugadorActualitzat.id)
                ? {
                    ...jugador,
                    ...jugadorActualitzat,
                    valor_mercat: Number(jugadorActualitzat.valor_mercat || 0),
                    punts: Number(jugadorActualitzat.punts || 0),
                }
                : jugador
        )

        this.setJugadors(nousJugadors)

        const jugadorsPlantilla = equipFantasyLocalService.getJugadorsFitxats()

        const plantillaActualitzada = jugadorsPlantilla.map((jugador) =>
            String(jugador.id) === String(jugadorActualitzat.id)
                ? {
                    ...jugador,
                    nom: jugadorActualitzat.nom,
                    foto: jugadorActualitzat.foto,
                    imatge: jugadorActualitzat.foto,
                    valor_mercat: Number(jugadorActualitzat.valor_mercat || 0),
                    punts: Number(jugadorActualitzat.punts || 0),
                }
                : jugador
        )

        equipFantasyLocalService.setJugadorsFitxats(plantillaActualitzada)

        return nousJugadors
    },

    getJornades() {
        const key = getKey('jornades')

        try {
            const guardades = localStorage.getItem(key)

            if (guardades) {
                return JSON.parse(guardades)
            }
        } catch {
            return []
        }

        const inicials = [
            {
                id: 1,
                nom: 'Jornada 1',
                estat: 'oberta',
                data: '2026-05-14',
            },
        ]

        localStorage.setItem(key, JSON.stringify(inicials))

        return inicials
    },

    setJornades(jornades) {
        localStorage.setItem(getKey('jornades'), JSON.stringify(jornades || []))
    },

    crearJornada(nom) {
        const jornades = this.getJornades()

        const novaJornada = {
            id: Date.now(),
            nom: nom || `Jornada ${jornades.length + 1}`,
            estat: 'oberta',
            data: new Date().toISOString().slice(0, 10),
        }

        const novesJornades = [...jornades, novaJornada]

        this.setJornades(novesJornades)

        return novesJornades
    },

    canviarEstatJornada(jornadaId) {
        const jornades = this.getJornades()

        const novesJornades = jornades.map((jornada) =>
            String(jornada.id) === String(jornadaId)
                ? {
                    ...jornada,
                    estat: jornada.estat === 'oberta' ? 'tancada' : 'oberta',
                }
                : jornada
        )

        this.setJornades(novesJornades)

        return novesJornades
    },

    getUsuaris() {
        const key = getKey('usuaris')
        const currentUser = getCurrentUser()

        try {
            const guardats = localStorage.getItem(key)

            if (guardats) {
                return JSON.parse(guardats)
            }
        } catch {
            return []
        }

        const inicials = [
            {
                id: getCurrentUserId(),
                nom: currentUser?.nom || 'Admin',
                email: currentUser?.email || 'admin@fantasy.com',
                rol: currentUser?.rol || 'admin',
                estat: 'actiu',
                premium: true,
                diners_extra: 0,
            },
            {
                id: 'demo-iker',
                nom: 'Iker',
                email: 'iker@fantasy.com',
                rol: 'usuari',
                estat: 'actiu',
                premium: false,
                diners_extra: 0,
            },
            {
                id: 'demo-laia',
                nom: 'Laia',
                email: 'laia@fantasy.com',
                rol: 'usuari',
                estat: 'actiu',
                premium: false,
                diners_extra: 0,
            },
        ]

        localStorage.setItem(key, JSON.stringify(inicials))

        return inicials
    },

    setUsuaris(usuaris) {
        localStorage.setItem(getKey('usuaris'), JSON.stringify(usuaris || []))
    },

    canviarEstatUsuari(usuariId) {
        const usuaris = this.getUsuaris()

        const nousUsuaris = usuaris.map((usuari) =>
            String(usuari.id) === String(usuariId)
                ? {
                    ...usuari,
                    estat: usuari.estat === 'sancionat' ? 'actiu' : 'sancionat',
                }
                : usuari
        )

        this.setUsuaris(nousUsuaris)

        return nousUsuaris
    },

    canviarPremium(usuariId) {
        const usuaris = this.getUsuaris()

        const nousUsuaris = usuaris.map((usuari) =>
            String(usuari.id) === String(usuariId)
                ? {
                    ...usuari,
                    premium: !usuari.premium,
                }
                : usuari
        )

        this.setUsuaris(nousUsuaris)

        return nousUsuaris
    },

    aplicarDiners(usuariId, quantitat) {
        const usuaris = this.getUsuaris()
        const quantitatNumerica = Number(quantitat || 0)

        const nousUsuaris = usuaris.map((usuari) =>
            String(usuari.id) === String(usuariId)
                ? {
                    ...usuari,
                    diners_extra: Number(usuari.diners_extra || 0) + quantitatNumerica,
                }
                : usuari
        )

        this.setUsuaris(nousUsuaris)

        if (String(usuariId) === getCurrentUserId()) {
            const pressupostActual = equipFantasyLocalService.getPressupost()
            equipFantasyLocalService.setPressupost(pressupostActual + quantitatNumerica)
        }

        return nousUsuaris
    },
}

export default adminLocalService