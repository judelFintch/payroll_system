<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Employees;
use App\Models\Fonctions;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
   
    public function index()
    {
        //
        $employees=Employees::all();
        $departements=Departments::all();
        $fonctions=Fonctions::all();
        return view('dashboard.pages.employees.all', compact('employees','departements','fonctions'));
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
        $chemin_image = $request->employee_image->store('employees');
    
        Employees::create([
            'firstname'=>$request->employee_first_name,
            'codeemployee'=>$request->employee_matricule,
            'secondname'=>$request->employee_second_name,
            'communname'=>$request->employee_name,
            'birthday'=>$request->employee_birthday,
            'gender'=>$request->employee_sexe,
            'addresse'=>$request->employee_addresse,
            'state'=>$request->employee_first_name,
            'country'=>$request->employee_first_name,
            'pincode'=>$request->employee_first_name,
            'phonenumber'=>$request->employee_first_name,
            'email'=>$request->employee_email,
            'company'=>$request->employee_company,
            'departement'=>$request->employee_departement,
            'fonction'=>$request->employee_fonction,
            'report_to'=>$request->employee_fonction,
            'images'=>$chemin_image,

        ]);

    return redirect()->route('pages.employees.all');
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