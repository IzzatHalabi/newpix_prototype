<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

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

}
