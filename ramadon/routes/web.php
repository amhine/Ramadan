<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\StatistiqueController;
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
Route::get('/recettes', [RecetteController::class, 'index']);
Route::get('/formrecettes', [RecetteController::class, 'create']);
Route::post('/formstor', [RecetteController::class, 'store']);  
Route::get('/recettes/entrees', [RecetteController::class, 'entrees']);
Route::get('/recettes/plats', [RecetteController::class, 'plats']);
Route::get('/recettes/desserts', [RecetteController::class, 'desserts']);


Route::get('/experiences', [ExperienceController::class, 'index']);
Route::get('/formexperience', [ExperienceController::class, 'create']);
Route::post('/exformstor', [ExperienceController::class, 'store']); 

Route::get('/formcomment/{id}', [CommentController::class, 'showCommentForm']);
Route::post('/comment', [CommentController::class, 'store']);


Route::get('/statistique', [StatistiqueController::class, 'index']);

Route::get('/', function () {
 return view('welcome');
}
);
