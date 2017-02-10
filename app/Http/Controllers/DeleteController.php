<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteController extends Controller {
    
	public function picture ($id) {
		if (Auth::user()->can('destroy', \App\Picture::class)) \App\Picture::findOrFail($id)->delete();
		return back();
	}

	public function document ($id) {
		if (Auth::user()->can('destroy', \App\Document::class)) \App\Document::findOrFail($id)->delete();
		return back();
	}

}
