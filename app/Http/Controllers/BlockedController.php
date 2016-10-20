<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;

use App\User;
use DB;

class BlockedController extends Controller {
    
	public function __construct () {
		$this->middleware('auth');
	}

	public function index () {

		if (Auth::user()->type == 'admin') {
			$blocked = DB::table('users')->where('status', 'blocked')->paginate(5);
			return view ('blocked.index', [
				'blocked' => $blocked,
			]);
		}
		return back();

	}

	public function accept ($id) {

		if (Auth::user()->type == 'admin') {
			$user = User::find($id);
			if ($user != null && $user->status == 'blocked') {
				$user->status = 'active';
				$user->save();

				return back()->with('success', Lang::get('blocked.accepted'));
			}

		}
		return back();

	}

	public function decline ($id) {

		if (Auth::user()->type == 'admin') {
			$user = User::find($id);
			if ($user != null && $user->status == 'blocked') {
				$user->delete();
				return back()->with('success', Lang::get('blocked.rejected'));
			}
		}

	}

}
