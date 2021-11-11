<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    use HasFactory;
    protected $fillable=['libelle','annee','duree','description','lieu','entreprise','image','img_principale','service','superficie','projet_principal'];
}
