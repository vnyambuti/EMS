<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','branch_id'
    ];

    function branch()  {
        return $this->belongsTo(Branch::class);
    }

    function designations()  {
        return $this->hasMany(Designation::class);
    }
    
}
