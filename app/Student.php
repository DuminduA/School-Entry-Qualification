<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function phone()
    {
        return $this->hasMany('App\Phone','student_id','id');
    }
}
