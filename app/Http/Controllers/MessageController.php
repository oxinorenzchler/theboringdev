<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Message;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $messages = Message::all();
        return view('auth.messages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // dd($request);
        $rules = [
            'name' => 'required|string',
            'contact' => 'required|string',
            'message' => 'required|string',
        ];

        $this->validate($request, $rules);

        $msg = new Message;
        $msg->name = $request->name;
        $msg->contact = $request->contact;
        $msg->message = $request->message;

        $msg->save();

        Session::flash('success_msg', 'Sent');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $msg = Message::find($id);
        return view('auth.message_page', compact('msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg = Message::find($id);
        $msg->delete();
        Session::flash('success_msg', 'Deleted');
        return redirect()->route('messages.index');
    }
}
