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

	
	public function clientLogout(Request $request)
	{
		Auth::guard('clients')->logout();
		Auth::guard('guest')->logout();
		Auth::guard('developer')->logout();
		$request->session()->invalidate();

		if ($request->session()->has('switch_accounts')) {
		$request->session()->forget('switch_accounts');
		}
		return redirect('business-owners');
	}
	
	public function salesLogout(Request $request)
	{
		Auth::guard('sales')->logout();
		Auth::guard('clients')->logout();
		Auth::guard('guest')->logout();
		$request->session()->invalidate();
		return redirect('business-owners');
	}
}
