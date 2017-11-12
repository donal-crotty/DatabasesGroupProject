<?php

namespace App\Http\Controllers;

use \Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function about(){
        $title = "About Page";
        return view('pages.about')->with('title', $title);
    }
    public function posts(){
        $title = "Posts Page";
        return view('pages.posts')->with('title', $title);
    }
    public function comments(){
        $title = "Comments Page";
        return view('pages.comments')->with('title', $title);
    }
    public function contact(){
        $title = "Contact Page";
        return view('pages.contact')->with('title', $title);
    }
}
