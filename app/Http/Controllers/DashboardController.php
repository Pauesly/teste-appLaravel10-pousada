<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }



    public function index(){
        return view('admin.dashboard');
    }

    public function calendario(){
        return view('admin.calendario');
    }

    public function timeline(){
        return view('admin.timeline');
    }

}
