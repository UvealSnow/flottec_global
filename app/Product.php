<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    
	public function safety_sheets () {
		return $this->hasOne('App\SafetySheet');
	}

	public function tech_sheet () {
		return $this->hasOne('App\TechSheet');
	}

}
