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
        return view('reservas', ['reservas'=>Reservas::all()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reservas $reserva)
    {
        return view('showreserva', ['reserva'=>$reserva]);
    }

    public function edit(Reservas $reserva)
    {
        return view('gestionreserva', ['reserva'=>$reserva]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservas $reserva)
    {
        $reserva->update($request->all());
        return redirect('reservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Reservas $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservas $reserva)
    {
        $reserva->delete();
        return redirect('reservas');
    }
}
