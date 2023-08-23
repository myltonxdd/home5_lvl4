<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdadesController extends Controller
{
    public function index(){
        return "Estas en edades index";
    }
    
    public function cachorros(){
        return "Estas en edades y cachorro";
    }

    public function adultos(){
        return "Estas en edades, cachorro, y adultos";
    }

}
