<?php
namespace App\Http\Controllers;
use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["terrains"] = Terrain::all();
        return view('terrain.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Terrain::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["terrain"] = $product;
        return view('terrain.show', compact('viewData'));
    }


    
}
