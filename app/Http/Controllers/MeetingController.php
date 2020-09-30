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
        // $meetings = DB::table('meetings')->with('users')->get();
        return view('home', compact('meetings'), ['header' => 'meeting', 'slot'=> '']);
    }
}