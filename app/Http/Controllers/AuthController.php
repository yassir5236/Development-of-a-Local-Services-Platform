<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function showRegisterForm()
{
    return view('auth.register');
}

public function register(Request $request)
{
    // Validation des données
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8',
    ]);

    // Création d'un nouvel utilisateur
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
    ]);

    // Connexion de l'utilisateur après le register
    Auth::login($user);

    // Redirection après le register (par exemple, vers la page d'accueil)
    return redirect('/login');
}

public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    // Validation des données
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Tentative de connexion de l'utilisateur
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Connexion réussie
        return redirect('/services');
    }

    // Échec de la connexion, rediriger avec un message d'erreur
    return redirect('/login')->with('error', 'Adresse email ou mot de passe incorrect.');
}


public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    return redirect('/login');
}
}
