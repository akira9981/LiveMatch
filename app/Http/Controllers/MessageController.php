<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Entry;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $meetings = Meeting::with('user')->where('user_id', Auth::id())->get();
        $entries = Entry::with('meetings')->where('user_id', Auth::id())->get();
        $meeting_total = $meetings ->count();
        $entry_total = $entries->count();
        return view('message', compact('meetings','entries','meeting_total','entry_total'), ['header' => 'message', 'slot'=> '']);
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
