<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicepage extends Model
{
    use HasFactory;
    protected $fillable=['description','descriptionEnt','surface','imageEnt','projetnb'] ;
}
