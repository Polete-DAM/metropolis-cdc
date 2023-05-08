<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservas;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Reservas = Reservas::all();
        return response()->json($Reservas);
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
            $novareserva = Reservas::create($request->all());
            $novareserva->save();
            return response()->json($novareserva);
        }
        else {
            return response()->json('El token no te permisos');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Comanda $comanda
     * @return \Illuminate\Http\Response
     */
    public function show(Reservas $reserva)
    {
        return response()->json($reserva);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Comanda $comanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->user()->tokenCan('create','read','update','delete')) {
            $reserva = Reservas::find($id);
            if ($reserva->estado == 'Pendent' || $reserva->estado == 'Acceptada' || $reserva->estado == 'Cancelada' || $reserva->estado == 'Tancada') {
                $reserva->update($request->all());
                $reserva->save();
                return response()->json($reserva);
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
    public function destroy(Reservas $reserva)
    {
        if ($reserva->estado == 'Pendent' || $reserva->estado == 'Cancelada') {
            $reserva->delete();
            return response()->json('comanda eliminada correctament');
        }
        else {
            return response()->json('No es pot eliminar la comanda per el seu estat');
        }
    }

}
