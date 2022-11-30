<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('admin.patient.index');
    }
    public function addPatient()
    {
        return view('admin.patient.add');
    }
}