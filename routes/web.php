<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\PolicestationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViolationtypeController;
use App\Models\Policestation;
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
   
    Route::get('/search','DashController@search');
    // Route::get('/vtypess', [App\Http\Controllers\DashController::class, 'vtypesView'])->name(name: 'vtypes');
   // Route::get('/cities', [App\Http\Controllers\DashController::class, 'citiesView'])->name(name: 'cities');

    Route::get('/nsr', [App\Http\Controllers\DashController::class, 'nsrview'])->name(name: 'nsr');
   
    Route::get('/fine/{id}', [DashController::class, 'fineview'])->name('fine');

    Route::get('/addnewvln', [App\Http\Controllers\DashController::class, 'addnewvlnview'])->name(name: 'addnewvln');
    Route::get('/addnewpls', [App\Http\Controllers\DashController::class, 'addnewplsview'])->name(name: 'addnewpls');

    Route::get('/editpls/{id}', [App\Http\Controllers\DashController::class, 'editplsview'])->name(name: 'editpls');
    Route::get('/editvln/{id}', [App\Http\Controllers\DashController::class, 'editvlnview'])->name('editvln');

    Route::resource("/cities", PolicestationController::class);
    Route::post('/citiesstore', [App\Http\Controllers\PolicestationController::class, 'store'])->name(name: 'citiesstore');
    Route::delete('/citiesdelete/{id}', [App\Http\Controllers\PolicestationController::class, 'destroy'])->name(name: 'citiesdelete');
    Route::put('/citiesupdate/{id}', [App\Http\Controllers\PolicestationController::class, 'update'])->name(name: 'citiesupdate');

    Route::resource("/vtypes", ViolationtypeController::class);
    Route::post('/vtypesstore', [App\Http\Controllers\ViolationtypeController::class, 'store'])->name(name: 'vtypesstore');
    Route::delete('/vtypesdelete/{id}', [App\Http\Controllers\ViolationtypeController::class, 'destroy'])->name(name: 'vtypesdelete');
    Route::put('/vtypesupdate/{id}', [App\Http\Controllers\ViolationtypeController::class, 'update'])->name(name: 'vtypesupdate');

    Route::get('/editrqt/{id}', [App\Http\Controllers\DashController::class, 'editrqtview'])->name(name: 'editrqt');
    Route::put('/editrqtupdate/{id}', [App\Http\Controllers\DashController::class, 'update'])->name(name: 'editrqtupdate');

    Route::get('/pay', [App\Http\Controllers\DashController::class, 'payview'])->name(name: 'pay');

});


use Illuminate\Support\Facades\Mail;
use App\Mail\CustomMail;

Route::get('/test-email', function () {
    $details = [
        'title' => 'Test Email',
        'body' => 'This is a test email sent using a GET method in web.php.',
    ];

    Mail::to('lahirusashika@gmail.com')->send(new CustomMail($details));

    return 'Test email sent successfully!';
});


require __DIR__.'/auth.php';
