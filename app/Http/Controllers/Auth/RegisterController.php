<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\Mail\RegistrationRecieved;
use App\Mail\RegistrationBlocked;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'company' => 'required|string|max:255',
            'telephone' => 'required|numeric',
            'locale' => 'required|in:en,es'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {

        $user = new User;

        $user->remember_token = md5(bcrypt($data['password']));
        $user->type = "user";
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->company = $data['company'];
        $user->telephone = $data['telephone'];
        $user->locale = $data['locale'];

        if ($this->checkEmailBlacklist($data['email'])) {
            $user->status = 'blocked';
            Mail::to($user->email)->send(new RegistrationBlocked($user));
        }
        else  Mail::to($user->email)->send(new RegistrationRecieved($user));
        $user->save();
        return $user;

    }

    protected function checkEmailBlacklist ($email) {

        $domain = substr(strrchr($email, "@"), 1);

        $matches = DB::table('blacklist')
                    ->where('domain', $domain)
                    ->orWhere('name', $email)
                    ->get();

        if (count($matches) > 0) return true;
        else return false;

    }
}
