<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DynamicController extends Controller {
    
	public function __construct () {
		$this->middleware('auth', ['except' => ['categories', 'sds', 'rnd']]);
	}

	public function categories () {

		return view ('public.categories', [
			'categories' => \App\Category::all(),
		]);

	}

	public function productIndex ($uri) {
		$category = \App\Category::where('uri', $uri)->first();
		return view ('public.products', [
			'category' => $category,
			'products' => $category->products,
		]);
	}

	public function productShow ($uri, $name) {
		$category = \App\Category::where('uri', $uri)->first();
		if ($category->products->contains('uri', $name)) {
			$product = \App\Product::where('uri', $name)->first();
			return view ('public.product', [
				'category' => $category,
				'product' => $product
			]);
		}
	}

	public function sds () {
		return view ('public.sds', [
			'documents' => \App\Document::whereIn('type', ['safety_sheet', 'tech_sheet'])->get(),
		]);
	}

	public function sdsDownload () {

	}

	public function rnd () {
		return view ('public.rnd', [
			'research' => \App\Research::all(),
		]);
	}

	public function rndShow () {

	}

	public function download ($id) {
		$doc = \App\Document::findOrFail($id);
		return redirect (Storage::url($doc->path));
	}

}
