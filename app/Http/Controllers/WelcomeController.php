<?php

namespace App\Http\Controllers;

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
        //return view('pages.about', compact('title'));
        return view('pages.about')->with('title', $title);
    }
    public function products(){
        $title = "Products Page";
        return view('pages.products')->with('title', $title);
    }
    public function contact(){
        // $data = array(
        //     'title' => 'Contact',
        //     'types' => ['Address', 'Email', 'Phone']
        // );
        $title = "Contact Page";
        return view('pages.contact')->with('title', $title);
    }
}
