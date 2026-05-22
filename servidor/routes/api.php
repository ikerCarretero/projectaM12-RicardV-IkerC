<?php

use App\Http\Controllers\ControllerApi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'API Fantasy Champions funcionant correctament',
    ]);
});

Route::post('register', [ControllerApi::class, 'register']);
Route::post('login', [ControllerApi::class, 'login']);

Route::get('competicions', [ControllerApi::class, 'competicionsIndex']);
Route::get('competicions/{id}', [ControllerApi::class, 'competicionsShow']);

Route::get('equips-reals', [ControllerApi::class, 'equipsRealsIndex']);
Route::get('equips-reals/{id}', [ControllerApi::class, 'equipsRealsShow']);

Route::get('jugadors', [ControllerApi::class, 'jugadorsIndex']);
Route::get('jugadors/{id}', [ControllerApi::class, 'jugadorsShow']);
Route::get('jugadors/{id}/estadistiques', [ControllerApi::class, 'jugadorsEstadistiques']);

Route::get('jornades', [ControllerApi::class, 'jornadesIndex']);
Route::get('jornades/{id}', [ControllerApi::class, 'jornadesShow']);
Route::get('jornades/{id}/partits', [ControllerApi::class, 'jornadesPartits']);

Route::get('partits', [ControllerApi::class, 'partitsIndex']);
Route::get('partits/{id}', [ControllerApi::class, 'partitsShow']);
Route::get('partits/{id}/estadistiques', [ControllerApi::class, 'partitsEstadistiques']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [ControllerApi::class, 'logout']);
    Route::get('me', [ControllerApi::class, 'me']);

    Route::get('usuaris', [ControllerApi::class, 'usuarisIndex']);
    Route::get('usuaris/{id}', [ControllerApi::class, 'usuarisShow']);
    Route::post('usuaris', [ControllerApi::class, 'usuarisStore']);
    Route::put('usuaris/{id}', [ControllerApi::class, 'usuarisUpdate']);
    Route::delete('usuaris/{id}', [ControllerApi::class, 'usuarisDestroy']);

    // Lligues compatibles amb el frontend actual.
    // lligues/unir ha d'anar abans de lligues/{id}.
    Route::get('lligues', [ControllerApi::class, 'lliguesIndex']);
    Route::post('lligues', [ControllerApi::class, 'lliguesStore']);
    Route::post('lligues/unir', [ControllerApi::class, 'lliguesUnirse']);
    Route::get('lligues/{id}', [ControllerApi::class, 'lliguesShow']);
    Route::put('lligues/{id}', [ControllerApi::class, 'lliguesUpdate']);
    Route::delete('lligues/{id}', [ControllerApi::class, 'lliguesDestroy']);

    // Rutes antigues, deixades com a alias per compatibilitat.
    Route::get('lligues-privades', [ControllerApi::class, 'lliguesIndex']);
    Route::post('lligues-privades', [ControllerApi::class, 'lliguesStore']);
    Route::post('lligues-privades/unirse', [ControllerApi::class, 'lliguesUnirse']);
    Route::get('lligues-privades/{id}', [ControllerApi::class, 'lliguesShow']);
    Route::put('lligues-privades/{id}', [ControllerApi::class, 'lliguesUpdate']);
    Route::delete('lligues-privades/{id}', [ControllerApi::class, 'lliguesDestroy']);

    // Mercat real per lliga.
    Route::get('mercat', [ControllerApi::class, 'mercatIndex']);
    Route::post('mercat/{jugador}/fitxar', [ControllerApi::class, 'mercatFitxar']);
    Route::delete('mercat/{jugador}/vendre', [ControllerApi::class, 'mercatVendre']);

    // Alineacions compatibles amb el frontend.
    Route::get('alineacions', [ControllerApi::class, 'alineacionsIndex']);
    Route::post('alineacions', [ControllerApi::class, 'alineacionsStore']);
    Route::get('alineacions/{id}', [ControllerApi::class, 'alineacionsShow']);
    Route::put('alineacions/{id}', [ControllerApi::class, 'alineacionsUpdate']);
    Route::delete('alineacions/{id}', [ControllerApi::class, 'alineacionsDestroy']);

    Route::post('competicions', [ControllerApi::class, 'competicionsStore']);
    Route::put('competicions/{id}', [ControllerApi::class, 'competicionsUpdate']);
    Route::delete('competicions/{id}', [ControllerApi::class, 'competicionsDestroy']);

    Route::post('equips-reals', [ControllerApi::class, 'equipsRealsStore']);
    Route::put('equips-reals/{id}', [ControllerApi::class, 'equipsRealsUpdate']);
    Route::delete('equips-reals/{id}', [ControllerApi::class, 'equipsRealsDestroy']);

    Route::post('jugadors', [ControllerApi::class, 'jugadorsStore']);
    Route::put('jugadors/{id}', [ControllerApi::class, 'jugadorsUpdate']);
    Route::delete('jugadors/{id}', [ControllerApi::class, 'jugadorsDestroy']);

    Route::post('jornades', [ControllerApi::class, 'jornadesStore']);
    Route::put('jornades/{id}', [ControllerApi::class, 'jornadesUpdate']);
    Route::delete('jornades/{id}', [ControllerApi::class, 'jornadesDestroy']);

    Route::post('partits', [ControllerApi::class, 'partitsStore']);
    Route::put('partits/{id}', [ControllerApi::class, 'partitsUpdate']);
    Route::delete('partits/{id}', [ControllerApi::class, 'partitsDestroy']);

    Route::get('equips-fantasy', [ControllerApi::class, 'equipsFantasyIndex']);
    Route::get('equips-fantasy/{id}', [ControllerApi::class, 'equipsFantasyShow']);
    Route::post('equips-fantasy', [ControllerApi::class, 'equipsFantasyStore']);
    Route::put('equips-fantasy/{id}', [ControllerApi::class, 'equipsFantasyUpdate']);
    Route::delete('equips-fantasy/{id}', [ControllerApi::class, 'equipsFantasyDestroy']);
    Route::post('equips-fantasy/{id}/jugadors', [ControllerApi::class, 'equipsFantasyAfegirJugador']);
    Route::delete('equips-fantasy/{id}/jugadors', [ControllerApi::class, 'equipsFantasyEliminarJugador']);

    Route::get('puntuacions/ranking/{lligaId}', [ControllerApi::class, 'puntuacionsRanking']);
    Route::get('puntuacions', [ControllerApi::class, 'puntuacionsIndex']);
    Route::get('puntuacions/{id}', [ControllerApi::class, 'puntuacionsShow']);
    Route::post('puntuacions', [ControllerApi::class, 'puntuacionsStore']);
    Route::put('puntuacions/{id}', [ControllerApi::class, 'puntuacionsUpdate']);
    Route::delete('puntuacions/{id}', [ControllerApi::class, 'puntuacionsDestroy']);

    Route::get('estadistiques', [ControllerApi::class, 'estadistiquesIndex']);
    Route::get('estadistiques/{id}', [ControllerApi::class, 'estadistiquesShow']);
    Route::post('estadistiques', [ControllerApi::class, 'estadistiquesStore']);
    Route::put('estadistiques/{id}', [ControllerApi::class, 'estadistiquesUpdate']);
    Route::delete('estadistiques/{id}', [ControllerApi::class, 'estadistiquesDestroy']);
});