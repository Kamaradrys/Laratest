<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    

    public function create()
    {

    	return view('contact.create');
    }

    public function store()
    {
    	$data = request()->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);

    	//envoi de mail
    	Mail::to('test@test.com')->send(new ContactMail($data));
    	//message flash plus redirection 
    	return redirect('contact')->with('message','Votre message a été envoyer avec succès !');
    }
}
