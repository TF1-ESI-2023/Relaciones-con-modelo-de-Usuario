<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Videojuego;
class VideojuegoController extends Controller
{
    public function Crear(Request $request){
        $v = new Videojuego();
        $v -> nombre = $request -> post("nombre");
        $v -> genero = $request -> post("genero");
        $v -> anio = $request -> post("anio");

        $v -> save();

        return redirect("/videojuego")->with("creado",true);

    }

    public function Listar(Request $request){

        return view("listarVideojuego",[ 
            'videojuegos' => Videojuego::all()
        ]);

    }
}
