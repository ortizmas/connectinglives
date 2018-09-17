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
            <a href="#DropdownMenu_1" aria-expanded="false" data-toggle="collapse"> 
                <i class="icon-interface-windows"></i>
                Modulo Usuarios 
            </a>
            <ul id="DropdownMenu_1" class="collapse list-unstyled ">
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
                @can('permissions.index')
                    <li>
                        <a class="nav-link" href="{{ url('/permissions') }}">Permisos</a>
                    </li>
                @endcan
                
            </ul>
        </li>
        <li>
            <a href="#DropdownMenu_2" aria-expanded="false" data-toggle="collapse"> 
                <i class="icon-interface-windows"></i>
                Modulo Localização 
            </a>
            <ul id="DropdownMenu_2" class="collapse list-unstyled ">
                @can('countries.index')
                    <li>
                        <a class="nav-link" href="{{ url('/countries') }}">Paises</a>
                    </li>
                @endcan
                
                @can('states.index')
                    <li>
                        <a class="nav-link" href="{{ url('/states') }}">Estados</a>
                    </li>
                @endcan
                @can('cities.index')
                    <li>
                        <a class="nav-link" href="{{ url('/cities') }}">Cidades</a>
                    </li>
                @endcan
                @can('addresses.index')
                    <li>
                        <a class="nav-link" href="{{ url('/addresses') }}">Endereços</a>
                    </li>
                @endcan
            </ul>
        </li>

        <li>
            <a href="#DropdownMenu_3" aria-expanded="false" data-toggle="collapse"> 
                <i class="icon-interface-windows"></i>
                Modulo Clientes 
            </a>
            <ul id="DropdownMenu_3" class="collapse list-unstyled ">
                @can('peoples.index')
                    <li>
                        <a class="nav-link" href="{{ url('/peoples') }}">Clientes</a>
                    </li>
                @endcan
            </ul>
        </li>

        <li>
            <a href="#DropdownMenu_4" aria-expanded="false" data-toggle="collapse"> 
                <i class="icon-interface-windows"></i>
                Modulo Cursos 
            </a>
            <ul id="DropdownMenu_4" class="collapse list-unstyled ">
                @can('courses.index')
                    <li>
                        <a class="nav-link" href="{{ url('/courses') }}">Cursos</a>
                    </li>
                @endcan
            </ul>
        </li>

        <li>
            <a href="#DropdownMenu_5" aria-expanded="false" data-toggle="collapse"> 
                <i class="icon-interface-windows"></i>
                Modulo do Psicologo 
            </a>
            <ul id="DropdownMenu_5" class="collapse list-unstyled ">
                @can('psychologists.index')
                    <li>
                        <a class="nav-link" href="{{ url('/psychologists') }}">Psicologos</a>
                    </li>
                @endcan
                @can('specialties.index')
                    <li>
                        <a class="nav-link" href="{{ url('/specialties') }}">Especialidades</a>
                    </li>
                @endcan
                @can('levels.index')
                    <li>
                        <a class="nav-link" href="{{ url('/levels') }}">Niveis</a>
                    </li>
                @endcan
            </ul>
        </li>
        {{-- <li><a href="/tables"> <i class="icon-grid"></i>Tables </a></li>
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
        <li><a href="/register-page"> <i class="icon-interface-windows"></i>Register page </a></li> --}}
    </ul>
    </nav>
    <div class="content-inner">
      <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom">{{ (isset($breadcrumb_title)) ? $breadcrumb_title : 'Dashboard' }}</h2>
      </div>
</header>