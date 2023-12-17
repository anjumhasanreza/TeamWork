<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.products.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.products.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.products.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.products.view");
    }
}
