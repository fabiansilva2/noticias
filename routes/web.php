<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;


Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware('auth')->group(function() {
    Route::resource('noticias', NoticiaController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



// <?php

// use App\Http\Controllers\NoticiaController;
// use App\Models\Noticia;
// use Illuminate\Support\Facades\Route;


// /*|--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// /*Route::get('/', function () {
//      return view('welcome');
//  });

//  Route::get('/teste', function () {
//     return view('noticias.teste');
// });*/

// use App\Http\Controllers\NoticiaController;


// Route::get('noticias', [NoticiaController::class, 'index']);
// Route::get('noticias/create', [NoticiaController::class, 'create']);
// Route::post('noticias', [NoticiaController::class, 'store']); 
// Route::get('noticias/{noticia}/edit', [NoticiaController::class, 'edit']);
// Route::put('noticias/{noticia}', [NoticiaController::class, 'update']);
// Route::delete('noticias/{noticia}', [NoticiaController::class, 'destroy']);


// Route::post('noticias/teste', [NoticiaController::class, 'teste']);

// Route::resource('noticias', NoticiaController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

