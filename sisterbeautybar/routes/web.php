<?php

use Illuminate\Support\Facades\Route;



// Route::fallback (function () {
//     return view('notfound');
// });


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

Route::get('/', function () {
    return view('welcome');
});

// use App\Http\Controllers\HomeController;
// Route::get('/', [HomeController::class, 'index']);


// use App\Http\Controllers\AboutController;
// Route::get('/about', [AboutController::class, 'index'])->name('about');


