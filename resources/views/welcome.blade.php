<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html {
            font-family: 'helvetica neue', helvetica, arial, sans-serif;
            }

            thead th, tfoot th {
            font-family: 'Rock Salt', cursive;
            }

            th {
            letter-spacing: 2px;
            }

            td {
            letter-spacing: 1px;
            }

            tbody td {
            text-align: center;
            }

            tfoot th {
            text-align: right;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <table>
            @foreach ($produits as $produit)
            <tr>
                <td></td>
                <td>Nom : {{$produit->nom}}</td>
                <td>Description : {{$produit->description}}</td>
                <td><img class="p-8 rounded-t-lg" src="{{$produit->lien_image}}" alt="product image" /></td>
                <td>{{$produit->prix}} EUR</td>
                <td>{{$produit->prix*1.08}} UTC</td>
                <td>{{$produit->prix*0.000052}} BTC</td>
            </tr>
            @endforeach
        </table> 
    </body>
</html>
