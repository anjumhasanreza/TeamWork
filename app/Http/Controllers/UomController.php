<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UomController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.products.uoms.index");
    }

    public function create(){
        return view ("frontend.ims.pages.products.uoms.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.products.uoms.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.products.uoms.view");
    }
}
