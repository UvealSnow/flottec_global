<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pending;
use App\User;

class RequestController extends Controller {

    public function __construct () {
        $this->middleware('auth');
    }

    public function index () {

        $user = Auth::user();
        if ($user->can('update', Pending::class)) {
            $pending = Pending::where('status' => 'email_confirmed')->get();
            return view ('app.request.show', [
                'pending' => $pending,
            ]);
        }

        return back();

    }

    public function update ($id) {
        
        $user = auth::user();

        if ($user->can('update', Pending::class)) {
            $pending = Pending::findOrFail($id);
            $user = new User;

            $user->status = $->status;
            $user->type = $->type;
            $user->name = $->name;
            $user->company = $->company;
            $user->telephone = $->telephone;
            $user->locale = $->locale;
            $user->email = $->email;
            $user->password = $->password;
            $user->save();
            $pending->delete();

            return redirect ("/requests")->with('success', 'User request accepted');
        }

        return back();

    }

    public function destroy ($id) {
        
        if ($user->can('update', Pending::class)) {
            Pending::findOrFail($id);

            return redirect ("/requests")->with('success', 'User request deleted');
        }

        return back();

    }
}
