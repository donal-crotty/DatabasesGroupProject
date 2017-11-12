<nav class="navbar navbar-inverse">
             <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @if (Auth::guest())
                <a class="navbar-brand" href="{{ url('/') }}">
                    The Cooper's Stash
                </a>
                @else
                <a class="navbar-brand" href="{{ url('/home') }}">
                    The Cooper's Stash
                </a>
                @endif
            </div>

                 <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                     <ul class="nav navbar-nav">
                        @if (Auth::guest())
                            <li><a href="about">About</a></li>
                            <li><a href="posts">Posts</a></li>
                            <li><a href="contact">Contact</a></li>
                        @else 
                            {{--  <li><a href="home">Home</a></li>  --}}
                            <li><a href="about">About</a></li>
                            <li><a href="posts">Posts</a></li>
                            <li><a href="comments">Comments</a></a></li>
                            <li><a href="contact">Contact</a></li>
                        @endif
                     </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
