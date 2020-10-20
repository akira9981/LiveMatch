<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = array('id');
    protected $fillable = ['message'];
    
    public static $rules = array(
        'message' => 'required'
    );
    public function user()
    {
        return $this->belongsTo('App\Models\User','send', 'id');
    }
}