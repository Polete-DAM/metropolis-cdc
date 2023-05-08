<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Comandes = Comanda::all();
        return response()->json($Comandes);
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
            $novacomanda = Comanda::create($request->all());
            $novacomanda->save();
            return response()->json($novacomanda);
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
    public function show(Comanda $comanda)
    {
        return response()->json($comanda);
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
            $comanda = Comanda::find($id);
            if ($comanda->estat == 'Pendent' || $comanda->estat == 'Acceptada' || $comanda->estat == 'Cancelada' || $comanda->estat == 'Tancada') {
                $comanda->update($request->all());
                $comanda->save();
                return response()->json($comanda);
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
     * @param \App\Models\Comanda $comanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comanda $comanda)
    {
        if ($comanda->estat == 'Pendent' || $comanda->estat == 'Cancelada') {
            $comanda->delete();
            return response()->json('comanda eliminada correctament');
        }
        else {
            return response()->json('No es pot eliminar la comanda per el seu estat');
        }
    }

}
