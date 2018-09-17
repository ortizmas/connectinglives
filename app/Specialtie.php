<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialtie extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    protected $guarded = ['id'];
    protected $table = 'specialties';
    public $timestamps = false;
}
