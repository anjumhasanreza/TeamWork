<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.brands.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.brands.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.brands.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.brands.view");
    }
}
