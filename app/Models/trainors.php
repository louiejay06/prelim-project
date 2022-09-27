<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use\app\Models\courses;

class trainors extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo('app\Models\User');
    }



    public function courses(){
        return $this->hasMany('app\Models\courses');
    }
    
}
