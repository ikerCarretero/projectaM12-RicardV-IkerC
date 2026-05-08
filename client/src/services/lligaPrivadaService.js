const STORAGE_KEY = 'fantasy_lligues_privades'

function getStoredLligues() {
  const data = localStorage.getItem(STORAGE_KEY)

  if (!data) {
    return []
  }

  try {
    return JSON.parse(data)
  } catch {
    return []
  }
}

function saveStoredLligues(lligues) {
  localStorage.setItem(STORAGE_KEY, JSON.stringify(lligues))
}

function generarCodiInvitacio() {
  const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
  let codi = ''

  for (let i = 0; i < 6; i += 1) {
    codi += chars.charAt(Math.floor(Math.random() * chars.length))
  }

  return codi
}

export function getLliguesPrivades() {
  return getStoredLligues()
}

export function getLligaPrivadaById(id) {
  const lligues = getStoredLligues()
  return lligues.find((lliga) => String(lliga.id) === String(id)) || null
}

export function createLligaPrivada({ nom, descripcio, competicio, temporada }) {
  const lligues = getStoredLligues()

  const novaLliga = {
    id: Date.now(),
    nom,
    descripcio,
    competicio,
    temporada,
    codiInvitacio: generarCodiInvitacio(),
    creador: 'Admin',
    pressupost: 100000000,
    membres: [
      {
        id: 1,
        nom: 'Admin',
        rol: 'Administrador',
        punts: 0,
      },
    ],
    createdAt: new Date().toISOString(),
  }

  const novesLligues = [novaLliga, ...lligues]
  saveStoredLligues(novesLligues)

  return novaLliga
}

export function joinLligaPrivada(codiInvitacio) {
  const lligues = getStoredLligues()

  const lligaIndex = lligues.findIndex(
    (lliga) => lliga.codiInvitacio.toUpperCase() === codiInvitacio.toUpperCase()
  )

  if (lligaIndex === -1) {
    throw new Error('No s’ha trobat cap lliga amb aquest codi.')
  }

  const lliga = lligues[lligaIndex]

  const jaExisteix = lliga.membres.some((membre) => membre.nom === 'Admin')

  if (!jaExisteix) {
    lliga.membres.push({
      id: Date.now(),
      nom: 'Admin',
      rol: 'Participant',
      punts: 0,
    })
  }

  lligues[lligaIndex] = lliga
  saveStoredLligues(lligues)

  return lliga
}

export function deleteLligaPrivada(id) {
  const lligues = getStoredLligues()
  const novesLligues = lligues.filter((lliga) => String(lliga.id) !== String(id))

  saveStoredLligues(novesLligues)
}