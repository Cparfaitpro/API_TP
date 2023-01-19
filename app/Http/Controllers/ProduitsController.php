<?php

namespace App\Http\Controllers;
use App\Models\Produit;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    function liste(){
        return response()->json(Produit::all());
    }

    function detail($id)
    {
        return response()->json(Produit::find($id));
    }

    function ajouter(Request $request){
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->lien_image = $request->lien_image;
        $produit->prix = $request->prix;
        $produit->tva = $request->tva;
        $produit->save();
        return response()->json($produit);
    }

    function devise($id,$devise)
    {
        $produit=Produit::find($id);
        switch($devise){
            case 'eur':
                return $produit->prix*1;
                break;
            case 'usd':
                return $produit->prix*1.08;
                break;
            case 'btc':
                return $produit->prix*0.000052;
                break;
        }
    }

    function ProduitAffichage(){
        $produits = Produit::all();
        
        return view("welcome", ["produits" => Produit::all()]);
    }
}
