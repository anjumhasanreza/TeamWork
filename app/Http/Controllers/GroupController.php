<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.groups.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.groups.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.groups.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.groups.view");
    }
}
