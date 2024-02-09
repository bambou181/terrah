<?php
namespace App\Http\Controllers;
use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index()
    {
       
        $allTerrains = Terrain::all();
        return view('terrain.index', compact('allTerrains'));
    }
    public function show($id)
    {
        $viewData = [];
        $product = Terrain::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["terrain"] = $product;
        // Convert the JSON string to an array
        $viewData["terrain"]->imgs = json_decode($viewData["terrain"]->imgs, true);
        return view('terrain.show')->with('viewData', $viewData);

    }

   

    

    
}
