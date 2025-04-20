<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctoresGenerales extends Controller
{
    public function index(){
        return view('modules.doctoresGenerales.index');
    }
}
