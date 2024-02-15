<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        
        $trains = Train::all();
        $trains_filtered = Train::where('data_di_partenza', '=', '2024-02-15')->get();

        return view('home', compact('trains', 'trains_filtered'));
    }
}
