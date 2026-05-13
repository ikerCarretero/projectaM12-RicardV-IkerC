const LLIGA_ACTIVA_KEY = 'ffe_lliga_activa'

export const lligaActivaService = {
    guardar(lliga) {
        if (!lliga || !lliga.id) {
            return
        }

        const lligaNormalitzada = {
            id: lliga.id,
            nom: lliga.nom || 'Lliga privada',
            codi: lliga.codi || lliga.codi_invitacio || null,
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

    existeix() {
        return Boolean(this.obtenirId())
    },
}