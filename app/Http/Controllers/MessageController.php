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
    public function index(Request $request)
    {
        $meetings = Meeting::with('user')->where('user_id', Auth::id())->get();
        $entries = Entry::with('user','meetings')->get();
        $messages = Message::with('user')->get();
        $main_messages = $messages->where('send', Auth::id())->where('recieve', $request->id);
        $main_entries = $entries->where('user_id', Auth::id());
        $meeting_total = $meetings ->count();
        $entry_total = $main_entries->count();
        return view('message', compact('request','main_messages','meetings','main_entries','entries','meeting_total','entry_total'), ['header' => 'message', 'slot'=> '']);
    }

    public function form($id)
    {
        $messages = Message::with('user')->where('recive', $id);
        return redirect()->action([MessageController::class, 'index'], ['id' => $id]);
    }

    public function store(Request $request)
    {
        $this->validate($request, Message::$rules);
        $message = new Message;
        $form = $request->all();
        $message = ['send' => \Auth::id(), 'recieve' => $form['recieve'], 'message' => $form['message']];
        Message::insert($message);
        return redirect()->back();
    }
}
