<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    protected $fillable=[
        'imageMc',
        'imageLc',
        'imageMg',
        'titreVert1',
        'titre1',
        'slogan1',
        'resume1',
        'image1',
        'titreVert2',
        'titre2',
        'slogan2',
        'resume2',
        'titreVert3',
        'titre3',
        'slogan3',
        'resume3',
        'petiteImage1',
        'slogan4',
        'resume4',
        'petiteImage2',
        'slogan5',
        'resume5',
        'petiteImage3',
        'slogan6',
        'resume6',
        'petiteImage4',
        'slogan7',
        'resume7',
        'slogan8',
        'resume8',
        'video',
        'offre',
        'savoir',
    ];
}
