<?php

namespace App\Http\Controllers;

use App\Mail\ContactRecieved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;

use App\Contact;

class ContactController extends Controller {

    public function __construct () {
        $this->middleware('auth', ['only' => []]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index () {

        return view ('contact.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $msg = new Contact;

        $msg->name = $request->name;
        $msg->company = $request->company;
        $msg->email = $request->email;
        $msg->message = $request->message;

        $msg->save();

        Mail::to('admin@flottec.com')->queue(new ContactRecieved($msg));

        return redirect ("/contact")->with('success', Lang::get('contact.sent'));

    }

}
