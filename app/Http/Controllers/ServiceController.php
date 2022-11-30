<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }
    public function addService() {
        return view('admin.service.add');
    }
}