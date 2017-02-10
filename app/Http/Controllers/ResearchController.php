<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Research as RnD;
use App\Picture;
use App\Document;

class ResearchController extends Controller {

    public function __construct () {
        $this->middleware('auth');
    }

    public function index () {
        $user = Auth::user();
        if ($user->can('edit', RnD::class)) {
            $research = Rnd::all();
            return view ('app.research.index', [
                'research' => $research,
            ]);

        }
        return back();
    }

    public function create () {
        $user = Auth::user();
        if ($user->can('edit', RnD::class)) {
            return view ('app.research.create');
        }
        return back();
    }

    public function store (Request $request) {
        $user = Auth::user();
        if ($user->can('edit', RnD::class)) {
            $this->validate($request, [
                'name_en' => 'required|string|max:255',
                'name_es' => 'required|string|max:255',
                'desc_en' => 'required|string|max:255',
                'desc_es' => 'required|string|max:255',
                'images' => 'array',
                'images.*' => 'image|max:1048576',
                'documents' => 'array',
                'documents.*' => 'file'
            ]);

            $paper = new RnD;
            $paper->name_en = $request->name_en;
            $paper->name_es = $request->name_es;
            $paper->desc_en = $request->desc_en;
            $paper->desc_es = $request->desc_es;
            $paper->save();

            if ($request->images != null) {
                foreach ($request->images as $image) {
                    $pic = new Picture;
                    $pic->path = $image->store("public/rnd/$paper->id");
                    $paper->pictures()->save($pic);
                }
            }

            if ($request->documents != null) {
                foreach ($request->documents as $document) {
                    $doc = new Document;
                    $doc->type = 'r&d';
                    $doc->path = $document->store("public/rnd/$paper->id");
                    $paper->documents()->save($doc);
                }
            }

            return redirect ("/rnd/$paper->id");
        }
        return back();
    }

    public function show ($id) {
        $user = Auth::user();
        if ($user->can('edit', RnD::class)) {
            return view ('app.research.show', [
                'paper' => RnD::findOrFail($id),
            ]);
        }
    }

    public function edit ($id) {
        $user = Auth::user();
        if ($user->can('edit', RnD::class)) {
            return view ('app.research.edit', [
                'paper' => RnD::findOrFail($id),
            ]);
        }
    }

    public function update (Request $request, $id) {
        $user = Auth::user();
        if ($user->can('edit', RnD::class)) {
            $this->validate($request, [
                'name_en' => 'required|string|max:255',
                'name_es' => 'required|string|max:255',
                'desc_en' => 'required|string|max:255',
                'desc_es' => 'required|string|max:255',
                'images' => 'array',
                'images.*' => 'image|max:1048576',
                'documents' => 'array',
                'documents.*' => 'file'
            ]);

            $paper = new RnD;
            $paper->name_en = $request->name_en;
            $paper->name_es = $request->name_es;
            $paper->desc_en = $request->desc_en;
            $paper->desc_es = $request->desc_es;
            $paper->save();

            if ($request->images != null) {
                foreach ($request->images as $image) {
                    $pic = new Picture;
                    $pic->path = $image->store("public/rnd/$paper->id");
                    $paper->pictures()->save($pic);
                }
            }

            if ($request->documents != null) {
                foreach ($request->documents as $document) {
                    $doc = new Document;
                    $doc->path = 'r&d';
                    $doc->path = $document->store("public/rnd/$paper->id");
                    $paper->documents()->save($doc);
                }
            }

            return redirect ("/rnd/$paper->id");
        }
        return back();
    }

    public function destroy ($id) {
        $user = Auth::user();
        if ($user->can('edit', RnD::class)) {
            RnD::findOrFail($id)->delete();
        }
        return back();
    }
}
