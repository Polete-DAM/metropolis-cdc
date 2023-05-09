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

Route::middleware(['auth:sanctum', 'verified'])->get('/reservas/{reserva}', function ($id, Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $ReservasController = new ApiReservasController();
        $reserva = App\Models\Reservas::find($id);
        return $ReservasController->show($reserva);
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/espacios', function (Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $EspaciosController = new ApiEspaciosController();
        return $EspaciosController->index();
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/espacios/{espacio}', function ($id, Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $EspaciosController = new ApiEspaciosController();
        $espacio = App\Models\Espacios::find($id);
        return $EspaciosController->show($espacio);
    }
    else {
        return response()->json('El token no te permisos');
    }        
});