<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable=[
'name','department_id'
    ];

    function department()  {
        return $this->belongsToMany(Department::class);
    }

    function employee()  {
        return $this->belongsTo(Employeese::class);
    }
}
