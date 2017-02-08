<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller {
    
	public function index (Request $request) {

		if (Auth::guest()) {

			if ($request->cookie('locale') != null) {
				return view ('welcome');
			}
			return $this->chooseLanguage();
		}
		elseif (Auth::user()->status != 'active') {
			Auth::logout();
		}
		return view ('welcome');

	}

	public function chooseLanguage () {
		return view ('select_locale');
	}
    
}
