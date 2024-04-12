<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CatergoryController;
use App\Http\Controllers\ProfileController;
use App\Models\Catergory;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('category', [CatergoryController::class, 'store'])->name('category.store');
Route::get('/main', [ApplicationController::class, 'index'])->name('main');
Route::get('/admin', [ApplicationController::class, 'admin'])->name('admin');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('/registerflow', function () {
//     return view('registerflowbite');
// });

require __DIR__ . '/auth.php';
