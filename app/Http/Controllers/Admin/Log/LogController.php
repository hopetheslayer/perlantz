<?php

namespace App\Http\Controllers\Admin\Log;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('backend.log.index',compact('logs'));
    }

}
