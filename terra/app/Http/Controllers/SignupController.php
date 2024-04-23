<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visite;
use App\Models\Terrain;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Session;
use App\Mail\MarkdownMail;
use App\Mail\AdminMail;
class SignUpController extends Controller
{
public function  create(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'phone' => 'required|string|min:8|max:14',
    ]);

        $user = User::where('email', $request->input('email'))->first();
        $name = $request->input('name');
        $mail = $request->input('email');
        if ($user) {
            $userId = $user->id;
        } else {
        
        $user = User::create([
            'name' => $name,
            'email' => $mail,
            'phone' => $request->input('phone'),                        
        ]);
        $userId = $user->id;
    }
        $jsonResult = $request->input('terrain_id');
        $terrainAtt = json_decode($jsonResult, true);
        $terrainId = $terrainAtt['id'];
        $visitDate = $request->input('visitDate');



        $visite = new Visite();
        $visite->setUserId($userId);
        $visite->setTerrainId($terrainId);
        $visite->setVisitDate($visitDate);
        $visite->save();

        //Mail::to($mail)->send(new MarkdownMail($data));
        //Mail::to('kouakoubadou@gmail')->send(new AdminMail($data));
        Session::flash('message', 'Nous avons bien reçu votre demande et nous la traiterons rapidement. Nous vous contacterons bientôt pour discuter des prochaines étapes. En attendant, explorez notre site pour d\'autres terrains ou contactez-nous pour des demandes spécifiques.');
        return redirect()->route('terrain.index');
}
}