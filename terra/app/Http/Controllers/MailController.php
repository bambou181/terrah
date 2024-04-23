<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;

use App\Mail\MarkdownMail;

class MailController extends Controller
{
    //
    public function sendMail(){

        

        Mail::to('patrickcoding710@gmail.com')->send(new MarkdownMail());

        return view('mail.index');
    }
}
