<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.offices.designations.index");
    }

    public function create(){
        return view ("frontend.ims.pages.offices.designations.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.offices.designations.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.offices.designations.view");
    }
}
