<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;

use App\Product;
use App\SafetySheet;
use App\TechSheet;
use DB;

class SafetyController extends Controller {

    public function __construct () {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $products = Product::all();

        return view ('products.sds', [
            'products' => $products,
        ]);

    }

}
