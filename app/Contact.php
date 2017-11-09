<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
        'name', 'email', 'phone_number'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}