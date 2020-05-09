<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yummi Pizza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel = "icon" href = "/images/Logo.png" type = "image/x-icon"> 

        <!-- Compiled Stylesheet -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    </head>
    <body>

        <header class="header" id="header"></header>
        <div class="main">
            <div id="intro-container"></div>

            <div id="menu-container"></div>

            <div id="about-container"></div>

        </div>


        <footer class="footer" id="footer"></footer>
        
        
    </body>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>
