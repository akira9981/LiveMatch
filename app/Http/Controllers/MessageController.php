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
        $meetings = Meeting::with('user')->get();
        $entries = Entry::with('user','meetings')->get();
        $main_meetings = $meetings->where('user_id', Auth::id());
        $main_entries = $entries->where('user_id', Auth::id());
        $meeting_total = $main_meetings ->count();
        $entry_total = $main_entries->count();
        return view('message', compact('main_meetings','main_entries','entries','meeting_total','entry_total'), ['header' => 'message', 'slot'=> '']);
    }

    public function form($id)
    {
        $messages = Message::with('user')->where('recive', $id);
        return redirect()->action([MessageController::class, 'index'], ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, Message::$rules);
        $message = new Message;
        $form = $request->all();
        $message = ['send' => \Auth::id(), 'recieve' => $id, 'message' => $form['message']];
        Message::insert($message);
        return redirect()->back();
    }
}
