@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <h1>{{$post->brand}}</h1>
                     <h2>{{$post->product}}</h2>
                    <div>
                        {{$post -> body}}
                    </div>
                    <hr>
                    <small>Written on {{$post->created_at}}</small>
                     <hr>
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                     <form action="{{action('CommentsController@store', ['postId' => $post->id ]) }}" method="POST">
                        <div class="form-group">
                            <br>
                            <input type="hidden" name="postId" value="{{$post->id}}"/>
                            {{--  <input type="hidden" name="userId" value="{{$user->id}}"/>  --}}
                            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                         {{ csrf_field() }}
                    </form>  
                </div>
                <div class="col-lg-12">
                    <div>
                    <hr>
                       @if(count($comments)>= 1)
                            @foreach($comments as $comment)
                            <div class="well">
                                <p>{{$comment->comment}}</p>
                                <hr>
                                <div class="col-lg-3">
                                    <small><b>Written on: </b> {{$comment->created_at}}</small>
                                </div>
                                <div class="col-lg-3">
                                    <small><b>By: </b> {{$comment->user}}</small>
                                </div>
                            </div>
                            @endforeach
                        @else 
                            <p>No comments found.</p> 
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
@endsection