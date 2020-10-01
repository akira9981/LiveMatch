<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::with('user')->get();
        return view('home', compact('meetings'), ['header' => 'home', 'slot'=> '']);
    }

    public function show(Request $request, $id)
    {
        $meeting = Meeting::with('user')->find($id);
        return view('meeting', compact('meeting'), ['header' => 'meeting', 'slot'=> '']);
    }
}