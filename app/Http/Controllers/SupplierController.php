<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.contacts.suppliers.index");
    }

    public function create(){
        return view ("frontend.ims.pages.contacts.suppliers.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.contacts.suppliers.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.contacts.suppliers.view");
    }
}
