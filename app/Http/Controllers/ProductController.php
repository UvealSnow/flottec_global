<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Picture;
use App\Document;

class ProductController extends Controller {

    public function __construct () {
        $this->middleware('auth');
    }

    public function index ($category_id) {
        
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            return view ('app.product.index', [
                'products' => Product::where('category_id', $category_id)->get()
            ]);
        }

        return back();

    }

    public function create($category_id) {
        
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            return view ('app.product.create', [
                'category_id' => $category_id
            ]);
        }

        return back();

    }

    public function store(Request $request, $category_id) {
        
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            $this->validate($request, [
                'classification_en' => 'required|string|max:255',
                'classification_es' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'mineral' => 'required|string|max:255',
                'chemical_description_en' => 'required|string|max:255',
                'chemical_description_es' => 'required|string|max:255',
                'chemical_family_en' => 'required|string|max:255',
                'chemical_family_es' => 'required|string|max:255',
                'safety_sheets' => 'required|array|min:1',
                'safety_sheets.*' => 'required|file',
                'tech_sheets' => 'required|array|min:1',
                'tech_sheets.*' => 'required|file',
                'images.*' => 'image|max:2048'
            ]);

            $product = new Product;

            $product->uri = strtolower($this->clean($request->name));
            $product->category_id = $request->category_id;
            $product->classification_en = $request->classification_en;
            $product->classification_es = $request->classification_es;
            $product->name = $request->name;
            $product->mineral = $request->mineral;
            $product->chemical_description_en = $request->chemical_description_en;
            $product->chemical_description_es = $request->chemical_description_es;
            $product->chemical_family_en = $request->chemical_family_en;
            $product->chemical_family_es = $request->chemical_family_es;

            $product->save();

            foreach ($request->safety_sheets as $safety_sheet) {
                $doc = new Document;
                $doc->type = 'safety_sheet';
                $doc->path = $safety_sheet->store("public/product/$product->id");
                $product->documents()->save($doc);
            }

            foreach ($request->tech_sheets as $tech_sheet) {
                $doc = new Document;
                $doc->type = 'tech_sheet';
                $doc->path = $safety_sheet->store("public/product/$product->id");
                $product->documents()->save($doc);
            }

            foreach ($request->images as $image) {
                $pic = new Picture;
                $pic->path = $image->store("public/product/$product->id");
                $product->picture()->save($pic);
            }

            return redirect ("/categories/$category_id/products/$product->id");
        }

        return back();

    }

    public function show($category_id, $id) {
        
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            $product = Product::findOrFail($id);
            return view ('app.product.show', [
                'category_id' => $category_id,
                'product' => $product,
            ]);
        }

        return back();

    }

    public function edit($category_id, $id) {
        
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            return view ('app.product.edit', [
                'category_id' => $category_id
            ]);
        }

        return back();

    }

    public function update(Request $request, $id) {
        
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            $this->validate($request, [
                'classification_en' => 'required|string|max:255',
                'classification_es' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'mineral' => 'required|string|max:255',
                'chemical_description_en' => 'required|string|max:255',
                'chemical_description_es' => 'required|string|max:255',
                'chemical_family_en' => 'required|string|max:255',
                'chemical_family_es' => 'required|string|max:255',
                'safety_sheets' => 'required|array|min:1',
                'safety_sheets.*' => 'required|file',
                'tech_sheets' => 'required|array|min:1',
                'tech_sheets.*' => 'required|file',
                'images.*' => 'image|max:2048'
            ]);

            $product = Product::findOrFail($id);

            $product->uri = strtolower($this->clean($request->name));
            $product->classification_en = $request->classification_en;
            $product->classification_es = $request->classification_es;
            $product->name = $request->name;
            $product->mineral = $request->mineral;
            $product->chemical_description_en = $request->chemical_description_en;
            $product->chemical_description_es = $request->chemical_description_es;
            $product->chemical_family_en = $request->chemical_family_en;
            $product->chemical_family_es = $request->chemical_family_es;

            $product->save();

            foreach ($request->safety_sheets as $safety_sheet) {
                $doc = new Document;
                $doc->type = 'safety_sheet';
                $doc->path = $safety_sheet->store("public/product/$product->id");
                $product->documents()->save($doc);
            }

            foreach ($request->tech_sheets as $tech_sheet) {
                $doc = new Document;
                $doc->type = 'tech_sheet';
                $doc->path = $safety_sheet->store("public/product/$product->id");
                $product->documents()->save($doc);
            }

            foreach ($request->images as $image) {
                $pic = new Picture;
                $pic->path = $image->store("public/product/$product->id");
                $product->picture()->save($pic);
            }

            return redirect ("/categories/$category_id/products/$product->id");
        }

        return back();

    }

    public function destroy($category_id, $id) {
        
        Product::findOrFail($id)->delete();
        return redirect ("/categories/$category_id/products")->with('success', 'Product deleted. Includes documents and images');

    }

    public function clean ($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $accents = ['Á', 'É', 'Í', 'Ó', 'Ú', 'á', 'é', 'í', 'ó', 'ú', 'Ñ', 'ñ'];
        $replace = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u', 'N', 'n'];
        $string = str_replace($accents, $replace, $string);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    } 

}
