<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainees extends Model
{
    use HasFactory;

    public function courses(){
        return $this->belongsTo('app\Models\courses');
    }

    public function User(){
        return $this->belongsTo('app\Models\User');
    }
}
