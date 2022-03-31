<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use routes\web;
use App\Models\starwars;
class starController extends Controller
{
    //
    public function submit(Request $datos){

        $Nombre = $datos->name;
    }
    //OBTENER API




    public function index()
    {
        return view ('index');
    }
    
    public function generic()
    {
        $starwars = Starwars::all();
        $informacion = [];
        foreach ($starwars as $star) {
            $informacion[] = [
                'name' => $star->name,
                'colour' => $star->colour,
                'weapon' => $star->weapon,
                'planet' => $star->planet,
                'image' => $star->image,
            ];
        }
        
        return view ('generic', ['informacion' => $informacion]);

    }
    public function elements()
    {
        return view ('elements');
    }


}
