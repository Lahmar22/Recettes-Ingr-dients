<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginContoller extends Controller
{
    public function login(Request $request){

        
        $user = Utilisateur::where('email_user', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email not found');
        }


        if (!Hash::check($request->password, $user->password_user)) {
        return back()->with('error', 'Incorrect password');
    }

    Session::put('user', $user);

    return redirect()->route('home');

    }
}
