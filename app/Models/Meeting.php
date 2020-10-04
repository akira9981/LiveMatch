<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $guarded = array('id');
    protected $fillable = ['title','capacity','detail'];
    
    public static $rules = array(
        'title' => 'required|max:255',
        'capacity' => 'required|integer',
        'detail' => 'required'
    );
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function entry()
    {
        return $this->hasMany('App\Models\Entry');
    }
}