<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Espacios;
use App\Http\Resources\RecursoEspacios;

class ApiEspaciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espacios = Espacios::all();
        return response()->json($Clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user()->tokenCan('create','read')) {
            $nouespai = Espacios::create($request->all());
            $nouespai->save();
            return response()->json($nouespai);
        }
        else {
            return response()->json('El token no te permisos');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Espacios $espacios)
    {
        return response()->json($espacios);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->user()->tokenCan('create','read','update','delete')) {
            $espacio = Espacios::find($id);
            if ($espacio->available == 'true' || $reserva->available == 'false') {
                $espacio->update($request->all());
                $espacio->save();
                return response()->json($espacio);
            }
            else {
                return response()->json('No es pot actualitzar ja que el estat no pot ser aixi');
            }
        }
        else {
            return response()->json('El token no te permisos');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Reservas $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacios $espacio)
    {
        if ($espacio->available == 'true' || $espacio->available == 'false') {
            $reserva->delete();
            return response()->json('comanda eliminada correctament');
        }
        else {
            return response()->json('No es pot eliminar la comanda per el seu estat');
        }
    }

}
