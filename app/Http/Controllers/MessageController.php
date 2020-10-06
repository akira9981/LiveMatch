<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Entry;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {

        return view('message', ['header' => 'message', 'slot'=> '']);
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, Message::$rules);
        $message = new Message;
        $form = $request->all();
        $message = ['send' => \Auth::id(), 'recieve' => $id, 'reieve' => $form['message']];
        Message::insert($message);
        return redirect('/message');
    }
}
