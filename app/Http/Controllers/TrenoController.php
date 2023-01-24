<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;


class TrenoController extends Controller
{
    function home(){
        
        $trains = Train::whereDate('orario_partenza','2023-01-24')->get();
        return view('home', compact('trains'));
    }
}
