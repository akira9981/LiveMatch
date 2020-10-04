<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = ['meetings_id','user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function meeting()
    {
        return $this->belongsTo('App\Models\Meeting');
    }
}
