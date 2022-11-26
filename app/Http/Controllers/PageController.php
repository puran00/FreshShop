<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function RegPage(){
        return view('reg&auth.reg');
    }

    public function AuthPage(){
        return view('reg&auth.auth');
    }

    public function AdminPage(){
        return view('admin.index');
    }
}
