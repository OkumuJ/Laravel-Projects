
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <!-- Begin Menu -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{ Route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href='{{ Route('about.us') }}'>About</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{ Route('contact') }}">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('login') }}">Log In</a>
                </li>
            </ul>
            <!-- End Menu -->

        </div>
    </div>
    </nav>
