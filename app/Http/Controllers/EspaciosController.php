<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espacios;

class EspaciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('espacios', ['espacios'=>Espacios::all()]);
    }


    public function create()
    {
        //return view('createespacios'); no funcionaba así que scrapped
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'nombre' => 'required|unique:espacios',
        'area' => 'required',
        'capacidad' => 'required',
        'disponibilidad' => 'required',
        'imagen_url' => 'required'
       ]);

        $espacio = new Espacios();
        $espacio->nombre = $request->input('nombre');
        $espacio->area = $request->input('area');
        $espacio->capacidad = $request->input('capacidad');
        $espacio->disponibilidad = $request->input('disponibilidad');
        $espacio->imagen_url = $request->input('imagen_url');
        $espacio->save();

        return view('espacios');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Reserva $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Espacios $espacio)
    {
        return view('showespacio', ['espacio'=>$espacio]);
    }

    public function edit(Espacios $espacio)
    {
        return view('editespacio', ['espacio'=>$espacio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Espacios $espacio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Espacios $espacio)
    {
        $espacio->update($request->all());
        return redirect('espacios');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Reservas $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacios $espacio)
    {
        $espacio->delete();
        return redirect('espacios');
    }
}