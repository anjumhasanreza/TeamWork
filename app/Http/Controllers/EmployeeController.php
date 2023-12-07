<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.offices.employees.index");
    }

    public function create(){
        return view ("frontend.ims.pages.offices.employees.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.offices.employees.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.offices.employees.view");
    }
}
