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
                    <form >
                        <div class="form-group">
                            <br>
                            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                         {{ csrf_field() }}
                    </form>  
                </div>
            </div>
        </div>
        
@endsection