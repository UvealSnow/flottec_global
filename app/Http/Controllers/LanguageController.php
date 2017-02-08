<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller {
    
	public function changeLanguage($lang) {
	    if (array_key_exists($lang, config('language'))) {
		    return Redirect::back()->withCookie(cookie()->forever('locale', $lang));
	    }
	    return back();
	}

}
