<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
class SocialiteAuthController extends Controller
{
    public function facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook(){
        // Obtenemos los datos del usuario
        $userfb = Socialite::driver('facebook')->user();
        session()->flash('facebookUser', $userfb);
        // Comprobamos si el usuario ya existe
        if ($user = User::where('email', $userfb->email)->first()) { 
            // Login y redirección
            auth()->login($user);
            return redirect('/'); 
        } else {  
            // En caso de que no exista creamos un nuevo usuario con sus datos.
            $user = User::create([
                'name' => $userfb->name,
                'email' => $userfb->email,
                'password' => str_random(16),
            ]);
            // Login y redirección
            auth()->login($user);
            return redirect('/');
        }
        
    }

    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        // Obtenemos los datos del usuario
        $userGoogle = Socialite::driver('google')->user();
        session()->flash('GoogleUser', $userGoogle);
        // Comprobamos si el usuario ya existe
        if ($user = User::where('email', $userGoogle->email)->first()) { 
            // Login y redirección
            auth()->login($user);
            return redirect('/'); 
        } else {  
            // En caso de que no exista creamos un nuevo usuario con sus datos.
            $user = User::create([
                'name' => $userGoogle->name,
                'email' => $userGoogle->email,
                'password' => str_random(16),
            ]);
            // Login y redirección
            auth()->login($user);
            return redirect('/');
        }
        
    }
}
