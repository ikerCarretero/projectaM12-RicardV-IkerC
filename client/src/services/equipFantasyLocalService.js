import { lligaActivaService } from './lligaActivaService'

const PRESSUPOST_INICIAL = 250000000

const getLligaId = () => {
    return lligaActivaService.obtenirId() || 'demo'
}

const getJugadorsKey = () => {
    return `ffe_jugadors_fitxats_lliga_${getLligaId()}`
}

const getPressupostKey = () => {
    return `ffe_pressupost_lliga_${getLligaId()}`
}

const normalitzarJugador = (jugador) => {
    return {
        id: jugador.id,
        nom: jugador.nom,
        equip: jugador.equip || jugador.equip_real?.nom || 'Sense equip',
        posicio: jugador.posicio,
        valor_mercat: Number(jugador.valor_mercat || jugador.valorMercat || 0),
        punts: Number(jugador.punts || jugador.puntuacio_total || 0),
        estat: jugador.estat || 'Fitxat',
    }
}

export const equipFantasyLocalService = {
    getPressupost() {
        const pressupostGuardat = localStorage.getItem(getPressupostKey())

        if (pressupostGuardat === null) {
            localStorage.setItem(getPressupostKey(), String(PRESSUPOST_INICIAL))
            return PRESSUPOST_INICIAL
        }

        return Number(pressupostGuardat)
    },

    setPressupost(valor) {
        localStorage.setItem(getPressupostKey(), String(Number(valor || 0)))
    },

    getJugadorsFitxats() {
        try {
            const data = localStorage.getItem(getJugadorsKey())
            return data ? JSON.parse(data) : []
        } catch (error) {
            return []
        }
    },

    setJugadorsFitxats(jugadors) {
        localStorage.setItem(getJugadorsKey(), JSON.stringify(jugadors || []))
    },

    jugadorEstaFitxat(jugadorId) {
        return this.getJugadorsFitxats().some(
            (jugador) => Number(jugador.id) === Number(jugadorId)
        )
    },

    fitxarJugador(jugador) {
        const jugadorNormalitzat = normalitzarJugador(jugador)
        const jugadorsFitxats = this.getJugadorsFitxats()

        const jaExisteix = jugadorsFitxats.some(
            (item) => Number(item.id) === Number(jugadorNormalitzat.id)
        )

        if (jaExisteix) {
            throw new Error('Aquest jugador ja està fitxat en aquesta lliga.')
        }

        const pressupostActual = this.getPressupost()
        const preuJugador = Number(jugadorNormalitzat.valor_mercat || 0)

        if (pressupostActual < preuJugador) {
            throw new Error('No tens pressupost suficient per fitxar aquest jugador.')
        }

        const nouPressupost = pressupostActual - preuJugador
        const nousJugadors = [...jugadorsFitxats, jugadorNormalitzat]

        this.setPressupost(nouPressupost)
        this.setJugadorsFitxats(nousJugadors)

        return {
            jugador: jugadorNormalitzat,
            jugadors: nousJugadors,
            pressupost: nouPressupost,
        }
    },

    reiniciarLligaActual() {
        localStorage.removeItem(getJugadorsKey())
        localStorage.removeItem(getPressupostKey())
    },
}