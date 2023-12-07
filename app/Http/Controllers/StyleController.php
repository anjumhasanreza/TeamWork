<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.styles.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.styles.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.styles.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.styles.view");
    }
}
