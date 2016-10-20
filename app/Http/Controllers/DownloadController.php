<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;

use App\File;

use DB;

class DownloadController extends Controller {
    
	public function __construct () {
		$this->middleware('auth');
	}

	public function download ($folder, $file) { 

		$path = public_path().'/storage/'.$folder.'/'.$file;
		$headers = array('Content-Type: application/pdf');
		if ($folder == 'products') $name = $this->getFileName($folder.'/'.$file).strstr($file, '.');
		else $name = File::where('file', $folder.'/'.$file)->first()->original_name;

		return response ()->download($path, $name, $headers);

	}

	public function getFileName ($file) {

		$safety_sheet_en = DB::table('safety_sheets')
						->join('products', 'products.id', '=', 'safety_sheets.product_id')
						->select('products.name')
						->where('english_sheet', $file)
						->get()
						->first();

		if ($safety_sheet_en != null) return strtolower(str_replace(' ', '_', $safety_sheet_en->name)).'_safety_sheet_en';
		else {

			$safety_sheet_es = DB::table('safety_sheets')
							->join('products', 'products.id', '=', 'safety_sheets.product_id')
							->select('products.name')
							->where('spanish_sheet', $file)
							->get()
							->first();

			if ($safety_sheet_es != null) return strtolower(str_replace(' ', '_', $safety_sheet_es->name)).'_safety_sheet_es';
			else  {

				$tech_sheet = DB::table('tech_sheets')
							->join('products', 'products.id', '=', 'tech_sheets.product_id')
							->select('products.name')
							->where('tech_sheet', $file)
							->get()
							->first();

				if ($tech_sheet) return strtolower(str_replace(' ', '_', $safety_sheet_en->name)).'tech_sheet';
			}
		}

		return redirect ("/404");

	}

}
