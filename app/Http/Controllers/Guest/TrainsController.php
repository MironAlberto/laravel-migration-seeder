<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('trains.index', compact('trains'));
    }   

    public function show($id)
    {
        $train = Train::where('id', $id)->first();

        return view('trains.show', compact('train'));
    }
}


