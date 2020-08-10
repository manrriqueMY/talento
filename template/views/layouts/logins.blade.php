<!DOCTYPE HTML>
<html>
    <head>
        <title>Talento Inclusivo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />        
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome-5/css/all.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome-5/css/font-awesome-animation.min.css"> 
        <link rel="stylesheet" href="/assets/css/custom/auth.css">
        @stack('css')
    </head>
    <body>
        <header id="header">
            <div class="d-flex justify-content-center">
                <a href="/">
                    <img height="50" src="/assets/images/tinclusivo/logo-colorbc28.png" alt="Talento Inclusivo" title="Talento Inclusivo" />
                </a>
            </div>
        </header>

        @yield('content')      
        
        <script src="/assets/js/app.js"></script>
        <script src="/assets/js/custom/login.js"></script>
        @stack('js')
    </body>
</html>