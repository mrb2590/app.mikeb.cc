<nav class="sidebar" id="sidebar">
    <div class="list-group">
    	@auth
	        <a href="{{ route('dashboard') }}" class="list-group-item">
	            <i class="fa fa-fw fa-dashboard"></i>
	            <span>Dashboard</span>
	        </a>
        @endauth

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
