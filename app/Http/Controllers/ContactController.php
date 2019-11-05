<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;

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

    	//dd($data);
    	Mail::to('test@test.com')->send(new ContactController());
    }
}
