<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a href="{{ url('/') }}"><img src="/img/logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                @if(Auth::user())
                    <li><a href="{{ url('/') }}" class="{{ (\Request::is('/')) ? 'active' : '' }}">Home</a></li>
                    @if(Auth::user()->type->flag == 'superadmin' || Auth::user()->type->flag == 'admin')
                        <li><a href="{{ url('/companies') }}" class="{{ (\Request::is('companies')) ? 'active' : '' }}">Company</a></li>
                        <li><a href="{{ url('/clients') }}" class="{{ (\Request::is('clients')) ? 'active' : '' }}">Client</a></li>
                        <li><a href="{{ url('/projects') }}" class="{{ (\Request::is('projects')) ? 'active' : '' }}">Project</a></li>
                        <li><a href="{{ url('/employees') }}" class="{{ (\Request::is('employees')) ? 'active' : '' }}">Employees</a></li>
                        <li><a href="{{ url('/timesheets') }}" class="{{ (\Request::is('timesheets')) ? 'active' : '' }}">Timesheets</a></li>
                    @else
                        <li><a href="{{ url('/timesheets') }}" class="{{ (\Request::is('timesheets')) ? 'active' : '' }}">Timesheets</a></li>
                    @endif
                @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>