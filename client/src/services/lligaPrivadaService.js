const API_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

const LLIGUES_LOCAL_KEY = 'ffe_lligues_privades_local'

const getToken = () => localStorage.getItem('ffe_token')

const headers = () => {
  const token = getToken()

  return {
    Accept: 'application/json',
    'Content-Type': 'application/json',
    ...(token ? { Authorization: `Bearer ${token}` } : {}),
  }
}

const getUsuariActual = () => {
  try {
    return JSON.parse(localStorage.getItem('ffe_user') || 'null')
  } catch {
    return null
  }
}

const llegirLliguesLocals = () => {
  try {
    const data = localStorage.getItem(LLIGUES_LOCAL_KEY)
    return data ? JSON.parse(data) : []
  } catch {
    return []
  }
}

const guardarLliguesLocals = (lligues) => {
  localStorage.setItem(LLIGUES_LOCAL_KEY, JSON.stringify(lligues || []))
}

const generarCodi = () => {
  const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
  let codi = ''

  for (let i = 0; i < 7; i++) {
    codi += chars.charAt(Math.floor(Math.random() * chars.length))
  }

  return codi
}

const normalitzarLliga = (lliga) => {
  return {
    id: lliga.id,
    nom: lliga.nom || lliga.name || 'Lliga privada',
    descripcio: lliga.descripcio || lliga.description || '',
    codi:
      lliga.codi ||
      lliga.codi_acces ||
      lliga.codi_invitacio ||
      lliga.invitation_code ||
      generarCodi(),
    codi_acces:
      lliga.codi_acces ||
      lliga.codi ||
      lliga.codi_invitacio ||
      lliga.invitation_code ||
      generarCodi(),
    codi_invitacio:
      lliga.codi_invitacio ||
      lliga.codi ||
      lliga.codi_acces ||
      lliga.invitation_code ||
      generarCodi(),
    pressupost_inicial: Number(
      lliga.pressupost_inicial ||
      lliga.pressupost ||
      lliga.presupuesto_inicial ||
      250000000
    ),
    pressupost: Number(
      lliga.pressupost ||
      lliga.pressupost_inicial ||
      lliga.presupuesto_inicial ||
      250000000
    ),
    maxim_participants: Number(
      lliga.maxim_participants ||
      lliga.max_participants ||
      lliga.maxParticipants ||
      10
    ),
    membres_count: Number(
      lliga.membres_count ||
      lliga.membres?.length ||
      lliga.participants_count ||
      1
    ),
    estat: lliga.estat || 'activa',
    creador_id: lliga.creador_id || getUsuariActual()?.id || null,
  }
}

const extreureLligues = (data) => {
  if (Array.isArray(data)) {
    return data.map(normalitzarLliga)
  }

  if (Array.isArray(data?.lligues)) {
    return data.lligues.map(normalitzarLliga)
  }

  if (Array.isArray(data?.data)) {
    return data.data.map(normalitzarLliga)
  }

  return []
}

const crearLligaLocal = (payload) => {
  const lligues = llegirLliguesLocals()

  const codi = generarCodi()

  const novaLliga = normalitzarLliga({
    id: Date.now(),
    nom: payload.nom,
    descripcio: payload.descripcio,
    codi,
    codi_acces: codi,
    codi_invitacio: codi,
    pressupost_inicial: payload.pressupost_inicial || 250000000,
    pressupost: payload.pressupost_inicial || 250000000,
    maxim_participants: payload.maxim_participants || 10,
    membres_count: 1,
    estat: 'activa',
  })

  const novesLligues = [...lligues, novaLliga]
  guardarLliguesLocals(novesLligues)

  return {
    success: true,
    message: 'Lliga creada en mode local.',
    lliga: novaLliga,
    data: novaLliga,
  }
}

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
    const lliguesBackend = extreureLligues(data)
    const lliguesLocals = llegirLliguesLocals()

    return [...lliguesBackend, ...lliguesLocals]
  } catch (error) {
    console.warn('Lligues en mode local:', error.message)
    return llegirLliguesLocals()
  }
}

export const crearLligaPrivada = async (payload) => {
  try {
    const response = await fetch(`${API_URL}/lligues`, {
      method: 'POST',
      headers: headers(),
      body: JSON.stringify({
        nom: payload.nom,
        descripcio: payload.descripcio || '',
        pressupost_inicial: Number(payload.pressupost_inicial || 250000000),
        maxim_participants: Number(payload.maxim_participants || 10),
      }),
    })

    if (!response.ok) {
      throw new Error('No s’ha pogut crear la lliga al backend.')
    }

    const data = await response.json()
    return data
  } catch (error) {
    console.warn('Creant lliga en mode local:', error.message)
    return crearLligaLocal(payload)
  }
}

export const unirLligaPrivada = async (codi) => {
  try {
    const response = await fetch(`${API_URL}/lligues/unir`, {
      method: 'POST',
      headers: headers(),
      body: JSON.stringify({
        codi_acces: codi,
        codi,
      }),
    })

    if (!response.ok) {
      throw new Error('No s’ha pogut unir a la lliga.')
    }

    return await response.json()
  } catch (error) {
    const lligues = llegirLliguesLocals()

    const lliga = lligues.find(
      (item) =>
        String(item.codi).toUpperCase() === String(codi).toUpperCase() ||
        String(item.codi_acces).toUpperCase() === String(codi).toUpperCase() ||
        String(item.codi_invitacio).toUpperCase() === String(codi).toUpperCase()
    )

    if (!lliga) {
      throw new Error('No s’ha trobat cap lliga amb aquest codi.')
    }

    return {
      success: true,
      message: 'T’has unit a la lliga en mode local.',
      lliga,
      data: lliga,
    }
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
    const lligues = llegirLliguesLocals()
    const lliga = lligues.find((item) => String(item.id) === String(id))

    if (!lliga) {
      throw new Error('No s’ha trobat la lliga.')
    }

    return {
      success: true,
      lliga,
      data: lliga,
    }
  }
}

export const eliminarLligaPrivada = async (id) => {
  try {
    const response = await fetch(`${API_URL}/lligues/${id}`, {
      method: 'DELETE',
      headers: headers(),
    })

    if (!response.ok) {
      throw new Error('No s’ha pogut eliminar la lliga.')
    }

    return await response.json()
  } catch (error) {
    const lligues = llegirLliguesLocals()
    const novesLligues = lligues.filter(
      (item) => String(item.id) !== String(id)
    )

    guardarLliguesLocals(novesLligues)

    return {
      success: true,
      message: 'Lliga eliminada en mode local.',
    }
  }
}

export const lligaPrivadaService = {
  getLliguesPrivades,
  crearLligaPrivada,
  unirLligaPrivada,
  getLligaPrivada,
  eliminarLligaPrivada,
}

export default lligaPrivadaService