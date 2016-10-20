<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller {
    
	public function changeLanguage($lang) {
	    if (array_key_exists($lang, config('language'))) {
	        Session::set('applocale', $lang);
	    }
	    return Redirect::back()->withCookie(cookie()->forever('locale', $lang));
	}

}
