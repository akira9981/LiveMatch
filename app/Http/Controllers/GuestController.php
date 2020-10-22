<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Entry;

class GuestController extends Controller
{
  public function index(){
    $meetings = Meeting::with('user')->get();
    return view('guest', compact('meetings'), ['header' => 'Guest']);
  }
}