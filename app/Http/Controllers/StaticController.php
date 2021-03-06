<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller {
    
	public function contact () {
		return view ('static.contact');
	}

	public function network () {
		return view ('static.network');
	}

	public function company () {
		return view ('static.company');
	}

	public function temporal () {
		return view ('static.temporal');
	}

	public function privacy () {
		return view ('static.privacy');
	}

	public function disclaimer () {
		return view ('static.disclaimer');
	}

	public function returnpage () {
		return view ('static.return');
	}
    
}
