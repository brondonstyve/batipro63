<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mgpage extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre','description','description2','image','imageEnt'  
      ];
}