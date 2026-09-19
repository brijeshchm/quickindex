<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class LogoutController extends Controller
{
	
	public function index()
	{
		Auth::logout();
		return "logged out";
	}

	
	public function clientLogout()
	{
		Auth::guard('clients')->logout();
		return redirect('business-owners');
	}
	
	public function salesLogout()
	{
		Auth::guard('sales')->logout();
		return redirect('business-owners');
	}
}
