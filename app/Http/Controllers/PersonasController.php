<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("plantilla");
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $body)
    {
        $nuevaPersona = new Personas();
        $nuevaPersona->nombre_person = $body->nombre_person;
        $nuevaPersona->save();
        return "La persona fue creada OK"        ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $body, $id)
    {
        $edita = Personas::find($id);

        $edita->nombre_person = $body->nombre_person;
        $edita->save();

        return "El registro fue actualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Personas::destroy($id);
        return "El registro se elimino correctamente";
    }
}
