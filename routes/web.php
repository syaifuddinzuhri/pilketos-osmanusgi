<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['guest'])->group(function () {
    // Auth
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.showLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::group(['middleware' => ['auth']], function () {
    // Admin Routes
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['role:adm']], function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
        Route::put('/update/{id}', [AuthController::class, 'update'])->name('auth.update');

        // Master Admin
        // Route::get('/master/export', [AdminController::class, 'export'])->name('master.export');
        // Route::post('/master/import', [AdminController::class, 'import'])->name('master.import');
        // Route::resource('master', AdminController::class);

        // Master Siswa
        Route::get('/student/export', [StudentController::class, 'export'])->name('student.export');
        Route::post('/student/import', [StudentController::class, 'import'])->name('student.import');
        Route::resource('student', StudentController::class);

        // Master Siswa
        Route::get('/teacher/export', [TeacherController::class, 'export'])->name('teacher.export');
        Route::post('/teacher/import', [TeacherController::class, 'import'])->name('teacher.import');
        Route::resource('teacher', TeacherController::class);
    });

    // User Routes
    Route::group(['middleware' => ['role:usr']], function () {
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('user.dashboard');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});