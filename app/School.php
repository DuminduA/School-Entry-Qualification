<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function Phone(){
        
        return $this->hasMany('App\Phone','school_id','id');
    }
}
