@extends('includes.header')
@extends('layouts.app')
<!-- @section('content') -->

    <header id="myCarousel" class="carousel slide">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
       
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/header_barrels1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>The Home of Whiskey </h2>
                </div>
            </div>
            <div class="item">
                
                <div class="fill" style="background-image:url('images/header_barrels2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Knowledge from our industry professionals</h2>
                </div>
            </div>
            <div class="item">
               
                <div class="fill" style="background-image:url('images/header_barrels3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>The Cooper's Secret stash, Coming soon</h2>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <section>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1>The world's finest whiskey, in the eyes of the Cooper.</h1>
                    <p>View the finest whiskies the world has to offer with
                        our up-to-date database.
                    </p>
                </div>
            </div>
            <hr>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Featured Whiskies</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="images/img_placeholder.png" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="images/img_placeholder.png" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="images/img_placeholder.png" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="images/img_placeholder.png" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="images/img_placeholder.png" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="images/img_placeholder.png" alt="">
            </div>
        </div>
    </div>
</div>
</section>

@endsection
