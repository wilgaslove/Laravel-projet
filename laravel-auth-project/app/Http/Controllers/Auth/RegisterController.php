<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view("auth.register");
    }

    public function store(Request $request) {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required",
        ]);

        $user = user::create([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required",
        ]);
        return response()->json($user, 201);
    }
    /*200-299 les réponses de succès
     201 204 
     300-399 les messages de redirection
     301 302 changement temporaire
     400-499: les erreurs du clients
     401 Unauthorized: le client doit s'authentifier d'abord pour accéder à la resource 
     403 forbidden: le client n'a pas le droits d'accès
     404 Not found: le serveur n'a pas trouver le fihcier ou la resource demandée 
     500-599 les erreurs du serveur
     500 internal server error: leserveur à un problème ou il ne peut traiter

      */
}
