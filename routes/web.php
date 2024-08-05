<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
 //   return view('welcome'); 
//}); 



Route::get('/', [ElectionController::class, 'enregistrerScore'])->name('saisie-score');
Route::get('/saisie-candidats', [ElectionController::class, 'enregistrerCandidat'])->name('saisie-candidats');
Route::post('/sauvegarder-candidat', [ElectionController::class, 'store'])->name('sauvegarder-candidat');
Route::post('/sauvegarder-score', [ElectionController::class, 'stor'])->name('sauvegarder-score');


Route::get('/resultats', [ElectionController::class, 'calculResultats'])->name('resultats');
Route::get('/liste_candidat', [ElectionController::class,'liste'])->name('liste_candidat');
Route::get('/liste_score', [ElectionController::class,'list'])->name('liste_score');
Route::get('/buraux-de-vote', [ElectionController::class,'bureau'])->name('buraux-de-vote');
Route::get('/centres-de-vote', [ElectionController::class,'centre'])->name('centres-de-vote');
Route::get('/commune', [ElectionController::class,'comm'])->name('commune');
Route::get('/departement', [ElectionController::class,'depart'])->name('departement');
Route::get('/region', [ElectionController::class,'reg'])->name('region');
Route::middleware(['dateLimite'])->group(function () {
    // Routes nécessitant la vérification de la date limite
    return view('/message-expire');
});





   