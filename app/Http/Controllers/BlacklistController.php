<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;

use App\Blacklist;
use DB;

class BlacklistController extends Controller {

    public function __construct () {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        if (Auth::user()->type == 'admin') {

            $blacklisted = DB::table('blacklist')->paginate('15');

            return view ('blacklist.index', [
                'blacklisted' => $blacklisted,
            ]);

        }
        return back();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        if (Auth::user()->type == 'admin') {
            return view ('blacklist.create');
        }
        return back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        if (Auth::user()->type == 'admin') {
            $this->validate($request, [
                'name' => 'required_without:domain|email|unique:blacklist,name|max:255',
                'domain' => 'required_without:name|string|unique:blacklist,domain|max:255',
            ]);

            $email = new Blacklist;

            if ($request->name != null) $email->name = $request->name;
            if ($request->domain != null) $email->domain = 'anything@'.$request->domain;

            $email->save();

            return redirect ("/blacklist")->with('success', Lang::get('blacklist.created'));
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $email = Blacklist::find($id);
        if (Auth::user()->type == 'admin' && $email != null) {
            $email->delete();
            return redirect ("/blacklist")->with('success', Lang::get('blacklist.delete'));
        }
        return back();
    }
}
