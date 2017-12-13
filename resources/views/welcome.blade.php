<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div id="app">

            <div class="content">
                {{--<example-component></example-component>--}}
                <map-component></map-component>
            </div>
            </div>
        </div>
    </body>
    <script src="{{mix('/js/app.js')}}"></script>
</html>
