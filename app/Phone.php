<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //

    public function Applicant()
    {
        return $this->belongsTo('App\Applicant','applicant_id','id');
    }

    public function Committeemember()
    {
        return $this->belongsTo('App\Committeemember','committeemember_id','id');
    }
    public function Student()
    {
        return $this->belongsTo('App\Student','student_id','id');
    }
    public function Moestaff()
    {
        return $this->belongsTo('App\Moestaff','moestaff_id','id');
    }
    public function OldStudent()
    {
        return $this->belongsTo('App\OldStudent','old_student_id','id');
    }
    public function School()
    {
        return $this->belongsTo('App\School','school_id','id');
    }
    
}
