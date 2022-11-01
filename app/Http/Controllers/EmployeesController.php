<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use GuzzleHttp\Promise\Create;
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
            'images'=>'',

        ]);

        
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
