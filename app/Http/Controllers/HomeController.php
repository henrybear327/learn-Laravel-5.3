<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function application()
    {
        return view('admin.application');
    }

    public function capSetting()
    {
        return view('admin.capSetting');
    }

    public function accountManagement()
    {
        return view('admin.accountManagement');
    }

    public function applicationForm()
    {
        return view('admin.applicationForm');
    }

    public function statusSetting()
    {
        return view('admin.statusSetting');
    }

}
