<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable=[
        'state_id','city_id','country_id','name','address'
    ];

    function branches()
    {
        return $this->hasMany(Company::class);
    }
    function city() {
        return $this->belongsTo(City::class);
    }
    function state() {
        return $this->belongsTo(State::class);
    }
    function country() {
        return $this->belongsTo(State::class);
    }
}
