<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;

class StationController extends Controller
{
    public function index(){
        $stations = Station::all();
        return view('stations.index', compact('stations'));
    }

    public function info(Station $station){
        return view('stations.info', compact('station'));
    }
}
