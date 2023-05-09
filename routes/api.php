<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $ReservasController = new ReservasController();
        return $ReservasController->index();
    }
    else {
        return response()->json('El token no te permisos');
    }        
});

Route::middleware(['auth:sanctum', 'verified'])->get('/reservas/{email}', function (Request $request) {
    if ($request->user()->tokenCan('create','read','update','delete')) {
        $ReservasController = new ReservasController();
        return $ReservasController->show($request);
    }
    else {
        return response()->json('El token no te permisos');
    }        
});