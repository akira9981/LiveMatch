<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Entry;
use App\Models\Message;

class SearchController extends Controller
{
  public function index(Request $request)
  {
    $keyword = $request->input('search');
    $query = Meeting::query();
    if (!empty($keyword)) {
      $query->whereNotIn('user_id', [Auth::id()])->where('title', 'LIKE', "%{$keyword}%");
    }else{
      $query->whereNotIn('user_id', [Auth::id()]);
    }
    $meetings = $query->get();

    $user = User::query();
    if (!empty($keyword)) {
      $user->whereNotIn('id', [Auth::id()])->where('name', 'LIKE', "%{$keyword}%");
    }else{
      $user->whereNotIn('id', [Auth::id()]);
    }
    $users = $user->get();
    return view('search', compact('meetings','users'));
  }
}