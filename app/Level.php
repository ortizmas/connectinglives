<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'academic_level',
        'status',
    ];

    protected $guarded = ['id'];
    //protected $table = 'levels';
    public $timestamps = false;

    public function psychologists()
    {
        return $this->hasOne(Psychologist::class);
    }
}


