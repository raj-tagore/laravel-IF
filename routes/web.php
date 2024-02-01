<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/diagrams', [App\Http\Controllers\DiagramsController::class, 'index']);
Route::get('/diagram{id}', [App\Http\Controllers\DiagramsController::class, 'diagramCategory']);
Route::get('/diaunit{uid}', [App\Http\Controllers\DiagramsController::class, 'showDiagram']);
Route::get('/businesses', [App\Http\Controllers\BusinessesController::class, 'index']);
Route::get('/business{id}', [App\Http\Controllers\DiagramCategoryController::class, 'index']);
Route::get('/requirements', [App\Http\Controllers\RequirementsController::class, 'index']);
Route::get('/weighcount', [App\Http\Controllers\WeighCountController::class, 'index']);
Route::get('/dialist{tableid}', [App\Http\Controllers\WeighCountController::class, 'dialist']);
Route::get('/lenlist!{tableid}!{diaid}', [App\Http\Controllers\WeighCountController::class, 'lenlist']);
Route::get('/values!{tableid}!{diaid}!{lenid}!{value}', [App\Http\Controllers\WeighCountController::class, 'values']);    

