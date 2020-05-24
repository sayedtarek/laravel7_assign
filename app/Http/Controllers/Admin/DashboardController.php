<?php

namespace App\Http\Controllers\Admin;

use App\ContactUs;
use App\Http\Controllers\Controller;
use App\Service;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {

        $this->middleware('admin');
    }


    public function index()
    {
        //dd(10);
    	
    	$complaints 	= ContactUS::count();
        return view('admin.dashboard.index', compact('complaints'));
    }
}
