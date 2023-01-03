<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    
    public function store( Request $request)
    {
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'email'  => 'required',
            'message'  => 'required'
        ];
      
        $this->validate($request, $rules);


        $input = $request->all();
        $review = Message::create($input);

        return redirect()->back()->with('success_message', 'The message has been sent successfully');
    }













}
