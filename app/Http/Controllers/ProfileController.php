<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view ("frontend.ims.pages.profiles.index");
    }

    public function profileSetting(){
        return view ("frontend.ims.pages.profiles.setting");
    }
}
