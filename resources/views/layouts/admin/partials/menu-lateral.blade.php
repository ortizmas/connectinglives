<!-- Side Navbar -->
<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="admin/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h4">{{ Auth::user()->name }}</h1>
          <p>{{ auth()->user()->email }}</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="/home"> <i class="icon-home"></i>Home </a></li>
        <li>
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
                <i class="icon-interface-windows"></i>
                Administrador 
            </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                @can('users.index')
                    <li>
                        <a class="nav-link" href="{{ url('/users') }}">Usuarios</a>
                    </li>
                @endcan
                
                @can('roles.index')
                    <li>
                        <a class="nav-link" href="{{ url('/roles') }}">Roles</a>
                    </li>
                @endcan
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        </li>
        <li><a href="/tables"> <i class="icon-grid"></i>Tables </a></li>
        <li><a href="/charts"> <i class="fa fa-bar-chart"></i>Charts </a></li>
        <li><a href="/forms"> <i class="icon-padnote"></i>Forms </a></li>
        <li>
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
                <i class="icon-interface-windows"></i>
                Example dropdown 
            </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        </li>
        <li><a href="/login-page"> <i class="icon-interface-windows"></i>Login page </a></li>
        <li><a href="/register-page"> <i class="icon-interface-windows"></i>Register page </a></li>
    </ul>
    {{-- <span class="heading">Extras</span> --}}
    {{-- <ul class="list-unstyled">
        <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
    </ul> --}}
    </nav>
    <div class="content-inner">
      <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom">{{ (isset($breadcrumb_title)) ? $breadcrumb_title : 'Dashboard' }}</h2>
      </div>
</header>