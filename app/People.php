<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'cpf',
        'data_of_birth',
        'phone',
        'cep',
        'state_id',
        'course_id',
        'city_id',
        'street',
        'number',
        'neighborhood',
        'complement',
        'situation',
        'status',
    ];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'courses';
    protected $data_of_birth = 'Y-m-d';
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function state()
    {
    	return $this->belongsTo(State::class);
    }

    public function city()
    {
    	return $this->belongsTo(City::class);
    }
    public function course()
    {
    	return $this->belongsTo(Course::class);
    }
}
