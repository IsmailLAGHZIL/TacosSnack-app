<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
