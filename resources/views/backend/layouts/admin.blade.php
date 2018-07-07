<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>
    </div>
    <!-- ./wrapper -->

    @include('includes.footer')
    </body>
</html>