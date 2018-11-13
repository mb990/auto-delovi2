<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function posalji (Request $request){
    	$this->validate($request, [
    		'ime' => 'required',
    		'email' => 'required',
    		'poruka' => 'required'
    	]);

    	Mail::send('emails.poruka', [
    		'poruka' => $request->poruka
    	], function($mail) use ($request){
    		$mail->from($request->email, $request->ime);

    		$mail->to('stayforff@gmail.com')->subject('Nova TR PLUS poruka');
    	});

    	return redirect()->back()->with('flash_message', 'Ваша порука је послата.');
    }
}
