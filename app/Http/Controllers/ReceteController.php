<?php

namespace App\Http\Controllers;

use App\Models\Recete;
use Illuminate\Http\Request;

class ReceteController extends Controller
{
    public function show(){
        $recetes = Recete::all();
        return view('recete', compact('recetes'));
    }

    public function create(Request $r){

        Recete::create(['titre_recete' => $r->titre, 
                                'description' => $r->description,
                                'image_recete' => $r->image, 
                                'utilisateurs_id' => $r->id_user
        ]);
        
        return redirect('recete');

       
    }
}
