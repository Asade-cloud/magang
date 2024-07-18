<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function broadcast(){
        return view('Service.broadcast');
    }
    function videotron(){
        return view('Service.videotron');
    }
    function eventequipment(){
        return view('Service.eventequipment');
    }
}
