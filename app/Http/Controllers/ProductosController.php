<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return "Estas en productos";
    }
    
    public function comida(){
        return "Estas en productos y comida";
    }

    public function adultos($tratamet){
        if($tratamet == "tratamiento"){
            return "Estas en productos, comida, y tratamiento";
        }
        elseif ($tratamet == "suplementos") {
            return "Estas en productos, comida, y tratamiento";
        } else {
            return "Estas en productos, comida, y otros";
        }
        
       
    }
    
}
