<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terrain extends Model
{
    use HasFactory;
    protected $fillable=['libelle','annee','superficie','description','lieu','image','img_principale','service','statut'];

}
