<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    function listeClient(){
        return response()->json(Client::all());
    }

}