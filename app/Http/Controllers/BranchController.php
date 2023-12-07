<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.offices.branches.index");
    }

    public function create(){
        return view ("frontend.ims.pages.offices.branches.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.offices.branches.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.offices.branches.view");
    }
}
