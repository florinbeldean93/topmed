<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{


    protected $fillable = [
        'name', 'job_type', 
    ];

	public function doctorlocation(){
		return $this->hasMany('App\DoctorLocation');
	}
	public function appointment(){
		return $this->hasMany('App\Appointment');
	}
}
