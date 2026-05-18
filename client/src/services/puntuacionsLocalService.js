import { lligaActivaService } from './lligaActivaService'
import { equipFantasyLocalService } from './equipFantasyLocalService'
import { adminLocalService } from './adminLocalService'

const getLligaId = () => lligaActivaService.obtenirId() || 'demo'

const getPuntuacionsKey = () => {
    return `ffe_puntuacions_jugadors_lliga_${getLligaId()}`
}

const llegirPuntuacions = () => {
    try {
        const data = localStorage.getItem(getPuntuacionsKey())
        return data ? JSON.parse(data) : {}
    } catch {
        return {}
    }
}

const guardarPuntuacions = (data) => {
    localStorage.setItem(getPuntuacionsKey(), JSON.stringify(data || {}))
}

const normalitzarPuntuacio = (item) => {
    return {
        jugador_id: item.jugador_id,
        punts: Number(item.punts || 0),
        observacions: item.observacions || '',
    }
}

export const puntuacionsLocalService = {
    getJornades() {
        return adminLocalService.getJornades()
    },

    crearJornada(nom) {
        return adminLocalService.crearJornada(nom)
    },

    canviarEstatJornada(jornadaId) {
        return adminLocalService.canviarEstatJornada(jornadaId)
    },

    getPuntuacionsJornada(jornadaId, jugadorsBase = null) {
        const puntuacions = llegirPuntuacions()
        const puntuacionsJornada = puntuacions[jornadaId] || {}

        const jugadors = jugadorsBase || equipFantasyLocalService.getJugadorsFitxats()

        return jugadors.map((jugador) => {
            const puntuacio = puntuacionsJornada[jugador.id] || {}

            return {
                jugador_id: jugador.id,
                nom: jugador.nom,
                equip: jugador.equip || 'Sense equip',
                posicio: jugador.posicio || 'Jugador',
                valor_mercat: Number(jugador.valor_mercat || 0),
                punts: Number(puntuacio.punts || 0),
                observacions: puntuacio.observacions || '',
            }
        })
    },

    guardarPuntuacionsJornada(jornadaId, puntuacionsJornada) {
        const puntuacions = llegirPuntuacions()

        const puntuacionsNormalitzades = {}

        puntuacionsJornada.forEach((item) => {
            const puntuacio = normalitzarPuntuacio(item)

            puntuacionsNormalitzades[puntuacio.jugador_id] = puntuacio
        })

        puntuacions[jornadaId] = puntuacionsNormalitzades

        guardarPuntuacions(puntuacions)

        this.actualitzarPuntsTotalsPlantilla()

        return this.getPuntuacionsJornada(jornadaId)
    },

    calcularPuntsTotalsPerJugador() {
        const puntuacions = llegirPuntuacions()
        const totals = {}

        Object.values(puntuacions).forEach((puntuacionsJornada) => {
            Object.values(puntuacionsJornada).forEach((puntuacio) => {
                const jugadorId = puntuacio.jugador_id

                totals[jugadorId] =
                    Number(totals[jugadorId] || 0) + Number(puntuacio.punts || 0)
            })
        })

        return totals
    },

    actualitzarPuntsTotalsPlantilla() {
        const totals = this.calcularPuntsTotalsPerJugador()
        const jugadors = equipFantasyLocalService.getJugadorsFitxats()

        const jugadorsActualitzats = jugadors.map((jugador) => ({
            ...jugador,
            punts: Number(totals[jugador.id] || 0),
        }))

        equipFantasyLocalService.setJugadorsFitxats(jugadorsActualitzats)

        return jugadorsActualitzats
    },

    getResumJornada(jornadaId) {
        const puntuacions = this.getPuntuacionsJornada(jornadaId)

        const puntsTotals = puntuacions.reduce(
            (total, item) => total + Number(item.punts || 0),
            0
        )

        const jugadorsPuntuats = puntuacions.filter(
            (item) => Number(item.punts || 0) !== 0
        ).length

        return {
            puntsTotals,
            jugadorsPuntuats,
            totalJugadors: puntuacions.length,
        }
    },
}

export default puntuacionsLocalService