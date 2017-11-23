@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   
                    <h1>{{$post->title}}</h1>
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
                            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                         {{ csrf_field() }}
                    </form>  
                </div>
                {{--  <div class="col-lg-12">
                    <div>
                        {{$comments -> comment}}
                    </div>
                    <hr>
                    <small>Written on {{$comments->created_at}}</small>
                     <hr>
                </div>  --}}
            </div>
        </div>
        
@endsection