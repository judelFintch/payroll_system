<?php

namespace App\Http\Controllers;

use App\Models\Holydays;
use Illuminate\Http\Request;

class HolydaysController extends Controller
{
   
    public function index()
    {
        //
        return view('dashboard.pages.holydays.index');
    }

    public function create()
    {
        //
    }

      public function store(Request $request)
    {
        //
    }

    public function show(Holydays $holydays)
    {
        //
    }

   
    public function edit(Holydays $holydays)
    {
        //
    }

  
    public function update(Request $request, Holydays $holydays)
    {
        //
    }

      public function destroy(Holydays $holydays)
    {
        //
    }
}
