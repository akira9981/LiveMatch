<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Entry;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::with('user')->whereNotIn('user_id', [Auth::id()])->get();
        return view('home', compact('meetings'));
    }

    public function myMeeting(Request $request)
    {
        $meetings = DB::table('meetings')->where('user_id',Auth::id())->get();
        return view('my_meeting',compact('meetings'),['header' => 'my meeting', 'slot'=> '']);
    }

    public function edit(Request $request, $id)
    {
        $meeting = Meeting::with('user')->find($id);
        return view('edit', compact('meeting'), ['header' => 'edit', 'slot'=> '']);
    }

    public function update(Request $request)
    {
        $meeting = new Meeting;
        $form = $request->all();
        $meeting = Meeting::with('user')->find($request->id)->update(['user_id' => \Auth::id(), 'title' => $form['title'], 'capacity' => $form['capacity'], 'detail' => $form['detail']]);
        return redirect('my_meeting');
    }

    public function delete(Request $request, $id)
    {
        $meeting = Meeting::with('user')->find($id);
        return view('delete', compact('meeting'), ['header' => 'delete', 'slot'=> '']);
    }

    public function remove(Request $request)
    {
        Meeting::with('user')->find($request->id)->delete();
        return redirect('my_meeting');
    }

    public function create(Request $request)
    {
        return view('create',['header' => 'create', 'slot'=> '']);
    }

    public function store(Request $request)
    {
        $this->validate($request, Meeting::$rules);
        $meeting = new Meeting;
        $form = $request->all();
        $meeting = ['user_id' => \Auth::id(), 'title' => $form['title'], 'capacity' => $form['capacity'], 'detail' => $form['detail']];
        Meeting::insert($meeting);
        return redirect('home');
    }

    public function show(Request $request, $id)
    {
        $meeting = Meeting::with('user')->find($id);
        $entries = Entry::with('user')->where('meetings_id', $id)->get();
        $total = $entries->count();
        $switching = $entries->firstWhere('user_id', Auth::id());
        return view('meeting', compact('meeting','entries','total','switching'), ['header' => 'meeting', 'slot'=> '']);
    }
}