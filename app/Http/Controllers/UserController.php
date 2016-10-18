<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;

use App\User;

class UserController extends Controller {
    
	public function activate ($id) {

		$user = User::where('remember_token', $id)->get()->first();

		if (Auth::guest() && $user->status == 'pending') {

			$user->status = 'active';
			$user->save();

			return redirect ("/login")->with('success', Lang::get('auth.activated'));

		}
		else return redirect ("/")->with('error', Lang::get('auth.already_registered'));
		
	}

}
