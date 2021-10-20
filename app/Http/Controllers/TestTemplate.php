<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestTemplate extends Controller
{
    //
    public function index(){
        return view('master');
    }

    //halaman categori
    public function category(){
        return view('admin.category.index');
    }
}
