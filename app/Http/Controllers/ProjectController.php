<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.offices.projects.index");
    }

    public function create(){
        return view ("frontend.ims.pages.offices.projects.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.offices.projects.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.offices.projects.view");
    }
}
