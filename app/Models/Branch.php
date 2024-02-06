<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','address','company_id','city_id','state_id','country_id'
    ];

    function company() {
        return $this->belongsTo(Company::class);
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
    function departments()  {
        return $this->hasMany(Department::class);
    }
}
