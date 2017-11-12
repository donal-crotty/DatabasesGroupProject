@extends('layouts.app')
@extends('includes.header')
@section('content')
  
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 @if (Auth::guest())
                    <h1>Read some of Our Latest Whiskey Reviews</h1>
                    <h2>Please Login/Register to give us your opinions.</h2>
                    <hr>
                    <p>Here are our latest posts about Ireland's Finest Whiskies.
                    </p>
                @else
                    <h1>Read some of Our Latest Whiskey Reviews</h1>
                    <h2>Please let us know your opinions!</h2>
                    <h3>Upvote, Comment or Share our Posts</h3>
                    <hr>
                    <p>Here are our latest posts about Ireland's Finest Whiskies.
                    </p>
                </div>
                @endif
            </div>
            <hr>
        </div>
@endsection
