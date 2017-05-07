<?php

namespace RawMaterialManager\Http\Controllers\Admin;

use RawMaterialManager\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {
        return view('admin.home');
    }
}
