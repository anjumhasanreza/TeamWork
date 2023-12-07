<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.sizes.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.sizes.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.sizes.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.sizes.view");
    }
}
