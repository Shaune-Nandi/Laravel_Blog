<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>@yield('Page_Title')</title>

        <!-- Bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <style>
            .nav{
                background-color: lightblue;
            }


        </style>



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
        <ul class="nav">
            <li class="nav-item"><a class="nav-link navbar-brand" href="#">The Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link_1</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link_2</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
        </ul>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                        @yield('AddPost')
                        <center><h5>@yield('Count')</h5></center>
                        @yield('Body_Content')
                </div>
            </div>
        </div>
    </body>
</html>