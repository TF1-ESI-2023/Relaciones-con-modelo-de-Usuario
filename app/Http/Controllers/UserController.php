<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Register(Request $request){
        $u = new User();
        $u -> name = $request -> post("username");
        $u -> email = $request -> post("email");
        $u -> password = Hash::make($request -> post("password"));
        $u -> rol_id = 1;
        $u -> save();

        return redirect("/login")-> with("created",true);

    }


    public function Login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
            return redirect("/");
        return redirect("/login")->with("failed",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/login")->with("logout",true);
    }

    public function Home(Request $request){
        if(Auth::check()){
            $videojuegos = Auth::user() -> Juega() -> get();
            return view("inicio",["videojuegos" => $videojuegos]);
        }
        return view("inicio");

    }
}
