<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	public function category () {
		return $this->belongsTo('App\Category');
	}

	public function documents () {
		return $this->morphMany('App\Document', 'documentable');
	}
    
	public function pictures () {
		return $this->morphMany('App\Picture', 'pictureable');
	}

	public function getSafetySheets () {
		return \App\Document::where('type', 'safety_sheet')->get();
	}

	public function getTechSheets () {
		return \App\Document::where('type', 'tech_sheet')->get();
	}

	public static function boot () {
		parent::boot();

		static::deleting(function (Product $product) {
			$product->documents()->delete();
			$product->pictures()->delete();
		});
	}

}
