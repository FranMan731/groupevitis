<?php

namespace Vitis\Http\Controllers;

use Mail;
use Lang;
use Illuminate\Http\Request;

use Vitis\Http\Requests;

class MailController extends Controller
{
    
	public function create(){
		return view('contacto');
	}

	public function store(Request $request){
		
		Mail::send('mensaje', [
			'msg' => $request->mensaje
		], function($mail) use($request){
			$mail->from($request->email, $request->nombre);
			$mail->to('info@gruopvitis.com')->subject('Mensaje desde la web');
		});
		return redirect()->back()->with('flash_message', 'Thanks for contacting us!');

	}
}
