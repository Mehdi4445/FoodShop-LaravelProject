<?php

namespace App\Http\Controllers\Shop;

use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){

        $produits = Produit::all();
        return view('shop.index', compact('produits'));

    }

    public function produit(Request $request){

        $produit = Produit::find($request->id);

        return view('shop.produit', compact('produit'));

    }

    public function filterCat(Request $request){

        $produits = Produit::where('category_id', $request->id)->get();

       // $categories = Category::where('is_online',1)->get();

        return view('shop.categorie', compact('produits'));
    }
}
