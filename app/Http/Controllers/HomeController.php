<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home', ['header' => 'home', 'slot'=> '']);
        // $meetingss = Meeting::where('status', 1)->orderBy('created_at', 'DESC')->paginate(12);
        // return view('home', compact('meetings'));
    }
}