<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable=[
  'name','state_id'
    ];


    function state() {
        return $this->belongsTo(State::class);
    }

    function users()  {
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
}
