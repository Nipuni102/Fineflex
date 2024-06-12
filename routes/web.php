<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViolationtypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dash', [App\Http\Controllers\DashController::class, 'dashView'])->name(name: 'dash');
    Route::get('/nfine', [App\Http\Controllers\DashController::class, 'nfineView'])->name(name: 'nfine');
    Route::get('/ofine', [App\Http\Controllers\DashController::class, 'ofineView'])->name(name: 'ofine');
    Route::get('/sfine', [App\Http\Controllers\DashController::class, 'sfineView'])->name(name: 'sfine');

    // Route::get('/vtypess', [App\Http\Controllers\DashController::class, 'vtypesView'])->name(name: 'vtypes');
    Route::get('/cities', [App\Http\Controllers\DashController::class, 'citiesView'])->name(name: 'cities');

    Route::get('/nsr', [App\Http\Controllers\DashController::class, 'nsrview'])->name(name: 'nsr');
    Route::get('/asr', [App\Http\Controllers\DashController::class, 'asrview'])->name(name: 'asr');
    Route::get('/rsr', [App\Http\Controllers\DashController::class, 'rsrview'])->name(name: 'rsr');

    Route::get('/fine/{id}', [DashController::class, 'fineview'])->name('fine');

    Route::get('/addnewvln', [App\Http\Controllers\DashController::class, 'addnewvlnview'])->name(name: 'addnewvln');
    Route::get('/addnewpls', [App\Http\Controllers\DashController::class, 'addnewplsview'])->name(name: 'addnewpls');

    Route::get('/editpls', [App\Http\Controllers\DashController::class, 'editplsview'])->name(name: 'editpls');
    Route::get('/editvln/{id}', [App\Http\Controllers\DashController::class, 'editvlnview'])->name('editvln');


    Route::resource("/vtypes", ViolationtypeController::class);
    Route::post('/vtypesstore', [App\Http\Controllers\ViolationtypeController::class, 'store'])->name(name: 'vtypesstore');
    Route::delete('/vtypesdelete/{id}', [App\Http\Controllers\ViolationtypeController::class, 'destroy'])->name(name: 'vtypesdelete');
    Route::put('/vtypesupdate/{id}', [App\Http\Controllers\ViolationtypeController::class, 'update'])->name(name: 'vtypesupdate');
});


Route::get('/editrqt', [App\Http\Controllers\DashController::class, 'editrqtview'])->name(name: 'editrqt');



require __DIR__.'/auth.php';
