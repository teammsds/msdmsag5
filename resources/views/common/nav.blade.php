<nav class="navbar navbar-light " style="background-color: #FDFEFE; color: #F5F5F5 ">
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
            {{--<a class="navbar-brand" href="{{ url('/') }}">Laravel</a>--}}
            <div class="pull-left"><img src="images/ball.jpg" style="height: 45px;"></div>
           <!--  <a class="navbar-brand" href="{{ url('/') }}">
                MSA
            </a> -->
              <!--  Buttons at navbar -->
             <ul class="nav navbar-nav">
             <li class="active"><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="{{action('HomeController@display')}}">About MSA</a></li>
            <li><a href="#">Table</a></li>
            <li><a href="#">Stats</a></li>
            
            </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if (Auth::check())
                    <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                
                {{-- Menu for Users with Administration Role Only --}}
                @role('admin')
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw fa-cogs"></i>Administration<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-fw fa-user"></i>Users</a></li>
                        <li><a href="{{ url('/roles') }}"><i class="fa fa-btn fa-fw fa-users"></i>Roles</a></li>
                        <li><a href="{{ action('SchoolController@index') }}"><i class="fa fa-btn fa-fw fa-graduation-cap" ></i>Schools</a></li>
                        <li><a href="{{ action('TeamController@index') }}"><i class="fa fa-btn fa-fw fa-users"></i>Teams & Coaches</a></li>
                        <li><a href="{{ action('PlayerController@index') }}"><i class="fa fa-btn fa-fw fa-user"></i>Players</a></li>

                        <li><a href="{{ action('PlayerController@index') }}"><i class="fa fa-btn fa-fw fa-user"></i>Coaches</a></li>
                        <li><a href="{{ action('FieldController@index') }}"><i class="fa fa-btn fa-fw fa-map-marker"></i>Fields</a>
                        <li><a href="{{ action('MatchController@index') }}"><i class="fa fa-btn fa-fw fa-map-marker"></i>Matches</a>
                        <li><a href="{{ action('TournamentController@index') }}"><i class="fa fa-btn fa-fw fa-map-marker"></i>Tournaments</a>
                        <li><a href="{{ action('RefereeController@index') }}"><i class="fa fa-btn fa-fw fa-graduation-cap" ></i>Referees</a></li>


                        <li><a href="{{ action('FieldController@index') }}"><i class="fa fa-btn fa-fw fa-map-marker"></i>Fields</a>

                       
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                    </ul>
                </li>
                @endrole
                @role('referee')
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-btn fa-fw fa-cogs"></i>Functions<span class="caret"></span></a>
                        <ul class="dropdown-menu multi level" role="menu">
                            <li><a href="{{ action('MatchController@index') }}"><i class="fa fa-btn fa-fw fa-map-marker"></i>Matches</a>
                            <li style="display:inline"><a href="{{ action('FoulController@index') }}"><i class="fa fa-btn fa-fw fa-graduation-cap" ></i>Fouls</a></li>
                            <li style="display:inline"><a href="{{ action('RprofileController@index') }}"><i class="fa fa-btn fa-fw fa-graduation-cap" ></i>Profile</a></li>
                            <li style="display:inline"><a href="{{ action('RefereematchController@index') }}"><i class="fa fa-btn fa-fw fa-graduation-cap" ></i>My Matches</a></li>


                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                        </ul>
                    </li>
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}


                @endrole
                @role('player')
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw fa-cogs"></i>Functions<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a href="{{ action('PprofileController@index') }}"><i class="fa fa-btn fa-fw fa-user"></i>Profile</a></li>
                        <li style="display:inline"><a href="{{ action('PlayermatchController@index') }}"><i class="fa fa-btn fa-fw fa-graduation-cap" ></i>My Matches</a></li>


                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                    </ul>
                </li>
                {{--<li class="divider"></li>--}}
                {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}


                @endrole
            </ul>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--<li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>--}}
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a href="{{ url('/change-password') }}"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/help') }}"><i class="fa fa-btn fa-fw fa-question-circle"></i>Help</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
