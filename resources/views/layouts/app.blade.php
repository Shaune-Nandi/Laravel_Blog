<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>@yield('Page_Title')</title>

        <!-- Bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="--mdb-bg-opacity: 0.75;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">The Blog</a>

                <!-- Left Side of the Navbar -->

                <!--

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="d-flex justify-content-end nav-link disabled">Disabled</a>
                    </div>
                </div>

                -->





                <!-- Centre -->
                @auth
                    <div class="navbar-nav">
                        <span class="nav-link">{{auth()->user()->name}} - {{ auth()->user()->role }}<span>
                    </div>
                @endauth





                <!-- Right Side of the Navbar -->
                <div class="navbar-nav">
                    @guest
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        <a class="nav-link" href="{{ url('/login') }}">Log in</a>
                    @endguest

                    @auth 
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <input type="submit" class="btn nav-link btn-outline-danger" name="logout" value="Logout">
                        </form>
                    @endauth
                </div>
            </div>
        </nav>



    
        


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                        @yield('AddPost')
                        <center><h5>@yield('Count')</h5></center>
                        @yield('Body_Content')
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-9">
                    @yield('Body_Content_2')
                </div>
                <div class="col-md-3">
                    @yield('Comments_2')
                </div>
            </div>
        </div>


    </body>
</html>

