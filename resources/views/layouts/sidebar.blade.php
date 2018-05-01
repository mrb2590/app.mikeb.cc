<nav class="sidebar" id="sidebar">
    <div class="list-group">

        @guest
            <a href="{{ route('login') }}" class="list-group-item visible-xs">
                <i class="fa fa-fw fa-sign-in"></i>
                <span>Login</span>
            </a>

            <a href="{{ route('register') }}" class="list-group-item visible-xs">
                <i class="fa fa-fw fa-user-plus"></i>
                <span>Register</span>
            </a>
        @endguest

        @auth
            <a href="{{ route('logout') }}" class="list-group-item visible-xs" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-sign-out"></i>
                <span>Log Out</span>
            </a>
        @endauth

        <a href="{{ route('dashboard') }}" class="list-group-item">
            <i class="fa fa-fw fa-dashboard"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('files-index') }}" class="list-group-item">
            <i class="fa fa-fw fa-files-o"></i>
            <span>Files</span>
        </a>
        <a href="{{ route('games-index') }}" class="list-group-item">
            <i class="fa fa-fw fa-gamepad"></i>
            <span>Games</span>
        </a>
        <a href="{{ route('chat-index') }}" class="list-group-item">
            <i class="fa fa-fw fa-comments-o"></i>
            <span>Chat</span>
        </a>

    </div>
</nav>
