<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\JobsModel;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return view('backend.jobs.list');
    }
}
