<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function index()
    {
        // return view('meeting', ['header' => 'meeting', 'slot'=> '']);
        $meetings = Meeting::where('id', 1)->orderBy('id', 'DESC')->paginate(12);
        return view('home', compact('meetings'));
    }
}
