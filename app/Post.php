<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    
	public function documents () {
		return $this->morphMany('App\Document', 'documentable');
	}

	public function pictures () {
		return $this->morphMany('App\Picture', 'pictureable');
	}

	public static function boot () {
		parent::boot();

		static::deleting(function (Post $post) {
			$post->documents()->delete();
			$post->pictures()->delete();
		});
	}

}
