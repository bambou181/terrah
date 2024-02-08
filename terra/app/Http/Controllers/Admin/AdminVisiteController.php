<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Visite;
use Illuminate\Http\Request;
class AdminVisiteController extends Controller
{
    public function index()
{
    $visites = Visite::with(['user', 'terrain'])->get();
    //dd($visites);

    // Affichez les informations dans la vue
    return view('admin.visite.index', compact('visites'));
}
    public function edit($id)
    {
        // Récupérez la visite que vous souhaitez éditer
        $visite = Visite::find($id);
    
        // Passez la visite à la vue d'édition
        return view('admin.visit.edit', compact('visite'));
    }
    
    public function delete($id)
    {
        // Récupérez la visite que vous souhaitez supprimer
        $visite = Visite::find($id);
    
        // Supprimez la visite
        $visite->delete();
    
        // Redirigez l'utilisateur vers la liste des visites après la suppression
        return redirect()->route('admin.visite.index')->with('success', 'Visite supprimée avec succès.');
    }

    public function update(Request $request, $id)
{
    // Récupérez la visite que vous souhaitez mettre à jour
    $visite = Visite::find($id);

    // Mettez à jour les champs de la visite avec les données du formulaire
    $visite->update([
        'visitDate' => $request->input('visitDate'),
        // Ajoutez d'autres champs ici selon votre structure de base de données
    ]);

    // Redirigez l'utilisateur vers la liste des visites après la mise à jour
    return redirect()->route('admin.visite.index')->with('success', 'Visite mise à jour avec succès.');
}

}
