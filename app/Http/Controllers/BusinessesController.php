<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BusinessesController extends Controller
{
    public function index()
    {   
        $businesses = DB::select("SELECT * FROM business_listings");
        //Log::info($result["0"]->id);

        return view('businesses')->with(compact('businesses'));
    }

}
