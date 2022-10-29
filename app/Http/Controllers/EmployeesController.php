<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    
    public function index()
    {
        //
        $employees=Employees::all();
        return view('dashboard.pages.employees.all',['employees'=>$employees]);
    }


    public function list_tab_employees(){
        return view('dashboard.pages.employees.all');

    }
   
    public function create()
    {
        //
    }

       public function store(Request $request)
    {
        //

    }

   
    public function show($id)
    { 
       $employee=Employees::findOrFail($id);
       return view('dashboard.pages.employees.profil',['employee'=>$employee]);   
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
