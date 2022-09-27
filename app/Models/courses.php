<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\trainees;


class courses extends Model
{
    use HasFactory;

    public function trainors(){
        return $this->belongsTo('app\Models\trainors');
    }

    public function trainees(){
        return $this->hasMany('app\Models\trainees');
    }
}
