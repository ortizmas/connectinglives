<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psychologist extends Model
{
     protected $fillable = [
        'crp',
        'therapeutic_approach',
        'public',
        'status',
        'specialties_id',
        'levels_id',
        'people_id',
        
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'psychologists';
    
    public function people()
    {
    	return $this->belongsTo(People::class);
    }

    public function level()
    {
    	return $this->belongsTo(Level::class);
    }

    public function specialtie()
    {
    	return $this->belongsTo(Specialtie::class);
    }

    
}