<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = DB::table('meetings')->get();
        $users = DB::table('users')->get();
        return view('home', compact('meetings','users'), ['header' => 'meeting', 'slot'=> '']);
    }
}
