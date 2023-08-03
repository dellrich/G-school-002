<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ScolariteController;
use App\Http\Controllers\InsciptionController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\AnneeacademiqueController;
use App\Http\Controllers\AnneeacademiquePrimController;
use App\Http\Controllers\ClassePrimController;
use App\Http\Controllers\CoefficientController;
use App\Http\Controllers\ElevePrimController;
use App\Http\Controllers\InscriptionPrimController;
use App\Http\Controllers\MatierePrimController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfesseurPrimController;
use App\Http\Controllers\ScolaritePrimController;
use App\Http\Controllers\TrimestreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homeprim', [App\Http\Controllers\HomePrimController::class, 'index'])->name('homeprim');

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('bienvenu');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route of anneeacademiques
Route::get('/admin/anneeacademiques/ajout', [AnneeacademiqueController::class, 'create'])->name('anneeacademiques.ajout');
Route::post('/admin/anneeacademiques/store', [AnneeacademiqueController::class, 'store'])->name('anneeacademiques.store');
Route::get('/admin/anneeacademiques/liste', [AnneeacademiqueController::class, 'index'])->name('anneeacademiques.liste');
Route::get('/admin/anneeacademiques/edit/{id}', [AnneeacademiqueController::class, 'edit'])->name('anneeacademiques.edit');
Route::post('/admin/anneeacademiques/update/{id}', [AnneeacademiqueController::class, 'update'])->name('anneeacademiques.update');
Route::post('/admin/anneeacademiques/delete/{id}', [AnneeacademiqueController::class, 'delete'])->name('anneeacademiques.delete');
Route::get('/admin/anneeacademiques/active/{id}', [AnneeacademiqueController::class, 'active'])->name('anneeacademiques.active');


// Route of anneeacademiques primaire
Route::get('/adminprimaire/anneeacademiques/ajout', [AnneeacademiquePrimController::class, 'create'])->name('anneeacademiques_prim.ajout');
Route::post('/adminprimaire/anneeacademiques/store', [AnneeacademiquePrimController::class, 'store'])->name('anneeacademiques_prim.store');
Route::get('/adminprimaire/anneeacademiques/liste', [AnneeacademiquePrimController::class, 'index'])->name('anneeacademiques_prim.liste');
Route::get('/adminprimaire/anneeacademiques/edit/{id}', [AnneeacademiquePrimController::class, 'edit'])->name('anneeacademiques_prim.edit');
Route::post('/adminprimaire/anneeacademiques/update/{id}', [AnneeacademiquePrimController::class, 'update'])->name('anneeacademiques_prim.update');
Route::post('/adminprimaire/anneeacademiques/delete/{id}', [AnneeacademiquePrimController::class, 'delete'])->name('anneeacademiques_prim.delete');
Route::get('/adminprimaire/anneeacademiques/active/{id}', [AnneeacademiquePrimController::class, 'active'])->name('anneeacademiques_prim.active');



