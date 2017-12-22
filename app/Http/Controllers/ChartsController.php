<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use DB;

class ChartsController extends Controller
{
	public function showChartData(){
		// $posts = Post::all();
		$posts = DB::table('posts')->distinct()->get(['brand']);

		// Handle Products
		$post_product = array();
		foreach($posts as $i => $v){
				// Get DB Values for products
				$products = DB::table('posts')->select('product')->where('brand' , $v->brand)->get();
				// var_dump($products);die();
				if($products){
					foreach($products as $j => $k){
							$post_product[$v->brand] = $k->product;
						}
					}
				
		}


		$posts = json_encode($posts);
		$post_product = json_encode($post_product);

		$post_data = array(
			'posts' => $posts,
			 'post_data' => $post_product
		);
		return $post_data;
	}
}