@extends('includes.header')
@extends('layouts.app')
<!-- @section('content') -->

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/header_barrels1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>The

                     Home of Whiskey </h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/header_barrels2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Knowledge from our industry professionals</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/header_barrels3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>The Cooper's Secret stash, Coming soon</h2>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <!-- Page Content -->
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
        <div></div>


        <div class="container">
            <div class="row"
            <div ng-view> </div>
        </div>
    </div>
    <div class="container">
        <br />
        <h2 align="center">Scroll down to search our database.</h2><br />
        <!--tab layout-->
        <div class="well">
            <!--Home Tab-->
            <ul class="nav nav-tabs" id="tab">
                <li class="active in"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#products" data-toggle="tab">Products</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <h3>Home</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                </div>

                <!--Products Tab-->
                <div class="tab-pane" id="products">
                    <h3>Products</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100" style="width:100%">
                        100%
                    </div>
                </div>
                 <div class="leftArea">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Brand</th>
                                <th>Product</th>
                                <th>Year</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>More Info & Edit</th>
                            </tr>
                            <tbody id="table_body">
                            </tbody>
                        </table>
                    </div>
                    <!--More info modal-->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Whiskey Details</h4>
                                </div>
                                <div class="modal-body" id="contents">
                                    <img id="pic" height="300" src="" alt="whiskeyimage">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Edit whiskey modal-->
                    <div class="modal fade" id="editModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add & Edit Whiskey</h4>
                                </div>
                                <input type="text" id="searchKey"/>
                                <button type="button" id="btnSearch">Search</button>

                                <ul id="whiskeyList"></ul>
                                <form class="form-horizontal" id="whiskeyForm">
                                    <div class="mainArea">
                                        <div class="form-group">
                                            <label class="control-label col-sm-1">Id:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="id" name="id" type="text" disabled />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-1">Brand:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="brand" name="brand" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-1">Product:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="product" name="product" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-1">Year:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="year" name="year"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-1">Price:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="price" name="price" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-1">Description:</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="description" name="description"></textarea>
                                            </div>
                                        </div>
                                        <button id="btnSave">Save</button>
                                        <button id="btnDelete">Delete</button>
                                        <button id="btnAdd">New Whiskey</button>
                                        <button id="btnClear">Clear Fields</button>
                                    </div> -->
                                    <div class="rightArea">
                                        <img id="pic" height="300"/>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- featured images -->
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





<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <p>Copyright &copy; The Cooper's Stash 2016</p>
            </div>
        </div>
    </div>
    <!-- /.row -->
</footer>
<!-- /.container -->

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
@endsection
