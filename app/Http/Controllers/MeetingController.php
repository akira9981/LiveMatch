<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Entry;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::with('user')->get();
        return view('home', compact('meetings'), ['header' => 'home', 'slot'=> '']);
    }

    public function create()
    {
        return view('create', ['header' => 'create', 'slot'=> '']);
    }

    public function post(Request $request)
    {
        $this->validate($request, Meeting::$rules);
        $meeting = new Meeting;
        $form = $request->all();
        $meeting->fill($form)->save();
        return redirect('home');
    }

    public function show(Request $request, $id)
    {
        $meeting = Meeting::with('user')->find($id);
        $entries = Entry::with('user')->where('meetings_id', $id)->get();
        $total = $entries->count();
        return view('meeting', compact('meeting','entries','total'), ['header' => 'meeting', 'slot'=> '']);
    }
}