// Route of profeseurs
 Route::get('/admin/profs/ajout', [ProfesseurController::class, 'create'])->name('profs.ajout');
 Route::post('/admin/profs/store', [ProfesseurController::class, 'store'])->name('profs.store');
 Route::get('/admin/profs/liste', [ProfesseurController::class, 'index'])->name('profs.liste');
 Route::get('/admin/profs/edit/{id}', [ProfesseurController::class, 'edit'])->name('profs.edit');
 Route::post('/admin/profs/update/{id}', [ProfesseurController::class, 'update'])->name('profs.update');
 Route::get('/admin/profs/delete/{id}', [ProfesseurController::class, 'delete'])->name('profs.delete');

 // Route of profeseurs primaire
 Route::get('/adminprimaire/enseignant/ajout', [ProfesseurPrimController::class, 'create'])->name('enseignant.ajout');
 Route::post('/adminprimaire/enseignant/store', [ProfesseurPrimController::class, 'store'])->name('enseignant.store');
 Route::get('/adminprimaire/enseignant/liste', [ProfesseurPrimController::class, 'index'])->name('enseignant.liste');
 Route::get('/adminprimaire/enseignant/edit/{id}', [ProfesseurPrimController::class, 'edit'])->name('enseignant.edit');
 Route::post('/adminprimaire/enseignant/update/{id}', [ProfesseurPrimController::class, 'update'])->name('enseignant.update');
 Route::get('/adminprimaire/enseignant/delete/{id}', [ProfesseurPrimController::class, 'delete'])->name('enseignant.delete');


 // Route of matieres
 Route::get('/admin/matieres/ajout', [MatiereController::class, 'create'])->name('matieres.ajout');
 Route::post('/admin/matieres/store', [MatiereController::class, 'store'])->name('matieres.store');
 Route::get('/admin/matieres/liste', [MatiereController::class, 'index'])->name('matieres.liste');
 Route::get('/admin/matieres/edit/{id}', [MatiereController::class, 'edit'])->name('matieres.edit');
 Route::post('/admin/matieres/update/{id}', [MatiereController::class, 'update'])->name('matieres.update');
 Route::get('/admin/matieres/delete/{id}', [MatiereController::class, 'delete'])->name('matieres.delete');

  // Route of matieres primaire
  Route::get('/adminprimaire/matieres/ajout', [MatierePrimController::class, 'create'])->name('matieres_prim.ajout');
  Route::post('/adminprimaire/matieres/store', [MatierePrimController::class, 'store'])->name('matieres_prim.store');
  Route::get('/adminprimaire/matieres/liste', [MatierePrimController::class, 'index'])->name('matieres_prim.liste');
  Route::get('/adminprimaire/matieres/edit/{id}', [MatierePrimController::class, 'edit'])->name('matieres_prim.edit');
  Route::post('/adminprimaire/matieres/update/{id}', [MatierePrimController::class, 'update'])->name('matieres_prim.update');
  Route::get('/adminprimaire/matieres/delete/{id}', [MatierePrimController::class, 'delete'])->name('matieres_prim.delete');

 // Route of classes
 Route::get('/admin/classe/ajout', [ClasseController::class, 'create'])->name('classes.ajout');
 Route::post('/admin/classe/store', [ClasseController::class, 'store'])->name('classes.store');
 Route::get('/admin/classe/liste', [ClasseController::class, 'index'])->name('classes.liste');
 Route::get('/admin/classe/edit/{id}', [ClasseController::class, 'edit'])->name('classes.edit');
 Route::post('/admin/classe/update/{id}', [ClasseController::class, 'update'])->name('classes.update');
 Route::get('/admin/classe/delete/{id}', [ClasseController::class, 'delete'])->name('classes.delete');

  // Route of classes primaire
  Route::get('/adminprimaire/classe/ajout', [ClassePrimController::class, 'create'])->name('classes_prim.ajout');
  Route::post('/adminprimaire/classe/store', [ClassePrimController::class, 'store'])->name('classes_prim.store');
  Route::get('/adminprimaire/classe/liste', [ClassePrimController::class, 'index'])->name('classes_prim.liste');
  Route::get('/adminprimaire/classe/edit/{id}', [ClassePrimController::class, 'edit'])->name('classes_prim.edit');
  Route::post('/adminprimaire/classe/update/{id}', [ClassePrimController::class, 'update'])->name('classes_prim.update');
  Route::get('/adminprimaire/classe/delete/{id}', [ClassePrimController::class, 'delete'])->name('classes_prim.delete');

 //Route of Eleve
Route::get('/admin/eleve/index', [EleveController::class, 'index'])->name('eleve.index');
Route::get('/admin/eleve/ajout', [EleveController::class, 'create'])->name('eleve.create');
Route::post('/admin/eleve/store', [EleveController::class, 'store'])->name('eleve.store');
Route::get('/admin/eleve/edit/{id}', [EleveController::class, 'edit'])->name('eleve.edit');
Route::post('/admin/eleve/update/{id}', [EleveController::class, 'update'])->name('eleve.update');
Route::get('/admin/eleve/delete/{id}', [EleveController::class, 'delete'])->name('eleve.delete');


 //Route of Eleve primaire
 Route::get('/adminprimaire/eleve/index', [ElevePrimController::class, 'index'])->name('eleve_prim.index');
 Route::get('/adminprimaire/eleve/ajout', [ElevePrimController::class, 'create'])->name('eleve_prim.create');
 Route::post('/adminprimaire/eleve/store', [ElevePrimController::class, 'store'])->name('eleve_prim.store');
 Route::get('/adminprimaire/eleve/edit/{id}', [ElevePrimController::class, 'edit'])->name('eleve_prim.edit');
 Route::post('/adminprimaire/eleve/update/{id}', [ElevePrimController::class, 'update'])->name('eleve_prim.update');
 Route::get('/adminprimaire/eleve/delete/{id}', [ElevePrimController::class, 'delete'])->name('eleve_prim.delete');

