<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="http://localhost:8000/admin/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Posts</span>
                <span class="pull-right-container">
                    <span class="label label-primary pull-right">4</span>
                </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{ route('posts.index') }}"><i class="fa fa-circle-o"></i> Posts</a></li>
                <li><a href="{{ route('posts.create') }}"><i class="fa fa-circle-o"></i> Add New Post</a></li>
            </ul>
        </li>
        <li><a href="{{ route('categories.index') }}"><i class="fa fa-pie-chart"></i> <span>Categories</span></a></li>
        <li><a href="{{ route('tags.index') }}"><i class="fa fa-pie-chart"></i> <span>Tags</span></a></li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Users</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> View All Users</a></li>
                <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
                <li><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i> Permissions</a></li>
            </ul>
        </li>
        <li><a href="{{ route('settings.index') }}"><i class="fa fa-pie-chart"></i> <span>Settings</span></a></li>
    </ul>
</section>