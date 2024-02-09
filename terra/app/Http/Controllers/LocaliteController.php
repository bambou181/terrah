<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Terrain;

class LocaliteController extends Controller{

    public function index()
    {
        $departements = Location::distinct()->pluck('departement');
        return view('localite.index', compact('departements'));
        
    }

    public function afficherDepartement($departement)
    {
       
        $terrainsByDept = Terrain::where('location', $departement);

        // Passer les détails du département à la vue
        return view('localite.show',compact('terrainsByDept'));
    }
}