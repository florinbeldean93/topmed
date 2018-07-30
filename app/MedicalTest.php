<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalTest extends Model
{

    protected $fillable = [
        'name', 'price', 'location_id', 
    ];
	public function location(){
		return $this->belongsTo('App\Location');
	}
}
