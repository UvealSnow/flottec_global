<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model {
    
	public function documents () {
		return $this->morphMany('App\Document', 'documentable');
	}
	   
	public function pictures () {
		return $this->morphMany('App\Picture', 'pictureable');
	}

	public static function boot () {
		parent::boot();

		static::deleting(function (Research $research) {
			$research->documents()->delete();
			$research->pictures()->delete();
		});
	}

}
