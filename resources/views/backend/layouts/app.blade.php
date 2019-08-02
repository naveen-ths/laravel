<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('backend.includes.footer')
            </div>
        </div>
        @include('backend.includes.scripts')
    </body>
</html>
