<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;

use App\Product;

class ProductController extends Controller {

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

        return view ('products.index', [
            'products' => $products,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        if (Auth::user()->type == 'admin') {
            return view ('products.create');
        }
        else return back();

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
                'name' => 'required|string|max:255',
                'category' => 'required|string',
                'classification' => 'required|string',
                'mineral' => 'required|string',
                'chemical_description' => 'required|string',
                'chemical_family' => 'required|string',
                'english_sheet' => 'required_without:spanish_sheet|file',
                'spanish_sheet' => 'required_without:english_sheet|file',
                'tech_sheet' => 'required|file'
            ]);

            $product = new Product;

            $product->name = $request->name;
            $product->category = $request->category;
            $product->classification = $request->classification;
            $product->mineral = $request->mineral;
            $product->chemical_description = $request->chemical_description;
            $product->chemical_family = $request->chemical_family;
            if ($request->file('english_sheet')) $product->english_sheet = $request->file('english_sheet')->store('products');
            if ($request->file('spanish_sheet')) $product->spanish_sheet = $request->file('spanish_sheet')->store('products');
            $product->tech_sheet = $request->file('tech_sheet')->store('products');

            $product->save();

            return redirect ("/product/$product->id");

        }
        else return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
        $product = Product::find($id);

        return view ('products.show', [
            'product' => $product,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
