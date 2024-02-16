<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable=[
        'leavetype_id','from','to','days','remainig','employeese_id'
    ];


    function employee() {
        return $this->belongsTo(Employeese::class);
    }

    function Leave()  {
        return $this->belongsTo(LeaveType::class);
    }
}
