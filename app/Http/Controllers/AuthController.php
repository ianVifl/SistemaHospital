<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('modules.auth.login');
    }


    public function logear(Request $request){
        /**validacion de credneciales */
        $credenciales = $request ->validate([
            //pedimos el email este sea requerido y que sea valido 'email'
            'email' => 'required|email',
            // es requerido
            'password'=> 'required'
        ]);
        //busca que el email sea valido y lo encuetre 
        $user = User::where('email',$request ->email)-> first();

        //vcalidar usuario y contraseña 
        if(!$user || !Hash::check($request -> password, $user->password)){
            return back()->withErrors(['email' => 'Credencial incorrecta'])-> withInput();
        }
        //el usuario esta activo
        if(!$user ->activo){
            return back()-> withErrors(['email' => 'Tu cuenta esta inactiva']);
        }
        //creacion de la sesion exitosa
        FacadesAuth::login($user);
        $request-> session()->regenerate();

        return to_route('home');
    }

    //admin == doctor
    public function crearAdmin(){
        User::create([
            'name'=>'Ian Villamil',
            'email'=>'admin@admin.com',
            'password' => Hash::make('admin'),
            'activo'=> true,
            'rol'=> 'doctor'//admin
        ]);

        return "Admin creado con exito!!";
    }




    public function logout(){
        FacadesAuth::logout();
        return to_route('login');
        
    }







}
