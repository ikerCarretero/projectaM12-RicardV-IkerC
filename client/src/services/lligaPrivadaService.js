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

const normalitzarRespostaLligues = (data) => {
  if (Array.isArray(data)) {
    return data
  }

  if (Array.isArray(data?.lligues)) {
    return data.lligues
  }

  if (Array.isArray(data?.data)) {
    return data.data
  }

  return []
}

const lliguesDemo = [
  {
    id: 1,
    nom: 'Lliga DAW',
    descripcio: 'Lliga privada de prova per al projecte final.',
    codi: 'DAW2026',
    codi_invitacio: 'DAW2026',
    membres_count: 1,
    pressupost: 250000000,
    pressupost_inicial: 250000000,
  },
]

export const getLliguesPrivades = async () => {
  try {
    const response = await fetch(`${API_URL}/lligues`, {
      method: 'GET',
      headers: headers(),
    })

    if (!response.ok) {
      throw new Error('No s’han pogut carregar les lligues.')
    }

    const data = await response.json()
    return normalitzarRespostaLligues(data)
  } catch (error) {
    console.warn('Lligues en mode demo:', error.message)
    return lliguesDemo
  }
}

export const getLligaPrivada = async (id) => {
  try {
    const response = await fetch(`${API_URL}/lligues/${id}`, {
      method: 'GET',
      headers: headers(),
    })

    if (!response.ok) {
      throw new Error('No s’ha pogut carregar la lliga.')
    }

    return await response.json()
  } catch (error) {
    console.warn('Detall de lliga en mode demo:', error.message)

    return (
      lliguesDemo.find((lliga) => Number(lliga.id) === Number(id)) || {
        id,
        nom: 'Lliga privada',
        descripcio: 'Lliga privada de prova.',
        codi: 'DEMO2026',
        codi_invitacio: 'DEMO2026',
        membres_count: 1,
        pressupost: 250000000,
        pressupost_inicial: 250000000,
      }
    )
  }
}

export const crearLligaPrivada = async (payload) => {
  const response = await fetch(`${API_URL}/lligues`, {
    method: 'POST',
    headers: headers(),
    body: JSON.stringify(payload),
  })

  if (!response.ok) {
    const data = await response.json().catch(() => null)
    throw new Error(data?.message || 'No s’ha pogut crear la lliga.')
  }

  return await response.json()
}

export const unirLligaPrivada = async (codi) => {
  const response = await fetch(`${API_URL}/lligues/unir`, {
    method: 'POST',
    headers: headers(),
    body: JSON.stringify({ codi }),
  })

  if (!response.ok) {
    const data = await response.json().catch(() => null)
    throw new Error(data?.message || 'No s’ha pogut unir a la lliga.')
  }

  return await response.json()
}

export const eliminarLligaPrivada = async (id) => {
  const response = await fetch(`${API_URL}/lligues/${id}`, {
    method: 'DELETE',
    headers: headers(),
  })

  if (!response.ok) {
    const data = await response.json().catch(() => null)
    throw new Error(data?.message || 'No s’ha pogut eliminar la lliga.')
  }

  return true
}

export const lligaPrivadaService = {
  getLligues: getLliguesPrivades,
  getLliguesPrivades,
  getLliga: getLligaPrivada,
  getLligaPrivada,
  crearLliga: crearLligaPrivada,
  crearLligaPrivada,
  unirLliga: unirLligaPrivada,
  unirLligaPrivada,
  eliminarLliga: eliminarLligaPrivada,
  eliminarLligaPrivada,
  index: getLliguesPrivades,
  list: getLliguesPrivades,
}

export default lligaPrivadaService