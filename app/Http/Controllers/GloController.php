<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GloController extends Controller
{
    public function index(){
        return view('index.shop');
    }
}