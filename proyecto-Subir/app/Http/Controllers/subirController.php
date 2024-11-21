<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class subirController extends Controller
{
    function index(){
        return view('subir.index');
    }
}
