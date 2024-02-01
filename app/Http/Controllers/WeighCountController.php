<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WeighCountController extends Controller
{
    public function index()
    {   
        $inchvalues = array(
            "HEX HALF THREAD BOLTS & NUTS"=>'a',
            "HEX FULL THREAD BOLTS & NUTS"=>'b',
            "HEX HALF THREAD BOLTS ONLY"=>'c',
            "HEX FULL THREAD BOLTS ONLY"=>'d',
            "DIN 934 HEX NUTS(BSW)"=>'w',
            "ROUND HEAD RIVETS"=>'i',
            "SQUARE HEAD SET SCREW"=>'j',
            "ROUND HEAD SQUARE NECK BOLTS ONLY"=>'k',
            "ROUND HEAD SQUARE NECK BOLT & NUT"=>'l',
            "FULLY THREADED BARS / RODS"=>'o'
        );

        $metricvalues = array(
            "HEX HALF THREAD BOLTS & NUTS"=>'e',
            "HEX FULL THREAD BOLTS & NUTS"=>'f',
            "HEX FULL THREAD BOLTS ONLY"=>'g',
            "HEX HALF THREAD BOLTS ONLY"=>'h',
            "DIN 934 HEX NUTS"=>'x',
            "DIN 439 LOCK NUTS"=>'u',
            "WASHER AS PER IS 2016"=>'y',
            "DIN 1587 DOME NUTS"=>'t',
            "DIN 929 WELD NUTS"=>'v',
            "FULLY THREADED BARS / RODS"=>'n',
            "CHESS HEAD MACHINE SCREW"=>'p',
            "CSK PHILIPS HEAD MACHINE SCREW"=>'q',
            "PAN PHILIPS HEAD MACHINE SCREW"=>'r'   
        );

        return view('weighcount')->with(compact('inchvalues', 'metricvalues'));
    }

    public function dialist($tableid) 
    {
        $dialist = DB::select("SELECT * FROM `$tableid-dialist`");
        return view('dialist')->with(compact('dialist', 'tableid'));

    }


    public function lenlist($tableid, $diaid) 
    {

        $lenlist = DB::table("$tableid-value")->where('diaid', $diaid)->get();
        $dia = DB::table("$tableid-dialist")->where('id', $diaid)->value('dia');
        return view('lenlist')->with(compact('lenlist', 'tableid', 'dia'));

    }

    public function values($tableid, $diaid, $lenid, $value) 
    {
        
        $dia = DB::table("$tableid-dialist")->where('id', $diaid)->value('dia');
        $len = DB::table("$tableid-value")->where('id', $lenid)->value('len');
        return view('values', ['dia'=>$dia, 'len'=>$len, 'value'=>$value]);

    }
}
