<?php

namespace App\Http\Controllers;

use App\Models\actualite;
use App\Models\etape;
use App\Models\home;
use App\Models\maison;
use App\Models\maisonContemporaine;
use App\Models\logementCollectif;
use App\Models\maisonpage;
use App\Models\mcpage;
use App\Models\lcpage;
use App\Models\membre;
use App\Models\mgpage;
use App\Models\projet;
use App\Models\projetpage;
use App\Models\propo;
use App\Models\service;
use App\Models\servicepage;
use App\Models\temoignage;
use App\Models\terrain;
use App\Models\tpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontEndController extends Controller
{
    public function index(){
        $about=propo::first();
        
        $projets=projet::where([
            ['projet_principal','<>',null]
        ])
        ->get();

        $services=DB::table('projets')
        ->select(DB::raw('count(service) as nombre'),'service')
        ->groupBy('service')
        ->get();


        $infos=home::first();
        return view('front-end.home',compact('about','projets','services','infos'));
    }

    public function aboutUs(){ 
        $about=propo::first();
        $membres=membre::get();
        return view('front-end.about-us',compact('about','membres'));
    }
    
    public function blog(){
        $about=propo::first();
        $actus=actualite::get();
        
        return view('front-end.blog',compact('about','actus'));
    }

    public function projets(){
        $about=propo::first();
        $projets=projet::get();
        $services=DB::table('projets')
        ->select(DB::raw('count(service) as nombre'),'service')
        ->groupBy('service')
        ->get();
        $infos=projetpage::first();
        return view('front-end.projets',compact('about','projets','services','infos'));
    }

    public function brochure(){
        $about=propo::first();
        return view('front-end.brochure',compact('about'));
    }

    public function service(){
        $services=service::get();
        $projetC=projet::count();
        $about=propo::first();
        $infos=servicepage::first();

        return view('front-end.service',compact('about','services','projetC','infos'));
    }

    public function detailProjet(Request $request){
        $projet=projet::where([
            [
               'projets.id', decrypt($request->id)
            ]
            ])
        ->first();
        $about=propo::first();

        $projets=projet::limit(6)->get();
        return view('front-end.single-projet',compact('about','projet','projets'));
    }


    public function detailActualite(Request $request){
        $actualite=actualite::where([
            [
               'id', decrypt($request->id)
            ]
            ])
        ->first();

        $about=propo::first();

       

        return view('front-end.detail-actualite',compact('about','actualite'));
    }


    public function terrain(){
        $about=propo::first();
        $projets=terrain::get();
        return view('front-end.terrains',compact('about','projets'));
    }

    
    public function detailTerrain(Request $request){
        $projet=terrain::where([
            [
               'id', decrypt($request->id)
            ]
            ])
        ->first();
        $about=propo::first();
        return view('front-end.single-terrain',compact('about','projet'));
    }
    

    public function maisonVirtuelle(){
        $about=propo::first();
        $maisons=maison::get();
        $infos=maisonpage::first();
        return view('front-end.maison',compact('about','maisons','infos'));
    }

    
    public function detailmaisonVirtuelle(Request $request){
        $maison=maison::where([
            [
               'id', decrypt($request->id)
            ]
            ])
        ->first();
        
        $about=propo::first();
        return view('front-end.single-maison',compact('about','maison'));
    }

    public function mc(){
        $about=propo::first();
        $infos=mcpage::first();
        $blog=maisonContemporaine::get();
        return view('front-end.mc',compact('about','infos','blog'));
    }

    public function mg(){

        $about=propo::first();
        $infos=mgpage::first();

        return view('front-end.mg',compact('about','infos'));
    }

    public function lc(){
        $about=propo::first();
        $infos=lcpage::first();
        $blog=logementCollectif::get();

        return view('front-end.lc',compact('about','infos','blog'));
    }

    public function contact(){
        $about=propo::first();
        return view('front-end.contact',compact('about'));
    }

    public function detailMc(Request $request){
        $actualite=maisonContemporaine::where([
            [
               'id', decrypt($request->id)
            ]
            ])
        ->first();

        $about=propo::first();

        $domaine=DB::table('maison_contemporaines')
        ->select(DB::raw('count(domaine) as nombre'),'domaine')
        ->groupBy('domaine')
        ->get();

        $actualites=maisonContemporaine::limit(5)
        ->orderBy('id','desc')
        ->get();

        return view('front-end.detail-mc',compact('about','actualite','domaine','actualites'));
    }

    public function detailLc(Request $request){
        $actualite=logementCollectif::where([
            [
               'id', decrypt($request->id)
            ]
            ])
        ->first();

        $about=propo::first();

        $domaine=DB::table('logement_collectifs')
        ->select(DB::raw('count(domaine) as nombre'),'domaine')
        ->groupBy('domaine')
        ->get();

        $actualites=logementCollectif::limit(5)
        ->orderBy('id','desc')
        ->get();

        return view('front-end.detail-lc',compact('about','actualite','domaine','actualites'));
    }


    public function download(){
        try {
            $filePath = public_path('brochure/BROCHUREBATIPRO.pdf');
            $headers = ['Content-Type: application/pdf'];
            $fileName = 'BROCHUREBATIPRO.pdf';
            return response()->download($filePath, $fileName, $headers);
        } catch (\Throwable $th) {
            session()->flash('error','erreur au niveau du téléchargement. veuillez reéssayer s\il vout plait.');
            return redirect('/brochure-batipro');
            
        }
    }

    public function mention(){
        $about=propo::first();

        return view('front-end.mention',compact('about'));
    }


    public function politique(){

        $about=propo::first();

        return view('front-end.politique',compact('about'));
    }

    public function temoignage(){

        $about=propo::first();
        $temoignage=temoignage::get();
        $infos=tpage::first();

        return view('front-end.temoignage',compact('about','temoignage','infos'));
    }

    public function mo(){ 

        $about=propo::first();

        return view('front-end.maitriseOeuvre',compact('about'));
    }

    public function etape(){
        $etape=etape::first();
        return view('front-end.etape',compact('etape'));
    }
    
}
