<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    public function showUI()                                                                                                                                                                                                     
    {   
        //$companies = Company::all(); 
        return View::make('mainTemplate');//->with('editorList_public',$companies);                                      
     

    $userCompany = 
    $companies = Company::all();
    
    
    
    return View::make('mainTemplate')->with('editorList_public',$companies);
  }
  

	public function showWelcome() {

	}
    
    public function uiSuperAdmin() {
        return View::make("tabs/superAdmin")->with("companies", Company::all());
    }
    
    public function uiAdmin() {
        return View::make("tabs/admin");
    }

}
