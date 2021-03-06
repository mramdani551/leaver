<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'name',
        'content',
        'student_id',
        'courses_id',
        'created_at',
        'updated_at'
    ];
}
