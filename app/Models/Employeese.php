<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeese extends Model
{
    use HasFactory;

    protected $fillable=[
        'department_id','user_id','date_hired'
    ];

    function department() {
        return $this->belongsTo(Department::class);
    }

}
