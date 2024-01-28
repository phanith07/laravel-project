<?php

use App\Http\Controllers\SubjectController;
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
    return view("layout.master");
});
Route::prefix('/subject')->group(function () {
    Route::get('/', [SubjectController::class, 'search']);
    Route::get('/add', function () {
        return view('subject.subject-add');
    });
    Route::post('/create', [SubjectController::class, 'create'])->name("subject.create");
    Route::get('/edit/{id}', [SubjectController::class, 'find']);
    Route::put('/update/{id}', [SubjectController::class, 'update'])->name('subject.update');
    Route::get('/show/{id}', [SubjectController::class, 'show']);
    Route::put('/delete/{id}', [SubjectController::class, 'delete'])->name('subject.delete');
});
Route::get('/student', function () {
    return view('student.student-list');
});
