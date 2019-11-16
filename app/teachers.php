<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $primaryKey ="id";
    protected $fillable = [
        'teacher_name', 'teacher_address'
    ];
    protected $table = "teachers";
}


