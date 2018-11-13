<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function posalji (Request $request){
    	$this->validate($request, [
    		'ime' => 'required',
    		'email',
            'telefon' => 'required',
            'naslov' => 'required',
    		'poruka' => 'required'
    	]);

    	Mail::send('emails.poruka', [
    		'poruka' => $request->poruka
    	], function($mail) use ($request){
    		$mail->from($request->email, $request->ime, $request->telefon);

    		$mail->to('mos-kri@hotmail.com')->subject('Нова ТР-ПЛУС порука - ' . $request->naslov . ' Телефон: ' . $request->telefon);
    	});

    	return redirect()->back()->with('flash_message', 'Ваша порука је послата.');
    }
}
