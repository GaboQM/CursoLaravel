<?php

namespace Market\Http\Controllers;

use Illuminate\Http\Request;

use Market\Http\Requests;

class DesktopDashboardController extends Controller
{
    //
    public function index(){
    	return view('dashboard');
    }
      public function modelweb(){
    	return view('modelweb');
    }
}
