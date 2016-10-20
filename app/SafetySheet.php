<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafetySheet extends Model {
    
	protected $table = 'safety_sheets';

	public function product () {
		return $this->belongsTo('App\Product');
	}

}
