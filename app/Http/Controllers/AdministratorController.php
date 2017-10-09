<?php

namespace Market\Http\Controllers;

use Illuminate\Http\Request;

use Market\Http\Requests;


class AdministratorController extends Controller
{
    
    public function panel(){

    	return view('administrator/panel');
        
    }
      public function access(){

    	return view('administrator/access');
        
    }
    
  public function repors(){

    	return view('administrator/repors');
        
    }
    


}
