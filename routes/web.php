<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HolidayController;
use App\Http\Controllers\NoteController;

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

Route::get('/', [HolidayController::class, 'index'])->name('index');
Route::get('/product', [HolidayController::class, 'viewList'])->name('holiday.list');
Route::get('/product/{id}', [HolidayController::class, 'viewDetail'])->name('holiday.detail');

Route::get('/holiday-planner/form', [HolidayController::class, 'holidayPlanner'])->name('holiday.planner');
Route::get('/holiday-planner', [HolidayController::class, 'viewPlanner'])->name('holiday.plan');
Route::patch('/holiday-planner/{id}/edit', [HolidayController::class, 'updatePlanner'])->name('edit.plan');

Route::get('/notes/create', [NoteController::class, 'index']);
Route::post('/notes/create', [NoteController::class, 'store'])->name('create-note');

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});