<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
        'details', 
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
