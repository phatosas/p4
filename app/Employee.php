<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function schedule(){
		return $this->belongsTo('\App\Schedule');
	}
}
