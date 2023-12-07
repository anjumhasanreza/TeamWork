<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.offices.departments.index");
    }

    public function create(){
        return view ("frontend.ims.pages.offices.departments.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.offices.departments.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.offices.departments.view");
    }
}
