<?php

namespace App\Http\Controllers;
use \Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
