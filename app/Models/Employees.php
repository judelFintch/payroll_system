<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable =[
        'firstname',
        'codeemployee',
        'secondname',
        'communname',
        'birthday',
        'gender',
        'addresse',
        'state',
        'country',
        'pincode',
        'phonenumber',
        'email',
        'company',
        'fonction',
        'departement',
        'report_to',
        'images'
    ];
}
