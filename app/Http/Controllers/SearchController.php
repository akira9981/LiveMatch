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
        $query->where('title', 'LIKE', "%{$keyword}%");
    }else {
        $meetings = Meeting::orderBy('created_at','desc');
    }
    $meetings = $query->get();
    return view('search', compact('meetings'), ['header' => 'Search', 'slot'=> '']);
  }
}