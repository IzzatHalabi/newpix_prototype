<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    const MALE = 0;
    const FEMALE = 1;

    protected $fillable = [
        'name',
        'village',
        'gender',
        'student_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'official_id', 'student_id');
    }

    public function removeAllOccupants()
    {
        return Room::query()->update(['student_id' => null]);
    }

}
