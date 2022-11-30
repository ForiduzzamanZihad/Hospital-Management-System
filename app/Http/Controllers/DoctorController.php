<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('admin.doctor.index');
    }
    public function AddDoctor()
    {
        return view('admin.doctor.add');
    }
}