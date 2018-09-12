<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    protected $fillable = [
        'city_id',
        'people_id',
        'name',
        'street',
        'number',
        'complement',
        'district',
        'postal_code'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    //Uma usuario pode ter n quantidade de post 
    public function peoples()
    {
        return $this->hasMany(People::class);
    }

}