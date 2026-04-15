<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerApi;

// ══════════════════════════════════════════════════════════════════
//  AUTENTICACIÓ (pública)
// ══════════════════════════════════════════════════════════════════
Route::post('register', [ControllerApi::class, 'register']);
Route::post('login',    [ControllerApi::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [ControllerApi::class, 'logout']);
    Route::get('me',      [ControllerApi::class, 'me']);
});

// ══════════════════════════════════════════════════════════════════
//  RUTES PÚBLIQUES (sense token)
// ══════════════════════════════════════════════════════════════════
Route::get('competicions',                [ControllerApi::class, 'competicionsIndex']);
Route::get('competicions/{id}',           [ControllerApi::class, 'competicionsShow']);

Route::get('equips-reals',               [ControllerApi::class, 'equipsRealsIndex']);
Route::get('equips-reals/{id}',          [ControllerApi::class, 'equipsRealsShow']);

Route::get('jugadors',                   [ControllerApi::class, 'jugadorsIndex']);
Route::get('jugadors/{id}',              [ControllerApi::class, 'jugadorsShow']);
Route::get('jugadors/{id}/estadistiques',[ControllerApi::class, 'jugadorsEstadistiques']);

Route::get('jornades',                   [ControllerApi::class, 'jornadesIndex']);
Route::get('jornades/{id}',              [ControllerApi::class, 'jornadesShow']);
Route::get('jornades/{id}/partits',      [ControllerApi::class, 'jornadesPartits']);

Route::get('partits',                    [ControllerApi::class, 'partitsIndex']);
Route::get('partits/{id}',               [ControllerApi::class, 'partitsShow']);
Route::get('partits/{id}/estadistiques', [ControllerApi::class, 'partitsEstadistiques']);

