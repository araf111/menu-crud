<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/organization/list', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('organization.list.get');
    Route::post('/organization/list', [App\Http\Controllers\MasterController::class, 'dataTableList'])->name('organization.list');
    Route::post('/organization-store', [App\Http\Controllers\MasterController::class, 'store'])->name('organization.store');
    Route::get('/organization-edit', [App\Http\Controllers\MasterController::class, 'edit'])->name('organization.edit');
    Route::get('/organization-show', [App\Http\Controllers\MasterController::class, 'show'])->name('organization.show');
    Route::post('/organization-update', [App\Http\Controllers\MasterController::class, 'update'])->name('organization.update');
    Route::delete('/organization/delete/{id}', [App\Http\Controllers\MasterController::class, 'destroy'])->name('organization.delete');

    // Menu Route
    Route::get('/menu-index', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
    Route::post('/menu-lists', [App\Http\Controllers\MenuController::class, 'menuList'])->name('menu.list');
    Route::post('/menu-store', [App\Http\Controllers\MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu-edit', [App\Http\Controllers\MenuController::class, 'edit'])->name('menu.edit');
    Route::post('/menu-update', [App\Http\Controllers\MenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu/delete/{id}', [App\Http\Controllers\MenuController::class, 'destroy'])->name('menu.delete');

    // SubMenuOneController Route
    Route::get('/sub-menu-one-lists', [App\Http\Controllers\SubMenuOneController::class, 'index'])->name('sub-menu-one.index');
    Route::post('/sub-menu-one-data-lists', [App\Http\Controllers\SubMenuOneController::class, 'menuList'])->name('one.data.lists');
    Route::post('/sub-menu-one-create', [App\Http\Controllers\SubMenuOneController::class, 'create'])->name('sub-menu-one.create');
    Route::post('/sub-menu-one-store', [App\Http\Controllers\SubMenuOneController::class, 'store'])->name('sub-menu-one.store');
    Route::get('/sub-menu-one-edit', [App\Http\Controllers\SubMenuOneController::class, 'edit'])->name('sub-menu-one.edit');
    Route::post('/sub-menu-one-update', [App\Http\Controllers\SubMenuOneController::class, 'update'])->name('sub-menu-one.update');
    Route::delete('/sub-menu-one/delete/{id}', [App\Http\Controllers\SubMenuOneController::class, 'destroy'])->name('sub-menu-one.delete');

    // SubMenuTwoController Route
    Route::get('/sub-menu-two-lists', [App\Http\Controllers\SubMenuTwoController::class, 'index'])->name('sub-menu-two.index');
    Route::post('/sub-menu-two-data-lists', [App\Http\Controllers\SubMenuTwoController::class, 'menuList'])->name('two.data.lists');
    Route::post('/sub-menu-two-create', [App\Http\Controllers\SubMenuTwoController::class, 'create'])->name('sub-menu-two.create');
    Route::post('/sub-menu-two-store', [App\Http\Controllers\SubMenuTwoController::class, 'store'])->name('sub-menu-two.store');
    Route::get('/sub-menu-two-edit', [App\Http\Controllers\SubMenuTwoController::class, 'edit'])->name('sub-menu-two.edit');
    Route::post('/sub-menu-two-update', [App\Http\Controllers\SubMenuTwoController::class, 'update'])->name('sub-menu-two.update');
    Route::delete('/sub-menu-two/delete/{id}', [App\Http\Controllers\SubMenuTwoController::class, 'destroy'])->name('sub-menu-two.delete');
    Route::get('/sub-menu-one/filter', [App\Http\Controllers\SubMenuTwoController::class, 'menuFilter'])->name('sub-menu-one.filter');

    // SubMenuTwoController Route
    Route::get('/sub-menu-three-lists', [App\Http\Controllers\SubMenuThreeController::class, 'index'])->name('sub-menu-three.index');
    Route::post('/sub-menu-three-data-lists', [App\Http\Controllers\SubMenuThreeController::class, 'menuList'])->name('three.data.lists');
    Route::post('/sub-menu-three-create', [App\Http\Controllers\SubMenuThreeController::class, 'create'])->name('sub-menu-three.create');
    Route::post('/sub-menu-three-store', [App\Http\Controllers\SubMenuThreeController::class, 'store'])->name('sub-menu-three.store');
    Route::get('/sub-menu-three-edit', [App\Http\Controllers\SubMenuThreeController::class, 'edit'])->name('sub-menu-three.edit');
    Route::post('/sub-menu-three-update', [App\Http\Controllers\SubMenuThreeController::class, 'update'])->name('sub-menu-three.update');
    Route::delete('/sub-menu-three/delete/{id}', [App\Http\Controllers\SubMenuThreeController::class, 'destroy'])->name('sub-menu-three.delete');
    Route::get('/sub-menu-two/filter', [App\Http\Controllers\SubMenuThreeController::class, 'menuFilter'])->name('sub-menu-two.filter');
});
