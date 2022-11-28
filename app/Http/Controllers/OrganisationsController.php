<?php

namespace App\Http\Controllers;

use App\Models\Organisations;
use Illuminate\Http\Request;

class OrganisationsController extends Controller
{
    //

    public function index(){
         
        $organisations=Organisations::all();
        return view('dashboard.pages.organisations.index', compact('organisations'));
    }
}
