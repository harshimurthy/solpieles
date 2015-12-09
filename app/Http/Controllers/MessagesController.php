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

    public function __construct() {
        $this->middleware('auth', ['except'=>['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Message $messages)
    {
        $messages = $messages->where('viewed', 0)->paginate(15);

        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Message $message)
    {
        return $message;
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
        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return $message;
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

    public function search(Request $request, Message $messages)
    {
        $searchs = explode(' ', $request->get('search'));

        foreach ($searchs as $key => $value) {
            $messages = $messages
                ->orWhere('name', 'like', "%$value%")
                ->orWhere('subject', 'like', "%$value%")
                ->orWhere('phone', 'like', "%$value%")
                ->orWhere('email', 'like', "%$value%")
                ->orWhere('message', 'like', "%$value%")
                ;
        }

        $messages = $messages->paginate(10)->appends(['search' => $request->get('search')]);
        
        $request->flash();
        return view('messages.index', compact('messages'));
    }
}
