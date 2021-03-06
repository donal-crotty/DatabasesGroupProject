@extends('layouts.app')
@extends('includes.header')
@section('content')

<div class="container">
   <div class="row">
       <div class="col-lg-12">
           @if (Auth::guest())
                <h1>Read some of Our Latest Whiskey Reviews</h1>
                <h2>Please Login/Register to View our Posts and give us your opinions.</h2>
                <hr>
                <p>Here is a Teaser of this months Articles.
                </p>
                @if(count($posts)> 1)
                    @foreach($posts as $post)
                        <div class="well">
                            <h3>{{$post->brand}} - {{$post->product}}</h3>
                            <small>Written on {{$post->created_at}}</small>
                        </div>
                    @endforeach
                    {{--  {{$posts->links()}}  --}}
                @else 
                     <p>No posts found.</p> 
                @endif
           @elseif (Auth::user()->user_type=="admin")
                <h1>Create Post</h1>
                <form action="{{ action('PostsController@store') }}" method="POST">
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Product</label>
                        <input type="text" class="form-control" id="product" name="product" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Cover Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{ csrf_field() }}
                </form>  
                <hr>
                <h2>Created Posts</h2>
                @if(count($posts)>= 1)
                    @foreach($posts as $post)
                    <div class="well">
                        <h3><a href="posts/{{$post->id}}">{{$post->brand}} - {{$post->product}} </a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                    @endforeach
                    {{--  {{$posts->links()}}  --}}
                @else 
                    <p>No posts found.</p> 
                @endif
            @else
                <h1>Read some of Our Latest Whiskey Reviews</h1>
                <h4>Please let us know your opinions!</h2>
                    <h5>Upvote, Comment or Share our Posts</h3>
                        <hr>
                        @if(count($posts)>= 1)
                            @foreach($posts as $post)
                            <div class="well">
                                <h3><a href="posts/{{$post->id}}">{{$post->brand}} - {{$post->product}}</a></h3>
                                    <small>Written on {{$post->created_at}}</small>
                            </div>
                            @endforeach
                            {{--  {{$posts->links()}}  --}}
                        @else 
                           <p>No posts found.</p> 
                        @endif
            @endif
         </div>
        </div>
       <hr>
    </div>
 @endsection
