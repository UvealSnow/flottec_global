<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechSheet extends Model {
    
	protected $table = 'tech_sheets';

	public function product () {
		return $this->belongsTo('App\Product');
	}

}
