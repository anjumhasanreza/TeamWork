<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.categorys.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.categorys.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.categorys.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.categorys.view");
    }
}
