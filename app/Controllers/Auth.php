<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		return view('auth/index/pageindex');
	}


    
    
    public function detail()
	{
		return view('auth/detail/pagedetail');
	}
	public function admin()
	{
		return view('auth/layout/pageadmin');
	}
	public function about()
	{
		return view('auth/about/pageabout');
	}
	
	
	//--------------------------------------------------------------------

}
