<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application landing.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('files.index');
    }
}
