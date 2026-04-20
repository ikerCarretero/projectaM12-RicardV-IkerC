const API_URL = import.meta.env.VITE_SQL_API_URL || 'http://localhost:3001'

async function executeSQL(query) {
    const res = await fetch(`${API_URL}/sql`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ query })
    })

    if (!res.ok) {
        const text = await res.text()
        throw new Error(text || 'Error executant SQL')
    }

    return res.json()
}

function q(value) {
    if (value === null || value === undefined) return 'NULL'
    return `'${String(value).replace(/'/g, "''")}'`
}

/* =========================
   CONSULTES DE LECTURA
========================= */

export async function getJugadors() {
    const rows = await executeSQL(`
    SELECT
      j.id,
      j.nom,
      j.posicio_base,
      j.valor_mercat,
      j.puntuacio_total,
      er.id AS equip_real_id,
      er.nom AS equip_real_nom,
      er.pais AS equip_real_pais
    FROM jugadors j
    LEFT JOIN equips_reals er ON er.id = j.equip_real_id
    ORDER BY j.nom
  `)

    return rows.map((row) => ({
        id: row.id,
        nom: row.nom,
        posicio_base: row.posicio_base,
        valor_mercat: row.valor_mercat,
        puntuacio_total: row.puntuacio_total,
        equip_real: row.equip_real_id
            ? {
                id: row.equip_real_id,
                nom: row.equip_real_nom,
                pais: row.equip_real_pais
            }
            : null
    }))
}

export async function getPartits() {
    const rows = await executeSQL(`
    SELECT
      p.id,
      p.data_hora,
      p.resultat,
      j.id AS jornada_id,
      j.numero AS jornada_numero,
      el.id AS equip_local_id,
      el.nom AS equip_local_nom,
      ev.id AS equip_visitant_id,
      ev.nom AS equip_visitant_nom
    FROM partits p
    LEFT JOIN jornades j ON j.id = p.jornada_id
    LEFT JOIN equips_reals el ON el.id = p.equip_local_id
    LEFT JOIN equips_reals ev ON ev.id = p.equip_visitant_id
    ORDER BY p.data_hora
  `)

    return rows.map((row) => ({
        id: row.id,
        data_hora: row.data_hora,
        resultat: row.resultat,
        jornada: row.jornada_id
            ? {
                id: row.jornada_id,
                numero: row.jornada_numero
            }
            : null,
        equip_local: row.equip_local_id
            ? {
                id: row.equip_local_id,
                nom: row.equip_local_nom
            }
            : null,
        equip_visitant: row.equip_visitant_id
            ? {
                id: row.equip_visitant_id,
                nom: row.equip_visitant_nom
            }
            : null
    }))
}

export async function getCompeticions() {
    const rows = await executeSQL(`
    SELECT
      c.id,
      c.nom,
      c.temporada,
      COUNT(DISTINCT er.id) AS total_equips,
      COUNT(DISTINCT j.id) AS total_jornades
    FROM competicions c
    LEFT JOIN equips_reals er ON er.competicio_id = c.id
    LEFT JOIN jornades j ON j.competicio_id = c.id
    GROUP BY c.id, c.nom, c.temporada
    ORDER BY c.id
  `)

    return rows.map((row) => ({
        id: row.id,
        nom: row.nom,
        temporada: row.temporada,
        total_equips: Number(row.total_equips || 0),
        total_jornades: Number(row.total_jornades || 0)
    }))
}

export async function getCompeticio(id) {
    const competicioRows = await executeSQL(`
    SELECT id, nom, temporada
    FROM competicions
    WHERE id = ${Number(id)}
  `)

    if (!competicioRows.length) return null

    const equips = await executeSQL(`
    SELECT id, nom, pais, competicio_id
    FROM equips_reals
    WHERE competicio_id = ${Number(id)}
    ORDER BY nom
  `)

    const jornades = await executeSQL(`
    SELECT id, numero, data_inici, data_fi, competicio_id
    FROM jornades
    WHERE competicio_id = ${Number(id)}
    ORDER BY numero
  `)

    return {
        ...competicioRows[0],
        equips_reals: equips,
        jornades
    }
}

/* =========================
   EXEMPLES CRUD
   (només si us cal després)
========================= */

export async function createJugador(data) {
    const query = `
    INSERT INTO jugadors (nom, posicio_base, valor_mercat, puntuacio_total, equip_real_id)
    VALUES (
      ${q(data.nom)},
      ${q(data.posicio_base)},
      ${q(data.valor_mercat)},
      ${q(data.puntuacio_total)},
      ${q(data.equip_real_id)}
    )
  `
    return executeSQL(query)
}

export async function updateJugador(id, data) {
    const fields = []

    if (data.nom !== undefined) fields.push(`nom = ${q(data.nom)}`)
    if (data.posicio_base !== undefined) fields.push(`posicio_base = ${q(data.posicio_base)}`)
    if (data.valor_mercat !== undefined) fields.push(`valor_mercat = ${q(data.valor_mercat)}`)
    if (data.puntuacio_total !== undefined) fields.push(`puntuacio_total = ${q(data.puntuacio_total)}`)
    if (data.equip_real_id !== undefined) fields.push(`equip_real_id = ${q(data.equip_real_id)}`)

    if (!fields.length) throw new Error('No hi ha camps per actualitzar')

    return executeSQL(`
    UPDATE jugadors
    SET ${fields.join(', ')}
    WHERE id = ${Number(id)}
  `)
}

export async function deleteJugador(id) {
    return executeSQL(`
    DELETE FROM jugadors
    WHERE id = ${Number(id)}
  `)
}