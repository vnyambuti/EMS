<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'country_id'
    ];

    function cities()
    {
        return $this->hasMany(City::class);
    }

    function country()
    {
        return $this->belongsTo(Country::class);
    }

    function users()
    {
        return $this->hasMany(User::class);
    }
    function companies()
    {
        return $this->hasMany(Company::class);
    }
    function branch()
    {
        return $this->hasMany(Company::class);
    }

    function states()
    {
        return $this->hasMany(State::class);
    }
}

