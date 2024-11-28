<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, "login"]);
Route::get('/add-to-do-list', [HomeController::class, 'add']);
Route::post('/add-to-do-list', [HomeController::class, 'store'])->name('add');
Route::delete('/delete-to-do-list/{id}', [HomeController::class, 'destroy'])->name('delete');
Route::get('/to-do-list-update/{id}', [HomeController::class, 'show'])->name('show.update');
Route::put('/to-do-list-update/{id}', [HomeController::class, 'update'])->name('update');
 
Route::apiResource('/list-siswa', StudentController::class);

route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

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
});

require __DIR__.'/auth.php';
