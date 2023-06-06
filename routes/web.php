<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\EspaciosController;

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
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('espacios', [EspaciosController::class,'index'])->name('espacios');
    Route::get('reservas', [ReservasController::class,'index'])->name('reservas');
});


Route::get('reservas/{reserva}', [ReservasController::class,'show']);


Route::middleware('auth')->group(function () {
    Route::get('reservas/{reserva}/gestion', [ReservasController::class,'edit']);
    Route::put('reservas/{reserva}', [ReservasController::class,'update']);
    Route::delete('reservas/{reserva}', [ReservasController::class,'destroy']);
});


Route::get('espacios/{espacio}', [EspaciosController::class,'show']);

Route::middleware('auth')->group(function () {
    Route::get('espacios/{espacio}/edit', [EspaciosController::class,'edit']);
    Route::put('espacios/{espacio}', [EspaciosController::class,'update']);
    Route::delete('espacios/{espacio}', [EspaciosController::class,'destroy']);
});


/*Route::middleware(['auth:sanctum', 'verified'])->get('/reservas', function (Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $ReservasController = new ReservasController();
        return $ReservasController->index();
    }
    else {
        return response()->json('El token no te permisos');
    }        
});*/
