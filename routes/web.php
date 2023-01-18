<?php

use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Usuarios */
Route::resource('usuarios', UsuariosController::class)->middleware(['auth']);
/* Roles */
Route::resource('roles', RoleController::class)->middleware(['auth']);
/* Categorias de muestras */
Route::resource('categories', CategoryController::class)->middleware(['auth']);
/* Subcategorias de muestras */
Route::resource('subcategories', SubCategoryController::class)->middleware(['auth']);
Route::get('subcategories/category/{id}',[SubCategoryController::class, 'bycategory'])->name('subcategories.bycategory');
/* Instituciones */
Route::resource('institutions', InstitutionController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
