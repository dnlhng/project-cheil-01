<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dealershipsController extends Controller
{
    function showDealers() {
        $DB = DB::table('dealerships')
        ->join('dealerships_offices', 'dealerships.dealership_id', '=', 'dealerships_offices.dealership_id')
        ->select('dealerships_offices.*','dealerships.name')
        ->get();

        $dealers = [];
        foreach ($DB as $dealer) {  
            $auxdealers = array(
                "ISO_CODE_PAIS" => array(   
                    "ID_DEALER" => array(
                        "ID_DEALERSHIP_OFFICE" => $dealer,           
                    ),
                ),                      
            );      
            array_push($dealers, $auxdealers);
        }
        return view("dealers", ["dealers"=>json_encode($dealers)]);
    }
}
