<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    // Admin Dashboard
    public function index(){
        return view('admin.dashboard.index');
    }
}
