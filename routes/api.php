<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiReservasController;
use App\Models\Reservas;
use App\Http\Controllers\ApiEspaciosController;
use App\Models\Espacios;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/reservas', function (Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $ReservasController = new ApiReservasController();
        return $ReservasController->index();
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/reservas/{email}', function ($email, Request $request) {
    if ($request->user()->tokenCan('create','read')) {
        $ReservasController = new ApiReservasController();
        $reserva = App\Models\Reservas::where('email', $email)->get();
        return response()->json($reserva);
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/espacios', function (Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $EspaciosController = new ApiEspaciosController();
        return $EspaciosController->index();
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/cliente/espacios', function (Request $request) {
    if ($request->user()->tokenCan('create','read')) {
        $EspaciosController = new ApiEspaciosController();
        return $EspaciosController->index();
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/espacios/{espacio}', function ($id, Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $EspaciosController = new ApiEspaciosController();
        $espacio = App\Models\Espacios::find($id);
        return $EspaciosController->show($espacio);
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/cliente/espacios/{espacio}', function ($id, Request $request) {
    if ($request->user()->tokenCan('create','read')) {
        $EspaciosController = new ApiEspaciosController();
        $espacio = App\Models\Espacios::find($id);
        return $EspaciosController->show($espacio);
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::apiResource('espacios',ApiEspaciosController::class);

Route::middleware(['auth:sanctum', 'verified'])->post('/reservas', [ApiReservasController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->delete('/reservas/{reserva}', [ApiReservasController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->put('/reservas/{reserva}/cancel', [ApiReservasController::class, 'cancel']);
Route::apiResource('reservas', ApiReservasController::class);