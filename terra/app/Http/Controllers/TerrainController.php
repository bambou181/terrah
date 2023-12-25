<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["terrains"] = Terrain::all();
        return view('terrain.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Terrain::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] = $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('terrain.show')->with("viewData", $viewData);
    }


    
}
