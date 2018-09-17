<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'cpf',
        'data_of_birth',
        'phone',
        'course_id',
        'situation',
        'status',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'peoples';
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

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function psychologists()
    {
        return $this->hasOne(Psychologist::class);
    }

    // public function setUserIdAttribute()
    // {
    //     $this->attributes['user_id'] = Auth::user()->id;
    // }
}
