const API_BASE_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api'

async function apiRequest(endpoint, options = {}) {
  const token = localStorage.getItem('ffe_token')
  const method = options.method || 'GET'

  const headers = {
    Accept: 'application/json',
    ...(token ? { Authorization: `Bearer ${token}` } : {}),
    ...(options.headers || {})
  }

  const isFormData = options.body instanceof FormData

  if (!isFormData && method !== 'GET' && method !== 'HEAD') {
    headers['Content-Type'] = 'application/json'
  }

  const response = await fetch(`${API_BASE_URL}${endpoint}`, {
    ...options,
    method,
    headers
  })

  const contentType = response.headers.get('content-type') || ''
  const isJson = contentType.includes('application/json')

  let payload = null

  if (isJson) {
    try {
      payload = await response.json()
    } catch {
      payload = null
    }
  }

  if (!response.ok) {
    const message =
      payload?.message ||
      payload?.error ||
      `Error ${response.status}`

    throw new Error(message)
  }

  return payload
}

export const api = {
  login: (email, password) =>
    apiRequest('/login', {
      method: 'POST',
      body: JSON.stringify({ email, password })
    }),

  register: (nom, email, password, password_confirmation) =>
    apiRequest('/register', {
      method: 'POST',
      body: JSON.stringify({ nom, email, password, password_confirmation })
    }),

  logout: () =>
    apiRequest('/logout', {
      method: 'POST'
    }),

  getMe: () => apiRequest('/me'),

  getCompeticions: () => apiRequest('/competicions'),
  getCompeticio: (id) => apiRequest(`/competicions/${id}`),

  getEquipReal: (id) => apiRequest(`/equips-reals/${id}`),

  getJugadors: () => apiRequest('/jugadors'),
  getPartits: () => apiRequest('/partits'),

  getEquipsFantasy: () => apiRequest('/equips-fantasy'),
  getEquipFantasy: (id) => apiRequest(`/equips-fantasy/${id}`),

  getAlineacions: () => apiRequest('/alineacions'),
  getAlineacio: (id) => apiRequest(`/alineacions/${id}`),

  updateAlineacio: (id, payload) =>
    apiRequest(`/alineacions/${id}`, {
      method: 'PUT',
      body: JSON.stringify(payload)
    })
}