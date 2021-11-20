<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

class Image{
    public static function traitement($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/projet/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementP($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/terrain/';
        $img->save($path.$name);
        return $name;
    }


    public static function traitementA($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/actualite/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementS($image, $format){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/maison/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementM($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/membre/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementMV($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/maison/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementHome($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/accueil/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementPropos($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/apropos/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementService($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/service/';
        $img->save($path.$name);
        return $name;
    }

    public static function traitementServiceI($image, $format,$largeur,$hauteur){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path().'/app/service/';
        $img->save($path.$name);
        return $name;
    }
    
}
