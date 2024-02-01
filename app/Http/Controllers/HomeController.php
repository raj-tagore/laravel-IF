<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $businesses = DB::select("SELECT * FROM `business_listings`");
        $sliced_businesses = array_slice($businesses, 0, 4);
        $requirements = DB::select("SELECT * FROM `post_requirements`");
        $sliced_requirements = array_slice($requirements, 0, 6);
        return view('welcome')->with(compact('sliced_businesses', 'sliced_requirements'));
    }
}
