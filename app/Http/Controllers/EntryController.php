<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Entry;

class EntryController extends Controller
{
    public function entry(Request $request, $id)
    {
        $entry = new Entry;
        $entry = ['user_id' => Auth::id(), 'meetings_id' => $id];
        Entry::insert($entry);
      
        return redirect()->back();
    }

    public function cancel($id)
    {
        $entry = Entry::where('meetings_id', $id)->where('user_id', Auth::id())->first();
        $entry->delete();

        return redirect()->back();
    }
}