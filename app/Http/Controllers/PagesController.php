<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
