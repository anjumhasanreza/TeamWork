<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.projects.index");
    }

    public function create(){
        return view ("frontend.ims.pages.projects.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.projects.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.projects.view");
    }
}
