<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('backend.employees.list');
    }
    public function addEmployee(Request $request)
    {
        return view('backend.employees.add');
    }
    public function addEmployee_post(Request $request)
    {
        dd($request->all());
    }
}
