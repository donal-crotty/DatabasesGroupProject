@extends('layouts.app')
@extends('includes.header')
@section('content')
  <section>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1>Comments</h1>
                    <p>Here are the posts you have commented on...
                    </p>
                     @if(count($comments)>= 1)
                            @foreach($comments as $comment)
                            <div class="well">
                                <p>{{$comment->comment}}</p>
                                <hr>
                                <div class="col-lg-3">
                                    <small><b>Written on: </b> {{$comment->created_at}}</small>
                                </div>
                            </div>
                            @endforeach
                        @else 
                            <p>No comments found.</p> 
                        @endif
                </div>
            </div>
            <hr>
        </div>
</section>
@endsection  
