<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.1/css/bulma.css">
       
    </head>
    <body>
        <div id="app">
            @include('nav')
            <div class="section">
                <div class="container">
                    @yield('content') 
                </div>     
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
