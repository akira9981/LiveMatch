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

    public function show()
    {
        $meetings = Meeting::with('user')->get();
        return view('meeting', compact('meetings'), ['header' => 'meeting', 'slot'=> '']);
    }
}