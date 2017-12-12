<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use DB;

class ChartsController extends Controller
{
	public function showChartData(){
		$posts = Post::all();
		// $posts = DB::select("Select brand, product from `posts` GROUP BY `brand`,product");
		// $posts = $posts->toArray();


		// $brands = array();
		// foreach($posts as $i => $v){
		// 	var_dump($v);die();
		// 	// if(!in_array($v['brand'], $brands)){
		// 	// 	$brands.push($v['brand']);

		// 	// }
		// }
		// var_dump($brands);die();

		$posts = json_encode($posts);
		return $posts;
	}
}