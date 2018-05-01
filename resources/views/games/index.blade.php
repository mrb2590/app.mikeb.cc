@extends('layouts.app')

@section('title') - Games @endsection

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">games</div>
                <div class="panel-body">
                    <a href="{{ route('games-brick-breaker') }}">Brick Breaker</a>
                    <a href="{{ route('games-pong') }}">Pong</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
