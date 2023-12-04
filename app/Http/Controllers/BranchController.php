<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.branches.index");
    }

    public function create(){
        return view ("frontend.ims.pages.branches.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.branches.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.branches.view");
    }
}
