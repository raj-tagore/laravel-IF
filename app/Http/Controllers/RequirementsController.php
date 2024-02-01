<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RequirementsController extends Controller
{
    public function index()
    {   
        $requirements = DB::select("SELECT * FROM post_requirements");
        //Log::info($result["0"]->id);

        return view('requirements')->with(compact('requirements'));
    }

}
