<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function index(){
        return view ("frontend.ws.index");
    }

    public function signIn(){
        return view ("frontend.ws.auths.sign_in");
    }

    public function passwordReset(){
        return view ("frontend.ws.auths.pass_reset");
    }

    public function passwordChange(){
        return view ("frontend.ws.auths.pass_change");
    }

    public function signUp(){
        return view ("frontend.ws.auths.sign_up");
    }

    public function lockScreen(){
        return view ("frontend.ws.auths.lockscreen");
    }

    public function logOut(){
        return view ("frontend.ws.auths.logout");
    }

    public function successfull(){
        return view ("frontend.ws.auths.success_message");
    }

    public function twostep_verification(){
        return view ("frontend.ws.auths.twostep_verification");
    }

    
}
