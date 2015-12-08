<?php

namespace App\Http\Controllers;


// use App\Http\Requests;
use Mail;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessagesRequest;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Message $messages)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Message $message)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Message $newmessage, MessagesRequest $requests)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Message $message, MessagesRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
