<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\PendingAccepted;
use App\Mail\PendingDeclined;
use App\Mail\PendingConfirmed;

use App\Pending;
use App\User;

class RequestController extends Controller {

    public function __construct () {
        $this->middleware('auth', ['except' => ['confirmEmail']]);
    }

    public function index () {

        $user = Auth::user();
        if ($user->can('edit', Pending::class)) {
            $pending = Pending::where('status', 'email_confirmed')->get();
            $declined = Pending::where('status', 'declined')->get();
            return view ('app.request.index', [
                'pending' => $pending,
                'declined' => $declined,
            ]);
        }

        return back();

    }

    public function confirmEmail ($uid) {

        $pending = Pending::where('uid', $uid)->first();

        if ($pending != null) {

            $pending->status = 'email_confirmed';
            $pending->save();

            Mail::to($pending->email)->queue(new PendingConfirmed($pending));
            return redirect ('/')->with('success', 'Your email has been confirmed. We will review the request. Expect an email soon!');

        }

        abort(404);

    }

    public function accept ($id) {
        
        $user = Auth::user();

        if ($user->can('edit', Pending::class)) {
            $pending = Pending::findOrFail($id);
            $user = new User;

            $user->status = 'active';
            $user->type = 'user';
            $user->name = $pending->name;
            $user->company = $pending->company;
            $user->telephone = $pending->telephone;
            $user->locale = $pending->locale;
            $user->email = $pending->email;
            $user->password = $pending->password;
            $user->save();
            $pending->delete();

            Mail::to($user->email)->queue(new PendingAccepted($pending));
            return redirect ("/requests")->with('success', 'User request accepted');
        }

        return back();

    }

    public function decline ($id) {

        $user = Auth::user();

        if ($user->can('edit', Pending::class)) {
            $pending = Pending::findOrFail($id);
            $pending->status = 'declined';
            $pending->save();

            Mail::to($pending->email)->queue(new PendingDeclined($pending));
            return redirect ("/requests")->with('success', 'User request declined');
        }

        return back();

    }

    public function destroy ($id) {
        
        if ($user->can('edit', Pending::class)) {
            Pending::findOrFail($id);

            return redirect ("/requests")->with('success', 'User request deleted');
        }

        return back();

    }
}
