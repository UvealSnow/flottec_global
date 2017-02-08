<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    
	public function picture () {
		return $this->morphOne('App\Picture', 'pictureable');
	}

	public function products () {
		return $this->hasMany('App\Product');
	}

	public static function boot () {
		parent::boot();

		static::deleting(function (Category $category) {
			$category->products()->delete();
			$category->picture->delete();
		});
	}

}
