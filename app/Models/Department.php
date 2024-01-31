<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','company_id','designation_id'
    ];

    function company()  {
        return $this->belongsTo(Company::class);
    }

    function designations()  {
        return $this->belongsToMany(Designation::class);
    }
}
