<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailsController extends Controller
{
    public function sendEmail(Request $requests)
    {
    	 $this->validate($requests, [
	        'name' => 'required|max:100',
	        'phone' => 'required|max:100',
	        'email' => 'required|email|max:100',
	        'message' => 'required|max:500',
	    ]);

    	// return $requests->all();
    	// $data = ['subject'=>'Some Subject'];

        Mail::send('mails.website', ['data' => $requests->all()], function ($message) use ($requests) {
            $message->from($requests->get('email'), $requests->get('name'))
            	// ->to('cperchaz@hotmail.com', 'Carlos Perez') // Main receiver should be carlos
				->cc('yismen.jorge@gmail.com', 'Yismen Jorge') // Copy me jus tin case
            	->subject(ucwords($requests->get('subject')));
        });

        if ($requests->ajax()) {
           return response()->json(['success'=>1, 'message'=>'Message sent succesffully']);
        }
    	return redirect()->route('site.route')
    		->withSuccess("Your message has been received and we will get in touch with you shortly!");
    }
}
