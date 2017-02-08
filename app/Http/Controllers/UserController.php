<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pending;

use App\Mail\ConfirmAccount;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller {
    
	public function __construct () {
		$this->middleware('auth', ['except' => ['create']]);
	}

	public function index () {
		$pending_users = User::where('status', 'pending')->get();
		return view ('user.index', [
			'pending_users' => $pending_users,
		]);
	}

	public function create (Request $request) {
		$this->validate($request, [
			'name' => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'password' => 'required|string|confirmed|min:5|max:255',
			'company' => 'required|string|max:255',
			'telephone' => 'required|numeric',
			'locale' => 'required|string|in:en,es',
		]);

		$user = new Pending;
		$user->uid = md5($request->email.$request->password);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->company = $request->company;
		$user->telephone = $request->telephone;
		$user->locale = $request->locale;
		$user->save();

		Mail::to($user->email)->send(new ConfirmAccount($user));

		return redirect ("/")->with('success', __('success.confirm_account'));

	}

	public function edit ($unique_id) {

	}

	public function update (Request $request, $unique_id) {

	}

	public function delete ($unique_id) {

	}

}
