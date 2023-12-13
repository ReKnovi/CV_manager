<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\ProfileController;
use App\Models\Cv;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //|CV SECTION |
    Route::get('/add-cv', [CvController::class, 'addCv'])->name('add.cv');
    Route::post('/store', [CvController::class, 'store'])->name('store.cv');
    Route::get('/view-my-cv/{id}', [CvController::class, 'viewMyCv'])->name('view.my.cv');
    Route::post('/search-cvs', [CvController::class, 'search'])->name('search.cvs');
});
//admin panel
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/view-all-cvs', [AdminController::class, 'viewAllCvs'])->name('admin.view_all_cvs');
    Route::get('/individualcv/{id}', [AdminController::class, 'showIndividualCvs'])->name('admin.individual_cv');
    Route::post('/search-cvs', [AdminController::class, 'searchCvs'])->name('admin.search_cvs');
});

require __DIR__ . '/auth.php';

Auth::routes();
