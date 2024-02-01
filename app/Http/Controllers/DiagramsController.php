<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Log;

class DiagramsController extends Controller
{
    public function index()
    {   
        $categories = DB::select("SELECT * FROM categories");
        //Log::info($result["0"]->id);

        return view('diagrams')->with(compact('categories'));
    }

    public function diagramCategory($id) {

        $diagrams = DB::table('htmls')->where('category_id', $id)->get();
        $categoryname = DB::table('categories')->where('id', $id)->value('name');

        // Log::info($diagrams->__toString()); 
        // Log::info("hello world");

        return view('diagramCategory', ['diagrams' => $diagrams, 'categoryname' => $categoryname]);
        
    }

    public function showDiagram($uid) {

        $dia = DB::table('htmls')->where('id', $uid)->first();

        return view('diaunit', ['dia' => $dia]);
        
    }
}
