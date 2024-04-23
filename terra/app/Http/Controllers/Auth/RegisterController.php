<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Visite;
use App\Models\Terrain;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Session;


use App\Mail\MarkdownMail;
use App\Mail\AdminMail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/terrains';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:8', 'max:14'],
        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::where('email', $data['email'])->first();
        dd($user);
        if ($user) {
            $userId = $user->id;
        } else {
            $new = Auth::user();
            dd($new);
            /* $user = User::create([
                'name' => $name,
                'email' => $mail,
                'phone' => $data['phone'],                        
            ]);
            $userId = $user->id; */
        }
        $jsonResult = $data['terrain_id'];
        $terrainAtt = json_decode($jsonResult, true);
        $terrainId = $terrainAtt['id'];
        $visitDate = $data['visitDate'];

    

        $visite = new Visite();
        $visite->setUserId($userId);
        $visite->setTerrainId($terrainId);
        $visite->setVisitDate($visitDate);
        $visite->save();

        Mail::to($mail)->send(new MarkdownMail($data));
        Mail::to('kouakoubadou@gmail')->send(new AdminMail($data));
        Session::flash('message', 'Nous avons bien reçu votre demande et nous la traiterons rapidement. Nous vous contacterons bientôt pour discuter des prochaines étapes. En attendant, explorez notre site pour d\'autres terrains ou contactez-nous pour des demandes spécifiques.');

        return $user;
            
    }
    

}
