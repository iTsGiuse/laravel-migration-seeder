<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $treno = Train::all();

        $data = [
            'treni' => $treno
        ];

        return view('index', $data);
    }
}
