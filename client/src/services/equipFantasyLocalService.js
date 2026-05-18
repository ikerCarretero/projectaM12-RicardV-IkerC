import { lligaActivaService } from './lligaActivaService'

const PRESSUPOST_INICIAL = 250000000

const jugadorsInicialsDemo = [
    { id: 1001, nom: 'Unai Simón', equip: 'Athletic Club', posicio: 'Porter', valor_mercat: 30000000, punts: 0 },
    { id: 1002, nom: 'Diogo Costa', equip: 'FC Porto', posicio: 'Porter', valor_mercat: 45000000, punts: 0 },
    { id: 1003, nom: 'David Raya', equip: 'Arsenal FC', posicio: 'Porter', valor_mercat: 40000000, punts: 0 },
    { id: 1004, nom: 'Gregor Kobel', equip: 'Borussia Dortmund', posicio: 'Porter', valor_mercat: 40000000, punts: 0 },

    { id: 1011, nom: 'Pau Cubarsí', equip: 'FC Barcelona', posicio: 'Defensa', valor_mercat: 70000000, punts: 0 },
    { id: 1012, nom: 'Jules Koundé', equip: 'FC Barcelona', posicio: 'Defensa', valor_mercat: 55000000, punts: 0 },
    { id: 1013, nom: 'Alejandro Grimaldo', equip: 'Bayer Leverkusen', posicio: 'Defensa', valor_mercat: 45000000, punts: 0 },
    { id: 1014, nom: 'Nathan Aké', equip: 'Manchester City', posicio: 'Defensa', valor_mercat: 38000000, punts: 0 },
    { id: 1015, nom: 'Alessandro Bastoni', equip: 'Inter Milan', posicio: 'Defensa', valor_mercat: 80000000, punts: 0 },
    { id: 1016, nom: 'Nuno Mendes', equip: 'Paris Saint-Germain', posicio: 'Defensa', valor_mercat: 70000000, punts: 0 },

    { id: 1021, nom: 'Pedri', equip: 'FC Barcelona', posicio: 'Migcampista', valor_mercat: 80000000, punts: 0 },
    { id: 1022, nom: 'Frenkie de Jong', equip: 'FC Barcelona', posicio: 'Migcampista', valor_mercat: 60000000, punts: 0 },
    { id: 1023, nom: 'Vitinha', equip: 'Paris Saint-Germain', posicio: 'Migcampista', valor_mercat: 70000000, punts: 0 },
    { id: 1024, nom: 'Federico Valverde', equip: 'Real Madrid', posicio: 'Migcampista', valor_mercat: 80000000, punts: 0 },
    { id: 1025, nom: 'Bruno Guimarães', equip: 'Newcastle United', posicio: 'Migcampista', valor_mercat: 75000000, punts: 0 },
    { id: 1026, nom: 'Martin Ødegaard', equip: 'Arsenal FC', posicio: 'Migcampista', valor_mercat: 80000000, punts: 0 },

    { id: 1031, nom: 'Ferran Torres', equip: 'FC Barcelona', posicio: 'Davanter', valor_mercat: 30000000, punts: 0 },
    { id: 1032, nom: 'Álvaro Morata', equip: 'AC Milan', posicio: 'Davanter', valor_mercat: 16000000, punts: 0 },
    { id: 1033, nom: 'Darwin Núñez', equip: 'Liverpool FC', posicio: 'Davanter', valor_mercat: 70000000, punts: 0 },
    { id: 1034, nom: 'Ollie Watkins', equip: 'Aston Villa', posicio: 'Davanter', valor_mercat: 65000000, punts: 0 },
    { id: 1035, nom: 'Alexander Isak', equip: 'Newcastle United', posicio: 'Davanter', valor_mercat: 75000000, punts: 0 },
    { id: 1036, nom: 'Marcus Thuram', equip: 'Inter Milan', posicio: 'Davanter', valor_mercat: 65000000, punts: 0 },
]

const getLligaId = () => {
    return lligaActivaService.obtenirId() || 'demo'
}

const getJugadorsKey = () => {
    return `ffe_jugadors_fitxats_lliga_${getLligaId()}`
}

const getPressupostKey = () => {
    return `ffe_pressupost_lliga_${getLligaId()}`
}

const getEquipInicialKey = () => {
    return `ffe_equip_inicial_generat_lliga_${getLligaId()}`
}

const normalitzarJugador = (jugador) => {
    return {
        id: jugador.id,
        nom: jugador.nom,
        equip: jugador.equip || jugador.equip_real?.nom || jugador.equipReal?.nom || 'Sense equip',
        posicio: jugador.posicio,
        valor_mercat: Number(jugador.valor_mercat || jugador.valorMercat || 0),
        punts: Number(jugador.punts || jugador.puntuacio_total || 0),
        estat: jugador.estat || 'Fitxat',
        origen: jugador.origen || 'Mercat',
    }
}

