@extends('layouts.app')

@section('title') - Games - Pong @endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="/css/games/pong/pong.css">
@endsection

@section('scripts')
	<script src="/js/games/pong/pong.js"></script>
@endsection

@section('content')
<div class="container-fluid">
	<canvas id="gameCanvas"></canvas>
</div>
@endsection
