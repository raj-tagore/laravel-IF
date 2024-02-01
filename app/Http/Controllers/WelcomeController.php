<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function index() {

        $businesses = DB::select("SELECT * FROM `business_listings`");
        $sliced_businesses = array_slice($businesses, 0, 4);
        $requirements = DB::select("SELECT * FROM `post_requirements`");
        $sliced_requirements = array_slice($requirements, 0, 6);
        return view('welcome')->with(compact('sliced_businesses', 'sliced_requirements'));
        
    }
    
}
