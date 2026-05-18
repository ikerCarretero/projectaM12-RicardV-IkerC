const LLIGA_ACTIVA_KEY = 'ffe_lliga_activa'

export const lligaActivaService = {
    guardar(lliga) {
        if (!lliga) {
            return
        }

        const lligaNormalitzada = {
            id: lliga.id,
            nom: lliga.nom || lliga.name || 'Lliga privada',
            descripcio: lliga.descripcio || lliga.description || '',
            codi: lliga.codi || lliga.codi_invitacio || lliga.invitation_code || '',
            codi_invitacio: lliga.codi_invitacio || lliga.codi || lliga.invitation_code || '',
            pressupost: lliga.pressupost || lliga.pressupost_inicial || 250000000,
            pressupost_inicial: lliga.pressupost_inicial || lliga.pressupost || 250000000,
        }

        localStorage.setItem(LLIGA_ACTIVA_KEY, JSON.stringify(lligaNormalitzada))
    },

    obtenir() {
        try {
            const data = localStorage.getItem(LLIGA_ACTIVA_KEY)
            return data ? JSON.parse(data) : null
        } catch (error) {
            return null
        }
    },

    obtenirId() {
        const lliga = this.obtenir()
        return lliga?.id || null
    },

    eliminar() {
        localStorage.removeItem(LLIGA_ACTIVA_KEY)
    },

    esActiva(lligaId) {
        const lliga = this.obtenir()

        if (!lliga || !lligaId) {
            return false
        }

        return String(lliga.id) === String(lligaId)
    },
}

export default lligaActivaService