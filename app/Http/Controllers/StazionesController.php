<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stazione;

class StazionesController extends Controller
{
    public function index(){
        $staziones = Stazione::all();
        return view('staziones', compact('staziones'));
    }
}
