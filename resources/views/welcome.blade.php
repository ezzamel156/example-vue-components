<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       
    </head>
    <body>
        <div id="app">
            <carousel :auto-play="true" :wrap-around="true">
                <img src="https://placeimg.com/640/480/any?1">
                <img src="https://placeimg.com/640/480/any?2">
                <img src="https://placeimg.com/640/480/any?3">
                <img src="https://placeimg.com/640/480/any?4">
            </carousel>
            
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
