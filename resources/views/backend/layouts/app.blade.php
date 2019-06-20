<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('backend.includes.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="app">
            <div class="wrapper">
                <header class="main-header">
                    @include('backend.includes.header')
                </header>
                <!-- Left side column. contains the logo and sidebar -->
                <aside class="main-sidebar">
                    <!-- sidebar: style can be found in sidebar.less -->
                    @include('backend.includes.sidebar')
                    <!-- /.sidebar -->
                </aside>
                @if(Session::has('flash_message'))
                <div class="container">      
                    <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                    </div>
                </div>
                @endif 

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">              
                        @include ('errors.list') {{-- Including error file --}}
                    </div>
                </div>

                @yield('content')
            </div>
        </div>

        @include('backend.includes.footer')
    </body>
</html>
