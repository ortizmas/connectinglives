<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $breadcrumb_title = 'Dashboard';
        return view('admin.home');
    }

    public function tables()
    {
        $breadcrumb_title = 'Tables';
        return view('admin.tests.tables', compact('breadcrumb_title'));
    }

    public function charts()
    {
        $breadcrumb_title = 'Chart';
        return view('admin.tests.charts', compact('breadcrumb_title'));
    }

    public function forms()
    {
        $breadcrumb_title = 'Forms';
        return view('admin.tests.forms', compact('breadcrumb_title'));
    }

    public function loginPage()
    {
        $breadcrumb_title = 'Login Page';
        return view('admin.tests.login-page', compact('breadcrumb_title'));
    }

    public function registerPage()
    {
        $breadcrumb_title = 'Register Page';
        return view('admin.tests.register-page', compact('breadcrumb_title'));
    }
}
