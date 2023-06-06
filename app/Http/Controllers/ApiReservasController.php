<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservas;

class ApiReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reservas::all();
        return response()->json($reservas);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newReserva = Reservas::create([
            'event' => $request->input('event'),
            'email' => $request->input('email'),
            'company_name' => $request->input('company_name'),
            'space' => $request->input('space'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'n_attendees' => $request->input('n_attendees'),
            'n_bus_pass' => $request->input('n_bus_pass'),
            'n_staff_pass' => $request->input('n_staff_pass'),
            'n_parking_pass' => $request->input('n_parking_pass'),
            'accepted' => $request->input('accepted'),
        ]);

        $reservaArray = $newReserva->toArray();

        // Return the response as an array
        return response(["Reserva creada exitosament"]);
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reservas $reserva)
    {
      
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
        $reserva->delete();
        return response()->json('reserva eliminada correctament'); 
    }

}
