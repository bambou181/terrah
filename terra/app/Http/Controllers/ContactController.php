<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "contact - terrah";
        return view('contact.index')->with("viewData", $viewData);
    }
    public function  create(Request $request)
{
    
   $contact = Contact::create(
    ['username' => $request->input('username'),
    'telephone'=> $request->input('telephone'),
    'email' => $request->input('email'),
    'subject'=>$request->input('subject'),
    'message'=>$request->input('message')],
    
);


       
        //Mail::to($mail)->send(new MarkdownMail($data));
        //Mail::to('kouakoubadou@gmail')->send(new AdminMail($data));
        //Session::flash('message', 'Nous avons bien reçu votre demande et nous la traiterons rapidement. Nous vous contacterons bientôt pour discuter des prochaines étapes. En attendant, explorez notre site pour d\'autres terrains ou contactez-nous pour des demandes spécifiques.');
        return back();
}
}