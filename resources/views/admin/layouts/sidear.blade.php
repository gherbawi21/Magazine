@section('sidebar')
<!-- MainController Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
        <img src="{{asset('website/images/aj-footer-logo.bac952ad.svg')}}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">Aljazeera</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://www.jea.com/cdn/images/avatar/avatar-alt.svg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">Article</li>
                <li class="nav-item">
                    <a href="{{route('admin.article')}}" class="nav-link">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>Article Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.addArticle')}}" class="nav-link">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <p>Add Article</p>
                    </a>
                </li>

                <li class="nav-header">Category</li>
                <li class="nav-item">
                    <a href="{{route('admin.category')}}" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>Category Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.addCategory')}}" class="nav-link">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <p>Add Category</p>
                    </a>
                </li>

                <li class="nav-header">Contact</li>
                <li class="nav-item">
                    <a href="{{route('display.contact')}}" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>Contact Data</p>
                    </a>
                </li>

                <li class="nav-header">Newsletter</li>
                <li class="nav-item">
                    <a href="{{route('display.mail')}}" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>Newsletter Mail</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
@endsection
