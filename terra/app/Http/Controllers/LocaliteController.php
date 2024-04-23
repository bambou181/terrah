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

    public function comm()
    {
        $communes = Location::distinct()->pluck('commune');
        return view('localite.comm', compact('communes'));
        
    }

    

    public function afficherDepartement($departement)
    {
       
        $terrainsByDept = Terrain::join('locations', 'terrains.location', '=', 'locations.commune')
                    ->where('locations.departement', $departement)
                    ->select('terrains.*') 
                    ->paginate(9);

       

        // Passer les détails du département à la vue
        return view('localite.show',compact('terrainsByDept'));
    }


    public function afficherCommune($commune)
    {
       
        $terrainsByCom = Terrain::where('location',$commune)->get();
 
       

        // Passer les détails du département à la vue
        return view('localite.viewcom',compact('terrainsByCom'));
    }
}