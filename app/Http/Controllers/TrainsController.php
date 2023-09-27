<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $dati_treni= Train::all();

        return view('home', ["trains" => $dati_treni]);
    }
}
