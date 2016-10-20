<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller {
    
	public function contact () {
		return view ('static.contact');
	}

	public function network () {
		return view ('static.network');
	}

}
