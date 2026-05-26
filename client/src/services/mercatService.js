const API_URL = (import.meta.env.VITE_API_URL || 'http://localhost:8000/api').replace(/\/+$/, '')

function getToken() {
    return localStorage.getItem('ffe_token') || localStorage.getItem('token')
}

async function request(endpoint, options = {}) {
    const token = getToken()

    const headers = {
        Accept: 'application/json',
        ...(token ? { Authorization: `Bearer ${token}` } : {}),
        ...(options.headers || {})
    }

    if (options.body && !(options.body instanceof FormData)) {
        headers['Content-Type'] = 'application/json'
    }

    const response = await fetch(`${API_URL}${endpoint}`, {
        ...options,
        headers
    })

    const data = await response.json().catch(() => null)

    if (!response.ok) {
        throw new Error(data?.message || data?.error || `Error ${response.status}`)
    }

    return data
}

async function getJugadorsMercat() {
    const data = await request('/mercat')

    if (Array.isArray(data)) {
        return {
            jugadors: data,
            pressupost: 0
        }
    }

    return {
        ...data,
        jugadors: data?.jugadors || data?.data || data?.mercat || [],
        pressupost: data?.pressupost || data?.pressupost_disponible || 0
    }
}

async function getMercat() {
    return getJugadorsMercat()
}

async function fitxarJugador(jugadorId) {
    return request(`/mercat/${jugadorId}/fitxar`, {
        method: 'POST'
    })
}

export const mercatService = {
    getMercat,
    getJugadorsMercat,
    obtenirMercat: getJugadorsMercat,
    obtenirJugadorsMercat: getJugadorsMercat,

    fitxarJugador,
    fitxar: fitxarJugador,
    comprarJugador: fitxarJugador
}