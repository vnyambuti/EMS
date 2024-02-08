<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'department_id'
    ];

    function department()
    {
        return $this->belongsTo(Department::class);
    }

    function employee()
    {
        return $this->hasMany(Employeese::class);
    }
}
