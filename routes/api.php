<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// Route pour le login
Route::post('/login',[UserController::class,'login']);

// Route pour le logout
Route::get('/logout',[UserController::class,'logout']);

// Route qui va retourner la list des Questions.
Route::get('/questionList',[QuestionController::class,'index']);

// Route pour recuperer la list des  Responses.
Route::get('/responseList',[ResponseController::class,'index']);

// Route pour soumettre les responses.
Route::post('/submitResponses', [ResponseController::class,'store']);

// Route pour afficher les réponses de l'utilisateur
Route::get('/getResponse/{code}',[ResponseController::class,'show']);

// Route pour les digrammes en Pie charts pour les question 6
Route::get('/PieCharts',[ChartController::class,'pieCharts']);


// Route pour les digrammes en Pie charts  pour les question 7
Route::get('/PieCharts7',[ChartController::class,'PieCharts7']);


// Route pour les digrammes en Pie charts  pour les question 10
Route::get('/PieCharts10',[ChartController::class,'PieCharts10']);