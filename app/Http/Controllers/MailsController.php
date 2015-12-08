<?php

namespace App\Http\Controllers;

use Mail;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessagesRequest;

class MailsController extends Controller
{
    public function sendEmail(MessagesRequest $requests, Message $newmessage)
    {
    	// return $requests->all();
    	// $data = ['subject'=>'Some Subject'];

        $sent = Mail::send('mails.website', ['data' => $requests->all()], function ($message) use ($requests) {
            $message->from($requests->get('email'), $requests->get('name'))
            	->to('cperchaz@hotmail.com', 'Carlos Perez') // Main receiver should be carlos
				->cc('yismen.jorge@gmail.com', 'Yismen Jorge') // Copy me jus tin case
            	->subject(ucwords($requests->get('subject')));
        });

        $newmessage = $newmessage->create($requests->all());

        if ($requests->ajax()) {
           return response()->json(['success'=>1, 'message'=>$newmessage]);
        }
        
    	return redirect()->route('site.route')
    		->withSuccess("Your message has been received and we will get in touch with you shortly!");
    }
}
