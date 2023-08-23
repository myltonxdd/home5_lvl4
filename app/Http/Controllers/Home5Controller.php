<?php

namespace App\Http\Controllers;

use App\Models\home5;
use Illuminate\Http\Request;

class Home5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("home5day");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $body)
    {
        $nuevaPersona = new home5();
        $nuevaPersona->nombre = $body->nombre;
        $nuevaPersona->apellido = $body->apellido;
        $nuevaPersona->email = $body->email;
        $nuevaPersona->password = $body->password;
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
    public function show(home5 $home5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home5 $home5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, home5 $home5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(home5 $home5)
    {
        //
    }
}
