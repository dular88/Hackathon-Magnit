<?php

use App\Models\Hackathon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HackathonController;

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
    $questionData = Hackathon::all();
    return view('welcome', compact('questionData'));
});
Route::post('/saveSurvey', [HomeController::class, 'index'])->name('saveSurvey');

Auth::routes();



Route::get('/home', [HackathonController::class, 'home'])->name('home');
Route::get('/happinessReport', [HackathonController::class, 'happinessReport'])->name('happinessReport');
Route::get('/addQuestion', [HackathonController::class, 'index'])->name('addQuestion');
Route::get('/editQuestion/{id}', [HackathonController::class, 'editQuestion'])->name('editQuestion');
Route::post('/saveQuestion', [HackathonController::class, 'saveQuestion'])->name('saveQuestion');
Route::put('/updateQuestion/{id}', [HackathonController::class, 'updateQuestion'])->name('updateQuestion');
Route::delete('/deleteQuestion/{id}', [HackathonController::class, 'deleteQuestion'])->name('deleteQuestion');

