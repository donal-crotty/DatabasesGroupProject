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
                </div>
            </div>
        </div>
        
@endsection