const normalitzarPosicio = (posicio) => {
    const value = String(posicio || '').toLowerCase()

    if (value.includes('porter') || value.includes('portero') || value === 'pt') {
        return 'porter'
    }

    if (value.includes('def')) {
        return 'defensa'
    }

    if (value.includes('mig') || value.includes('centro')) {
        return 'migcampista'
    }

    if (value.includes('dav') || value.includes('delantero') || value.includes('forward')) {
        return 'davanter'
    }

    return value
}

const barrejar = (array) => {
    return [...array].sort(() => Math.random() - 0.5)
}

const comptarPerPosicio = (jugadors, posicio) => {
    return jugadors.filter(
        (jugador) => normalitzarPosicio(jugador.posicio) === posicio
    ).length
}

const seleccionarJugadors = (posicio, quantitat, idsExclosos) => {
    return barrejar(jugadorsInicialsDemo)
        .filter((jugador) => normalitzarPosicio(jugador.posicio) === posicio)
        .filter((jugador) => Number(jugador.valor_mercat || 0) <= 80000000)
        .filter((jugador) => !idsExclosos.includes(String(jugador.id)))
        .slice(0, quantitat)
        .map((jugador) => ({
            ...normalitzarJugador(jugador),
            estat: 'Fitxat',
            origen: 'Inicial',
        }))
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
            (jugador) => String(jugador.id) === String(jugadorId)
        )
    },

    assegurarEquipInicial() {
        const jaGenerat = localStorage.getItem(getEquipInicialKey()) === 'true'
        const jugadorsActuals = this.getJugadorsFitxats()

        if (jaGenerat) {
            return {
                jugadors: jugadorsActuals,
                pressupost: this.getPressupost(),
            }
        }

        const idsExclosos = jugadorsActuals.map((jugador) => String(jugador.id))

        const objectiu = {
            porter: 2,
            defensa: 4,
            migcampista: 4,
            davanter: 3,
        }

        let nousJugadors = [...jugadorsActuals]

        Object.entries(objectiu).forEach(([posicio, quantitatObjectiu]) => {
            const quantitatActual = comptarPerPosicio(nousJugadors, posicio)
            const falten = Math.max(quantitatObjectiu - quantitatActual, 0)

            if (falten > 0) {
                const seleccionats = seleccionarJugadors(posicio, falten, idsExclosos)

                seleccionats.forEach((jugador) => {
                    idsExclosos.push(String(jugador.id))
                })

                nousJugadors = [...nousJugadors, ...seleccionats]
            }
        })

        this.setJugadorsFitxats(nousJugadors)
        localStorage.setItem(getEquipInicialKey(), 'true')

        return {
            jugadors: nousJugadors,
            pressupost: this.getPressupost(),
        }
    },

    fitxarJugador(jugador) {
        const jugadorNormalitzat = normalitzarJugador(jugador)
        const jugadorsFitxats = this.getJugadorsFitxats()

        const jaExisteix = jugadorsFitxats.some(
            (item) => String(item.id) === String(jugadorNormalitzat.id)
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
        const nousJugadors = [
            ...jugadorsFitxats,
            {
                ...jugadorNormalitzat,
                estat: 'Fitxat',
                origen: 'Mercat',
            },
        ]

        this.setPressupost(nouPressupost)
        this.setJugadorsFitxats(nousJugadors)

        return {
            jugador: jugadorNormalitzat,
            jugadors: nousJugadors,
            pressupost: nouPressupost,
        }
    },

    vendreJugador(jugadorId) {
        const jugadorsFitxats = this.getJugadorsFitxats()

        const jugadorVenut = jugadorsFitxats.find(
            (jugador) => String(jugador.id) === String(jugadorId)
        )

        if (!jugadorVenut) {
            throw new Error('No s’ha trobat aquest jugador a la plantilla.')
        }

        const nousJugadors = jugadorsFitxats.filter(
            (jugador) => String(jugador.id) !== String(jugadorId)
        )

        const valorJugador = Number(jugadorVenut.valor_mercat || 0)
        const nouPressupost = this.getPressupost() + valorJugador

        this.setJugadorsFitxats(nousJugadors)
        this.setPressupost(nouPressupost)

        return {
            jugador: jugadorVenut,
            jugadors: nousJugadors,
            pressupost: nouPressupost,
        }
    },

    reiniciarLligaActual() {
        localStorage.removeItem(getJugadorsKey())
        localStorage.removeItem(getPressupostKey())
        localStorage.removeItem(getEquipInicialKey())
    },
}