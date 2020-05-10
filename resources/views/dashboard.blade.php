<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yummi Pizza Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel = "icon" href = "/images/Logo.png" type = "image/x-icon"> 

        <!-- Compiled Stylesheet -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    </head>
    <body class="body-class">

        <div class="app-dashboard-container">
        
            <div class="header-container logout-container">
                <div class="logo-container">
                    <a href="/"><img class="logo" src="/images/Logo.png" alt="Yummi Pizza Logo" /></a>
                </div>
                <div class="header-text-container">
                    <p>Hello, {{Auth::user()->name}}</p>
                    <a href = '/logout'>Log out</a>
                </div>
            </div>

            <div id="add-pizza-container">

            </div>

        </div>
        
    </body>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>
