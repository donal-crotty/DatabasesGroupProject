<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
