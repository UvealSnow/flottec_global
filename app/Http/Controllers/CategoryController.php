<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Category;
use App\Picture;

class CategoryController extends Controller {

    public function __construct () {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $user = Auth::user();

        if ($user->can('edit', Category::class)) {
            $categories = Category::all();
            return view ('app.category.index', [
                'categories' => $categories,
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
        
        $user = Auth::user();

        if ($user->can('edit', Category::class)) {
            return view ('app.category.create');
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

        $user = Auth::user();

        if ($user->can('edit', Category::class)) {
            $this->validate($request, [
                'name_en' => 'required|string|max:255',
                'name_es' => 'required|string|max:255',
                'image' => 'image|max:2048'
            ]);

            $category = new Category;
            $category->uri = strtolower($this->clean($request->name_en));
            $category->name_en = $request->name_en;
            $category->name_es = $request->name_es;
            $category->save();

            if ($request->image != null) {
                $pic = new Picture;
                $pic->path = $request->file('image')->store("public/category");
                $category->picture()->save($pic);
            }

            return redirect ("/categories/$category->id");
        }

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
        $user = Auth::user();

        if ($user->can('edit', Category::class)) {
            $category = Category::findOrFail($id);
            return view ('app.category.show', [
                'category' => $category
            ]);
        }

        return back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $user = Auth::user();

        if ($user->can('edit', Category::class)) {
            $category = Category::findOrFail($id);
            return view ('app.category.edit', [
                'category' => $category
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
        
        $user = Auth::user();

        if ($user->can('edit', Category::class)) {
            $this->validate($request, [
                'name_en' => 'required|string|max:255',
                'name_es' => 'required|string|max:255',
                'image' => 'image|max:2048'
            ]);

            $category = Category::findOrFail($id);
            $category->uri = strtolower($this->clean($request->name_en));
            $category->name_en = $request->name_en;
            $category->name_es = $request->name_es;
            $category->save();

            if ($request->image != null) {
                if ($category->picture) Storage::delete($category->picture->path);
                $pic = new Picture;
                $pic->path = $request->file('image')->store("public/category");
                $category->picture()->save($pic);
            }

            return redirect ("/categories/$category->id");
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
        
        Category::findOrFail($id)->delete();
        return redirect ("/categories")->with('success', 'Category deleted. Including products, datasheets, safety sheets and pictures');

    }

    public function clean ($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $accents = ['Á', 'É', 'Í', 'Ó', 'Ú', 'á', 'é', 'í', 'ó', 'ú', 'Ñ', 'ñ'];
        $replace = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u', 'N', 'n'];
        $string = str_replace($accents, $replace, $string);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    } 

}
