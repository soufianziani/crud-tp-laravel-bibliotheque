<?php

namespace App\Http\Controllers;

use App\Models\livres;
use App\Models\auteurs;
use Illuminate\Http\Request;

class BibliothequeController extends Controller
{
    public function affichage(){

        // $livre=livres::all();
        $livre=livres::paginate(2);
        return view('pages.affichage' , compact('livre'));
    }
    public function affichage_auteurs(){

        // $livre=livres::all();
        $auteur=livres::OrderBy('id', 'asc')->paginate(2);
        return view('pages.affichage' , compact('livre'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        
        $livre= new livres();
        $livre->anneePub = $request ->anneeP;
        $livre->nbrPag = $request ->nbrPag;
        $livre->titre = $request ->title;
        $livre->auteur_id = $request ->auteur_id;
        $livre->save();
        return redirect()->route("livres");


        // methode 1 :_______________________
        // $profile= new profiles();
        // $profile->Name = $request ->N;
        // $profile->Email = $request ->E;
        // $profile->age = $request ->a;
        // $profile->save();
        //_____________________________________
        //methode 2 :__________________________ 
        //ajouter en model fillable
        // profiles ::create([
        // 'Name' => $request ->N,
        // 'Email' => $request ->E,
        // 'age' => $request ->a
        // ]);
        //_____________________________________
        //Mthode 3 :___________________________ 
        // name input  = nom de champ 
        //ajouter en model fillable
        //profiles::create($request->all());
        //_____________________________________



    }
    public function modification($id){
        $liv=livres::find($id);
        $auteur = auteurs::all();
        return view('pages.edite' , compact('liv','auteur'));
    }
    public function update(Request $request , $id){
        $livre= livres::find($id);
        $livre->anneePub = $request ->anneeP;
        $livre->nbrPag = $request ->nbrPag;
        $livre->titre = $request ->title;
        $livre->auteur_id = $request ->auteur_id;
        $livre->save();
        return redirect()->route("livres");
    }
    public function delete($id) {
        $livr = livres::find($id);
        $livr->delete();
        // profiles::find($id)->delete();
    
        return redirect()->route('livres');
    }
}