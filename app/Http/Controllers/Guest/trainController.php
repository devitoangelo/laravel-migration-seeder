<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;

class trainController extends Controller
{

    public function index()
    {
        // dd(train::all());
        $trains = train::orderByDesc("id")->get();
        return view("guests.trains.index", compact("trains"));
    }

 

    public function show(train $train)
    {
      // dd($train);
      return view("guests.trains.show", compact("train"));
    }

    
    
}
