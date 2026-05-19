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

const getFormacioKey = (lligaId) => {
    return `ffe_alineacio_formacio_lliga_${lligaId}`
}

const getTitularsKey = (lligaId, formacio) => {
    return `ffe_alineacio_titulars_lliga_${lligaId}_${formacio}`
}

const llegirTitularsLocal = (lligaId, formacio) => {
    try {
        const data = localStorage.getItem(getTitularsKey(lligaId, formacio))
        return data ? JSON.parse(data) : {}
    } catch {
        return {}
    }
}

const guardarTitularsLocal = (lligaId, formacio, titulars) => {
    localStorage.setItem(getTitularsKey(lligaId, formacio), JSON.stringify(titulars || {}))
}

const obtenirFormacioLocal = (lligaId) => {
    return localStorage.getItem(getFormacioKey(lligaId)) || '4-3-3'
}

const guardarFormacioLocal = (lligaId, formacio) => {
    localStorage.setItem(getFormacioKey(lligaId), formacio)
}

const normalitzarTitulars = (titulars) => {
    if (!titulars) return {}

    if (!Array.isArray(titulars)) {
        return titulars
    }

    return titulars.reduce((acc, item) => {
        const slot = item.slot || item.posicio_slot || item.posicio || item.key
        const jugadorId = item.jugador_id || item.jugadorId || item.id

        if (slot && jugadorId) {
            acc[slot] = Number(jugadorId)
        }

        return acc
    }, {})
}

const titularsToArray = (titulars) => {
    return Object.entries(titulars || {})
        .filter(([, jugadorId]) => jugadorId)
        .map(([slot, jugadorId]) => ({
            slot,
            jugador_id: Number(jugadorId),
        }))
}

const obtenirAlineacio = async (lligaId, formacio) => {
    try {
        const params = new URLSearchParams({
            lliga_privada_id: lligaId,
            formacio,
        })

        const response = await fetch(`${API_URL}/alineacions?${params.toString()}`, {
            method: 'GET',
            headers: headers(),
        })

        if (!response.ok) {
            throw new Error('No s’ha pogut carregar l’alineació de l’API.')
        }

        const data = await response.json()
        const alineacio = data.alineacio || data.data || data

        return {
            formacio: alineacio.formacio || formacio,
            titulars: normalitzarTitulars(
                alineacio.titulars ||
                alineacio.jugadors ||
                alineacio.alineacio_jugadors ||
                {}
            ),
            origen: 'api',
        }
    } catch (error) {
        console.warn('Alineació carregada en mode local:', error.message)

        return {
            formacio,
            titulars: llegirTitularsLocal(lligaId, formacio),
            origen: 'local',
        }
    }
}

const guardarAlineacio = async ({ lligaId, formacio, titulars, jornadaId = null }) => {
    guardarFormacioLocal(lligaId, formacio)
    guardarTitularsLocal(lligaId, formacio, titulars)

    try {
        const response = await fetch(`${API_URL}/alineacions`, {
            method: 'POST',
            headers: headers(),
            body: JSON.stringify({
                lliga_privada_id: lligaId,
                jornada_id: jornadaId,
                formacio,
                titulars: titularsToArray(titulars),
                titulars_map: titulars,
            }),
        })

        if (!response.ok) {
            throw new Error('No s’ha pogut guardar l’alineació a l’API.')
        }

        const data = await response.json()

        return {
            success: true,
            origen: 'api',
            data,
        }
    } catch (error) {
        console.warn('Alineació guardada en mode local:', error.message)

        return {
            success: true,
            origen: 'local',
            message: 'Alineació guardada localment.',
        }
    }
}

const obtenirFormacio = (lligaId) => {
    return obtenirFormacioLocal(lligaId)
}

const guardarFormacio = async (lligaId, formacio) => {
    guardarFormacioLocal(lligaId, formacio)

    return {
        success: true,
        formacio,
    }
}

const obtenirTitulars = (lligaId, formacio) => {
    return llegirTitularsLocal(lligaId, formacio)
}

export const alineacioService = {
    obtenirAlineacio,
    guardarAlineacio,
    obtenirFormacio,
    guardarFormacio,
    obtenirTitulars,
}

export default alineacioService