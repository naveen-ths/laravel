<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Styles -->
    <link href="{{ asset('img/assets/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('css/init.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ion-icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/etline-icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/colors/purple.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,100,200,300%7CHind:400,300" rel="stylesheet" type="text/css">
        
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>