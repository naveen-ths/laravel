<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('frontend.includes.head')
    </head>
    <body data-fade-in="true">

        <div class="pre-loader"><div></div></div>
        @include('frontend.includes.header')
        
        @yield('content')
        
        @include('frontend.includes.footer')
    </body>
</html>
