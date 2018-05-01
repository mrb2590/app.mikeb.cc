<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application landing.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index');
    }

    /**
     * BRick Breaker game
     *
     * @return \Illuminate\Http\Response
     */
    public function brickBreaker()
    {
        return view('games.brick-breaker');
    }

    /**
     * Pong game
     *
     * @return \Illuminate\Http\Response
     */
    public function pong()
    {
        return view('games.pong');
    }
}
