<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'cours',
        'status',
    ];
    protected $guarded = ['id'];
    protected $table = 'courses';
}
