<?php

namespace App\Http\Controllers;

use App\Models\Departements;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepartementsController extends Controller
{
   
    public function index()
    {
        //
        $departements=Departments::all();
        return view("dashboard.pages.departement.index", compact('departements'));
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
        Departments::create([
            'departement'=>$request->departement
        ]);
        return redirect()->route('pages.departement.index');
    }

    public function show(Departements $departements)
    {
        //
    }

    
    public function edit(Departements $departements)
    {
        //
    }

   
    public function update(Request $request, Departements $departements)
    {
        //
    }

    
    public function destroy(Departements $departements)
    {
        //
    }
}
