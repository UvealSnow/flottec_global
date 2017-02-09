<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicController extends Controller {
    
	public function __construct () {
		$this->middleware('auth', ['except' => ['categories', 'sds', 'rnd']]);
	}

	public function categories () {

		return view ('public.categories', [
			'categories' => \App\Category::all(),
		]);

	}

	public function productShow ($id) {

	}

	public function sds () {

		return view ('public.sds', [
			'documents' => \App\Document::whereIn('type', ['safety_sheet', 'tech_sheet'])->get(),
		]);

	}

	public function sdsDownload () {

	}

	public function rnd () {

		return view ('public.rnd', [
			'research' => \App\Research::all(),
		]);

	}

	public function rndShow () {

	}

}
