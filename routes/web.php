<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/1', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//route accueil pour les visiteurs
Route::get('/', 'VisiteurController@index')->name('portail');

Route::get('/actualites', 'VisiteurController@actualite');


Route::post('utilsateur', 'UtilisateurController@create')->name('ajouter');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() {
    Route::resource('users', 'UsersController');
    Route::resource('user', 'ManagerController');
    Route::resource('personnels', 'PersonnelsController');
});

Route::namespace('Secretariat')->prefix('secreta')->group(function() {
    Route::resource('cahier', 'SecretaireController');
     
});
 
Route::namespace('Communication')->prefix('com')->group(function() {
    Route::resource('events', 'EventsController');
    Route::resource('categories', 'CategoriesController');
});
