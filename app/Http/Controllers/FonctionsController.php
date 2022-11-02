<?php

namespace App\Http\Controllers;

use App\Models\Fonctions;
use Illuminate\Http\Request;

class FonctionsController extends Controller
{
  
    public function index()
    {
        //
        $fonctions=Fonctions::all();
        return view("dashboard.pages.fonctions.index", compact('fonctions'));
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
      
        Fonctions::create([
            'fonction'=>$request->fonction,
            'departement'=>$request->departement,
        ]);
        return redirect()->route('pages.fonction.index');
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
