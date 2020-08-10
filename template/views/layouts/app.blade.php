<!DOCTYPE HTML>
<html>
    <head>
        <title>Talento Inclusivo</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />        
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome-5/css/all.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome-5/css/font-awesome-animation.min.css">        
        <link rel="stylesheet" href="/assets/plugins/slick/slick.css">
        <link rel="stylesheet" href="/assets/css/custom/style.css"/>

        <link rel="stylesheet" href="/assets/css/custom/login.css">
        @stack('css')
    </head>
    <body>
        @include('layouts.navbar')
        @yield('content')

        @include('modal.login')
        @include('modal.contactanos')

        @include('layouts.footer')        
        
        <script src="/assets/js/app.js"></script>
        <script src="/assets/plugins/slick/slick.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
        <script src="/assets/js/custom/login.js"></script>
        @stack('js')
    </body>
</html>