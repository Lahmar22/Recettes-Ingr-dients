<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recete extends Model
{


    protected $fillable = ['titre_recete', 'description', 'image_recete', 'utilisateurs_id'];



    
}
