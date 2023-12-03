<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.dashboards.index");
    }
}
