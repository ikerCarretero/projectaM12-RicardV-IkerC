const API_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

/*
    Important:
    Si al backend finalment feu les rutes com /api/lligues,
    només canvia aquesta línia:

    const BASE_ENDPOINT = '/lligues'

    Ara ho deixo com /lligues-privades perquè encaixa millor
    amb la idea de lliga d'amics.
*/
const BASE_ENDPOINT = '/lligues-privades'

const getToken = () => {
  return localStorage.getItem('ffe_token') || localStorage.getItem('token')
}

const getHeaders = () => {
  const token = getToken()

  const headers = {
    Accept: 'application/json',
    'Content-Type': 'application/json',
  }

  if (token) {
    headers.Authorization = `Bearer ${token}`
  }

  return headers
}

const request = async (endpoint, options = {}) => {
  const response = await fetch(`${API_URL}${endpoint}`, {
    ...options,
    headers: {
      ...getHeaders(),
      ...(options.headers || {}),
    },
  })

  const text = await response.text()
  let data = null

  try {
    data = text ? JSON.parse(text) : null
  } catch (error) {
    data = null
  }

  if (!response.ok) {
    const message =
      data?.message ||
      data?.error ||
      'No s’ha pogut completar la petició'

    throw new Error(message)
  }

  return data
}

export const getLliguesPrivades = async () => {
  return request(BASE_ENDPOINT)
}

export const getLligaPrivada = async (id) => {
  return request(`${BASE_ENDPOINT}/${id}`)
}

export const crearLligaPrivada = async (lligaData) => {
  return request(BASE_ENDPOINT, {
    method: 'POST',
    body: JSON.stringify(lligaData),
  })
}

export const unirLligaPrivada = async (codi) => {
  return request(`${BASE_ENDPOINT}/unir`, {
    method: 'POST',
    body: JSON.stringify({ codi }),
  })
}

export async function eliminarLligaPrivada(id) {
    const apiUrl = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'
    const token = localStorage.getItem('ffe_token') || localStorage.getItem('token')

    const response = await fetch(`${apiUrl}/lligues-privades/${id}`, {
        method: 'DELETE',
        headers: {
            Accept: 'application/json',
            Authorization: `Bearer ${token}`,
        },
    })

    const data = await response.json().catch(() => ({}))

    if (!response.ok) {
        throw new Error(data.message || 'No s’ha pogut eliminar la lliga.')
    }

    return data
}