<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminModuleController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
}
