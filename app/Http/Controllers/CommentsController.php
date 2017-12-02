<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use \Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('pages.posts.show')->with('comments', $comments);
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
            'comment' => 'required'
        ]);
        
        $comment = new Comment;
        $comment -> comment = $request->input('comment');
        $comment -> userId = Auth::id();
        $comment -> save();

        $postId = $request ->input('postId');


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //$comments = Comment::find($id);
       //return view('pages.posts.show')->with('comment', $comments);
        // Validat the ID
        if($id == '' || !is_numeric($id)){
            // Alert User of invalid ID
        }

        // Valid id
        $post =  Post::find($id);
        //$cows_tag = $cow->tag_no;
        //$calves = Calf::where('cows_tag' ,$cows_tag )->get();
        return view('posts.show', compact('post'));
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

    /**
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
    //     $comment -> userId = Auth::id();
    //     $comment -> save();

    //     return redirect('/comments')->with('success', 'Comment Created!'); 
    // }
}
