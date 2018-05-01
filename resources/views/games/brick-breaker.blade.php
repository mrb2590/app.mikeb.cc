@extends('layouts.app')

@section('title') - Games - Brick Breaker @endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="/css/games/brick-breaker/brick-breaker.css">
@endsection

@section('scripts')
	<script src="/js/games/brick-breaker/brick-breaker.js"></script>
@endsection

@section('content')
<div class="container-fluid">
		<div class="canvas-container">
			<canvas id="gameCanvas" width="1280" height="800"></canvas>
		</div>
		<div class="game-data">
			<span>Current framerate: <span id="current-fps"></span></span>
		</div>
	</div>
</div>
@endsection
