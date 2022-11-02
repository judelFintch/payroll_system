<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Employees;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees=Employees::all();
        $departements=Departments::all();
        
        return view('dashboard.pages.home', compact('employees','departements'));
    }
}
