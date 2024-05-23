<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class GarbageController extends Controller
{
    public function index()
    {
        $unpopularTrains = Train::where('cancellato', '=', 1)->get();
        return view('garbage', compact('unpopularTrains'));
    }
}
