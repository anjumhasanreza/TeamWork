<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.colors.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.colors.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.colors.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.colors.view");
    }
}
