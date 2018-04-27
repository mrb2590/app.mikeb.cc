<nav class="navbar navbar-default navbar-static-top main-navbar">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <ul class="nav navbar-nav">
            </ul>

            <ul class="nav navbar-nav navbar-right">

                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endguest

                <li class="visible-xs">
            		<a href="{{ route('dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            	</li>
                <li class="visible-xs">
            		<a href="{{ route('files-index') }}"><i class="fa fa-fw fa-files-o"></i> Files</a>
            	</li>
                <li class="visible-xs">
            		<a href="{{ route('games-index') }}"><i class="fa fa-fw fa-gamepad"></i> Games</a>
            	</li>
                <li class="visible-xs">
            		<a href="{{ route('chat-index') }}"><i class="fa fa-fw fa-comments"></i> Chat</a>
                </li>

                @auth
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        	<i class="fa fa-user-circle fa-fw"></i>
                            {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
