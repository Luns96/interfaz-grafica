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
                    <button v-on:click="change">dasds</button>
                    {{-- <input type="text" v-model="number" placeholder="Email"> --}}
                <nav v-model="number" v-bind:class="color" class="navbar">
                </div>
        </nav>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

        