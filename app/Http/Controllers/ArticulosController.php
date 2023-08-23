<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Productoss;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index(){
        return view("articulos.index");
    }
    
    public function juegos(){
        return Productoss::all();
    }

    public function vestimenta(){
        return "Estas en articulos, juegos, y vestimenta";
    }

}
