<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class AllController extends Controller
{
    public function index()
    {
        $all = Train::all();
        return view('all', compact('all'));
    }
}