// ══════════════════════════════════════════════════════════════════
//  RUTES PRIVADES (auth:sanctum)
// ══════════════════════════════════════════════════════════════════
Route::middleware('auth:sanctum')->group(function () {

    // ── Usuaris ───────────────────────────────────────────────────
    Route::get('usuaris',         [ControllerApi::class, 'usuarisIndex']);
    Route::get('usuaris/{id}',    [ControllerApi::class, 'usuarisShow']);
    Route::post('usuaris',        [ControllerApi::class, 'usuarisStore']);
    Route::put('usuaris/{id}',    [ControllerApi::class, 'usuarisUpdate']);
    Route::delete('usuaris/{id}', [ControllerApi::class, 'usuarisDestroy']);

    // ── Lligues Privades ──────────────────────────────────────────
    Route::post('lligues-privades/unirse',      [ControllerApi::class, 'lliguesUnirse']);
    Route::get('lligues-privades',              [ControllerApi::class, 'lliguesIndex']);
    Route::get('lligues-privades/{id}',         [ControllerApi::class, 'lliguesShow']);
    Route::post('lligues-privades',             [ControllerApi::class, 'lliguesStore']);
    Route::put('lligues-privades/{id}',         [ControllerApi::class, 'lliguesUpdate']);
    Route::delete('lligues-privades/{id}',      [ControllerApi::class, 'lliguesDestroy']);

    // ── Competicions (admin) ──────────────────────────────────────
    Route::post('competicions',         [ControllerApi::class, 'competicionsStore']);
    Route::put('competicions/{id}',     [ControllerApi::class, 'competicionsUpdate']);
    Route::delete('competicions/{id}',  [ControllerApi::class, 'competicionsDestroy']);

    // ── Equips Reals (admin) ──────────────────────────────────────
    Route::post('equips-reals',         [ControllerApi::class, 'equipsRealsStore']);
    Route::put('equips-reals/{id}',     [ControllerApi::class, 'equipsRealsUpdate']);
    Route::delete('equips-reals/{id}',  [ControllerApi::class, 'equipsRealsDestroy']);

    // ── Jugadors (admin) ──────────────────────────────────────────
    Route::post('jugadors',             [ControllerApi::class, 'jugadorsStore']);
    Route::put('jugadors/{id}',         [ControllerApi::class, 'jugadorsUpdate']);
    Route::delete('jugadors/{id}',      [ControllerApi::class, 'jugadorsDestroy']);

    // ── Jornades (admin) ──────────────────────────────────────────
    Route::post('jornades',             [ControllerApi::class, 'jornadesStore']);
    Route::put('jornades/{id}',         [ControllerApi::class, 'jornadesUpdate']);
    Route::delete('jornades/{id}',      [ControllerApi::class, 'jornadesDestroy']);

    // ── Partits (admin) ───────────────────────────────────────────
    Route::post('partits',              [ControllerApi::class, 'partitsStore']);
    Route::put('partits/{id}',          [ControllerApi::class, 'partitsUpdate']);
    Route::delete('partits/{id}',       [ControllerApi::class, 'partitsDestroy']);

    // ── Equips Fantasy ────────────────────────────────────────────
    Route::get('equips-fantasy',                      [ControllerApi::class, 'equipsFantasyIndex']);
    Route::get('equips-fantasy/{id}',                 [ControllerApi::class, 'equipsFantasyShow']);
    Route::post('equips-fantasy',                     [ControllerApi::class, 'equipsFantasyStore']);
    Route::put('equips-fantasy/{id}',                 [ControllerApi::class, 'equipsFantasyUpdate']);
    Route::delete('equips-fantasy/{id}',              [ControllerApi::class, 'equipsFantasyDestroy']);
    Route::post('equips-fantasy/{id}/jugadors',       [ControllerApi::class, 'equipsFantasyAfegirJugador']);
    Route::delete('equips-fantasy/{id}/jugadors',     [ControllerApi::class, 'equipsFantasyEliminarJugador']);

    // ── Alineacions ───────────────────────────────────────────────
    Route::get('alineacions',                         [ControllerApi::class, 'alineacionsIndex']);
    Route::get('alineacions/{id}',                    [ControllerApi::class, 'alineacionsShow']);
    Route::post('alineacions',                        [ControllerApi::class, 'alineacionsStore']);
    Route::put('alineacions/{id}',                    [ControllerApi::class, 'alineacionsUpdate']);
    Route::delete('alineacions/{id}',                 [ControllerApi::class, 'alineacionsDestroy']);
    Route::post('alineacions/{id}/jugadors',          [ControllerApi::class, 'alineacionsAfegirJugador']);
    Route::delete('alineacions/{id}/jugadors',        [ControllerApi::class, 'alineacionsEliminarJugador']);

    // ── Puntuacions ───────────────────────────────────────────────
    Route::get('puntuacions/ranking/{lligaId}',       [ControllerApi::class, 'puntuacionsRanking']);
    Route::get('puntuacions',                         [ControllerApi::class, 'puntuacionsIndex']);
    Route::get('puntuacions/{id}',                    [ControllerApi::class, 'puntuacionsShow']);
    Route::post('puntuacions',                        [ControllerApi::class, 'puntuacionsStore']);
    Route::put('puntuacions/{id}',                    [ControllerApi::class, 'puntuacionsUpdate']);
    Route::delete('puntuacions/{id}',                 [ControllerApi::class, 'puntuacionsDestroy']);

    // ── Estadístiques Jugador ─────────────────────────────────────
    Route::get('estadistiques',                       [ControllerApi::class, 'estadistiquesIndex']);
    Route::get('estadistiques/{id}',                  [ControllerApi::class, 'estadistiquesShow']);
    Route::post('estadistiques',                      [ControllerApi::class, 'estadistiquesStore']);
    Route::put('estadistiques/{id}',                  [ControllerApi::class, 'estadistiquesUpdate']);
    Route::delete('estadistiques/{id}',               [ControllerApi::class, 'estadistiquesDestroy']);
});