<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    

        
    protected $fillable = ['nom_user', 'prenom_user', 'specialty_user', 'email_user', 'password_user'];

        
}


