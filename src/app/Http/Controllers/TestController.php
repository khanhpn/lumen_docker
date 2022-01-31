<?php

namespace App\Http\Controllers;
use Log;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        Log::info('Showing user:------------------ ');
    }

    //
}
