<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class ChartsController extends Controller
{
	public function showChartData(){
		$posts = Post::all();
		$posts = json_encode($posts);
		return $posts;
	}
}