/* // Route of inscrire
Route::get('/admin/inscrire/create', [InsciptionController::class, 'create'])->name('inscrire.create');
Route::post('/admin/ajax-autocomplete', [InsciptionController::class,'create'])->name('ajax.select');
 */
// Route of inscrire
Route::get('/admin/inscrire/index', [InsciptionController::class, 'index']);
Route::post('/admin/inscrire/store', [InsciptionController::class, 'store'])->name('inscrire.store');
Route::get('/admin/inscrire/list',[InsciptionController::class, 'show'])->name('inscrire.show');
Route::get('/admin/inscrire/info/{id}', [InsciptionController::class, 'info'])->name('inscrire.info');
Route::get('/admin/inscrire/edit/{id}', [InsciptionController::class, 'edit'])->name('inscrire.edit');
Route::post('/admin/inscrire/update/{id}', [InsciptionController::class, 'update'])->name('inscrire.update');
Route::get('/admin/inscrire/delete/{id}', [InsciptionController::class, 'delete'])->name('inscrire.delete');

// Route of inscrire primaire
Route::get('/adminprimaire/inscrire/index', [InscriptionPrimController::class, 'index']);
Route::post('/adminprimaire/inscrire/store', [InscriptionPrimController::class, 'store'])->name('inscrire_prim.store');
Route::get('/adminprimaire/inscrire/list',[InscriptionPrimController::class, 'show'])->name('inscrire_prim.show');
Route::get('/adminprimaire/inscrire/info/{id}', [InscriptionPrimController::class, 'info'])->name('inscrire_prim.info');
Route::get('/adminprimaire/inscrire/edit/{id}', [InscriptionPrimController::class, 'edit'])->name('inscrire_prim.edit');
Route::post('/adminprimaire/inscrire/update/{id}', [InscriptionPrimController::class, 'update'])->name('inscrire_prim.update');
Route::get('/adminprimaire/inscrire/delete/{id}', [InscriptionPrimController::class, 'delete'])->name('inscrire_prim.delete');

// Route of scolarité
Route::get('/admin/scolarites/index', [ScolariteController::class, 'index']);
Route::get('/admin/scolarites/{eleve_id}', [ScolariteController::class, 'searchs'])->name('search.eleve');
Route::post('/admin/scolarites/store', [ScolariteController::class, 'paiemtStore'])->name('paiemt.store');


// Route of scolarité primaire
Route::get('/adminprimaire/scolarites/index', [ScolaritePrimController::class, 'index']);
Route::get('/adminprimaire/scolarites/{eleve_id}', [ScolaritePrimController::class, 'searchs'])->name('search_prim.eleve');
Route::post('/adminprimaire/scolarites/store', [ScolaritePrimController::class, 'paiemtStore'])->name('paiemt_prim.store');

//route pour notes
Route::get('/admin/notes/index', [NoteController::class, 'index'])->name('noteinfos');
Route::post('paramsnote', [NoteController::class,'precreate'])->name('note.paramsnote');
Route::post('note/sendall', [NoteController::class,'sendall'])->name('note.sendall');
Route::post('note/sendallfin', [NoteController::class,'sendallfin'])->name('note.sendallfin');

Route::post('note/sendnote', [NoteController::class,'sendnote'])->name('note.sendnote');
Route::post('note/sendsemestre', [NoteController::class,'sendsemestre'])->name('note.sendsemestre');



//route pour coefficients
Route::get('/admin/coefs/ajout', [CoefficientController::class, 'create'])->name('coefs.ajout');
Route::post('/admin/coefs/store', [CoefficientController::class, 'store'])->name('coefs.store');
Route::get('/admin/coefs/liste', [CoefficientController::class, 'index'])->name('coefs.liste');
Route::get('/admin/coefs/edit/{id}', [CoefficientController::class, 'edit'])->name('coefs.edit');
Route::post('/admin/coefs/update/{id}', [CoefficientController::class, 'update'])->name('coefs.update');
Route::get('/admin/coefs/delete/{id}', [CoefficientController::class, 'delete'])->name('coefs.delete');

//route pour trimestre
Route::get('/admin/trimestres/liste', [TrimestreController::class, 'index'])->name('trimestres.liste');
Route::get('/admin/trimestres/edit/{id}', [TrimestreController::class, 'edit'])->name('trimestres.edit');
Route::post('/admin/trimestres/update/{id}', [TrimestreController::class, 'update'])->name('trimestres.update');
Route::get('/admin/trimestres/delete/{id}', [TrimestreController::class, 'delete'])->name('trimestres.delete');

