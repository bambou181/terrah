<?php
namespace App\Http\Controllers;
use App\Models\Terrain;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $donnees = [];
        $donnees["title"] = "Home Page - terrah";
        $donnees["terrains"] = Terrain::all();
        return view('home.index')->with("donnees", $donnees);
    }
    public function about()
    {
    
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Your Name";
        return view('home.about')->with("viewData", $viewData);
    }

    public function search(Request $request)
    {
        $localite = $request->input('localite');
        $type = $request->input('type');
        $surface = $request->input('surface');
        $budget = $request->input('budget');

        $query = Terrain::query();

        if ($localite) {
            $query->where('location', 'like', '%' . $localite . '%');
        }

        if ($surface) {
            $query->where('size', '>=', $surface);
        }

        if ($budget) {
            $query->where('price', '<=', $budget);
        }

    // Exécuter la requête de recherche
    $searchedTerrains = $query->get();
    $allTerrains = Terrain::whereNotIn('id', $searchedTerrains->pluck('id')->toArray())->get();
        //Terrain::right($request);
        // Valider les données du formulaire si nécessaire

       /* $localite = $request->input('localite');
        $type = $request->input('type');
        $surface = $request->input('surface');
        $budget = $request->input('budget');

        // Effectuer la recherche dans la base de données
        $searchedTerrains  = Terrain::where('location', 'like', '%' . $localite . '%') //Cela ajoute une condition à la requête 
        //où la colonne location dans la table terrains est similaire à la valeur de $localite. La clause like est utilisée pour effectuer une recherche partielle, et les % autour de $localite permettent de rechercher les occurrences qui contiennent la valeur de $localite.
                           //->where('type', $type)
                           // Ajouter d'autres conditions de recherche si nécessaire
                           ->where('size', '>=', $surface)
                           ->where('price', '<=', $budget)
                           ->get();
        //dd($terrains);
*/
        // Retourner les résultats à la vue
        return redirect()->route('terrain.index', compact('searchedTerrains', 'allTerrains'));

        
        //return view('home.index', compact('terrains'))->with('scrollTo', 'properties');
    }
    
    public function autocomplete(Request $request)
    {
        
        $query = $request->get('query');

        $departements = Location::select("departement")
                        ->where('departement', 'LIKE', '%'. $query . '%')
                        ->distinct() 
                        ->pluck('departement')
                        ->toArray();

        $communes = Location::select("commune")
                            ->where('commune', 'LIKE', '%'. $query . '%')
                            ->distinct() 
                            ->pluck('commune')
                            ->toArray();

        $data = array_merge($departements, $communes);

        return response()->json($data);


    }
}
