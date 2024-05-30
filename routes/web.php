<?php

use App\Http\Controllers\HomeController;
use App\Livewire\FormPacientes;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('signout', [HomeController::class, 'signout'])->name('signout');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/calendario-citas', [HomeController::class, 'calendarioCitas'])->name('calendario-citas');
    Route::get('/new-patient', [HomeController::class, 'newPatient'])->name('new-patient');
    Route::get('/agendar-cita', [HomeController::class, 'agendarCita'])->name('agendar-citas');
    Route::middleware(\App\Http\Middleware\CheckAdminRole::class)->group(function () {
        Route::get('/form-usuarios', [HomeController::class, 'showFormUsuarios'])->name('form-usuarios');
        Route::get('/form-instituciones-medicas', [HomeController::class, 'showFormInstitucionesMedicas'])->name('form-instituciones-medicas');
        Route::get('/form-departamentos', [HomeController::class, 'showFormDepartamentos'])->name('form-departamentos');
    });
});
