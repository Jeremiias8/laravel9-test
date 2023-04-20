<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;

Route::view('/', 'rankings')->name('rankings');
// Route::get('/', 'rankings', ['teams' => $teams])->name('rankings');
Route::get('rankings', [TeamsController::class, 'index'])->name('rankings');
Route::view('/experiences', 'experiences')->name('experiences');
Route::view('/groups', 'groups')->name('groups');
Route::view('/prices', 'prices')->name('prices');
Route::view('/gift-card', 'gift-card')->name('gift-card');
Route::view('/contact', 'contact')->name('contact');

/*
Route::get('/', function () {
    return view('rankings',
        ['team1' => '1 - Knarkarna - 852000'],
        ['team2' => '2 - Calagurris - 808500'],
        ['team3' => '3 - HA BROTHERS - 773190'],
        ['team4' => '4 - chacal - 686660'],
        ['team5' => '5 - El Feo, el Bueno, el Malo y el Guapo. - 680150'],
        ['team6' => '6 - the orxeta boys - 666750'],
        ['team7' => '7 - Los Fiera - 63800'],
        ['team8' => '8 - Dirty Faces - 653083'],
        ['team9' => '9 - PolloTeam - 648920'],
        ['team10' => '10 - Los tormentos - 648500']
    );
});
*/
