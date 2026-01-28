<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        Utilisateur::create([
            'nom_user' => $request->nom,
            'prenom_user' => $request->prenom,
            'specialty_user' => $request->spescialise,
            'email_user' => $request->email,
            'password_user' => Hash::make($request->password),
        ]);

        return redirect('/login');
 
    }
}
