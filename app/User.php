<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 
        'email', 
        'password',
        'phone',
        'address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasItem($itemId)
    {
        return $this->items()->pluck('id')->contains($itemId);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, Cart::class, 'user_id', 'item_id')
                        ->withPivot('quantity')
                        ->with('category:id,name');
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
}
