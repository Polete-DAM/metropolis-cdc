<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservas;
use Illuminate\Support\Facades\DB;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscador=trim($request->get('buscador'));
        $reservas=DB::table('reservas')
                    ->select('id','event','email','company_name','space','accepted')
                    ->where('event','LIKE','%'.$buscador.'%')
                    ->orWhere('email','LIKE','%'.$buscador.'%')
                    ->orWhere('company_name','LIKE','%'.$buscador.'%')
                    ->orWhere('space','LIKE','%'.$buscador.'%')
                    ->orWhere('accepted','LIKE','%'.$buscador.'%')
                    ->paginate(10);
        return view('reservas', compact('reservas','buscador'));
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
