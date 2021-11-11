<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actualite extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre',
        'domaine',
        'auteur',
        'desc_auteur',
        'image',
        'titre1',
        'article1',
        'image1',
        'video1',
        'titre2',
        'article2',
        'image2',
        'video2',
        'titre3',
        'article3',
        'image3',
        'video3',
        'titre4',
        'article4',
        'image4',
        'video4',
        'titre5',
        'article5',
        'image5',
        'video5'
    ];
}
