<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Client;
use Illuminate\Http\Request;


class CommandeController extends Controller
{
    function ajouterCommande(Request $request){
        $commande = New Produit();
        $commande->idClient = $request->idClient;
        $commande->idProduit = $request->idProduit;
        $commande->quantite = $request->quantite;
        $commande->date = $request->date;
        $commande->save();
        return response()->json($commande);
    }

    function commandesClient($idClient){
        return response()->json(Commande::where('id_client', $id)->with('produit')->get());
    }

    function listeCommande(){
        return response()->json(Commande::all());
    }

    function supprimerCommande($id){
        return Commande::destroy($id);
    }
}
