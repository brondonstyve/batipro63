<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propo extends Model
{
    use HasFactory;
    protected $fillable=[
        'email1',
        'email2',
        'telephone1',
        'telephone2',
        'bureau', 
        'depot', 
        'annee_experience',
        'description',
        'dg',        
        'image',        
        'facebook',
        'twitter',
        'instagram',
        'linkedin',

        'descriptionEnt',
        'imageEnt',

        'anneeCreat',
        'resume',
        'titre',
        
        'imageB1',
        'imageB2',
        'imageC1',

        'resume2',
        'titre2',
        'description2',

        'titre3',
        'description3',
        'nombre3',

        'titre4',
        'description4',
        'nombre4',


        'description5',

        'titre6',
        'description6',
        'resume6',
    ];
}
