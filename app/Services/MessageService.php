<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Entry;

class MessageService
{
    public function getEntryUser($entries,$id)
    {
      $entry_users = $entries->where('meetings_id', $id);
      return $entry_users;
    }
}