<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Migration;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
}
