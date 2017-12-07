<?php

namespace App\Http\Controllers;
use \Auth;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		$title = "Dashboard Page";
		$users = NULL;
		return view('pages.admin.dashboard' , compact('title' , 'users'));
	}

	public function show_users()
	{	
		$users =User::all()->where('user_type' , 'user');
		return view('pages.admin.dashboard' , compact('users'));


	}
}
