<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & Vue</title>

        <!-- style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    </head>
    <body>
        <div id="app">
            <nav  v-bind:class="color" class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">Amazon</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="product">Product</a>
                        </li>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" v-model="search" >
                            <button class="btn btn-outline-info my-2 my-sm-0" v-on:click.prevent="searchs">Search</button>
                        </form>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <input class="btn btn-info"  v-on:click="change" type="button" v-model="navcolor" name="change">
                        <a class="nav-link" href="login">Login</a>
                        <a class="nav-link" href="register">Register</a>
                    </ul>
                    
                </div>
            </nav>
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
