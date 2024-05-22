<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $todayTrains = Train::where('data', 'like', '%2024-05-22%')->get();
        $allTrains = Train::all(); 
        return view('home', compact('todayTrains', 'allTrains'));
    }
}
