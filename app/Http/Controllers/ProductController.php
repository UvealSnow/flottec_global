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

            $product->save();

            $safety_sheets = new SafetySheet;

            if ($request->file('english_sheet')) $safety_sheets->english_sheet = $request->file('english_sheet')->store('public/products');
            if ($request->file('spanish_sheet')) $safety_sheets->spanish_sheet = $request->file('spanish_sheet')->store('public/products');

            $product->safety_sheets()->save($safety_sheets);

            $tech_sheet = new TechSheet;

            $tech_sheet->tech_sheet = $request->file('tech_sheet')->store('products');

            $product->tech_sheet()->save($tech_sheet);

            return redirect ("/products/$product->id");

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
    public function edit($id) {

        if (Auth::user()->type == 'admin') {
            $product = Product::find($id);

            return view ('products.edit', [
                'product' => $product,
            ]);
        }
        return back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        if (Auth::user()->type == 'admin') {
            
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'category' => 'required|string',
                'classification' => 'required|string',
                'mineral' => 'required|string',
                'chemical_description' => 'required|string',
                'chemical_family' => 'required|string',
                'english_sheet' => 'file',
                'spanish_sheet' => 'file',
                'tech_sheet' => 'file'
            ]);

            $product = Product::find($id);

            $product->name = $request->name;
            $product->category = $request->category;
            $product->classification = $request->classification;
            $product->mineral = $request->mineral;
            $product->chemical_description = $request->chemical_description;
            $product->chemical_family = $request->chemical_family;

            if ($request->file('english_sheet')) $product->safety_sheets->english_sheet = $request->file('english_sheet')->store('public/products');
            if ($request->file('spanish_sheet')) $product->safety_sheets->spanish_sheet = $request->file('spanish_sheet')->store('public/products');
            if ($request->file('tech_sheet')) $product->tech_sheet->tech_sheet = $request->file('tech_sheet')->store('public/products');

            $product->save();

            return redirect ("/products/$product->id");

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        $product = Product::find($id);

        if ($product != null) {
            $product->safety_sheets->delete();
            $product->tech_sheet->delete();
            $product->delete();
        }

        return redirect ("/products")->with('success', Lang::get('products.deleted'));

    }
}
