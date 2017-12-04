<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Auth;
use View;
use Carbon\Carbon;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('pages.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'brand' => 'required',
            'product' => 'required',
            'body' => 'required',
        ]);
        $post = new Post;
        $brand = $request->input('brand');
        $product = $request->input('product');
        $body = $request->input('body');
        $created_at = Carbon::now()->toDateTimeString();
        $updated_at = Carbon::now()->toDateTimeString();
        $image = $request->input('image'); 
        DB::select('CALL checkAndInsertPosts(?, ?, ?, ?, ?, ?)',[$brand, $product, $body, $created_at, $updated_at, $image ]);

        return redirect('/posts')->with('success', 'Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user_id = Auth::user()->id;
       $post = Post::find($id);
       $comments = Comment::where('user_id', $user_id);
       return view('pages.posts.show', compact('post' , 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**s
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function comment(Request $request){
    //     $this -> validate($request, [
    //         'comment' => 'required'
    //     ]);

    //     $comment = new Comment;
    //     $comment -> comment = $request->input('comment');
    //     $comment -> save();

    //     return redirect('/comments')->with('success', 'Comment Created!'); 
    // }
}
