<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    public function applicant()
    {
        return $this->belongsTo('App\Applicant','applicant_id','id');
    }
}
