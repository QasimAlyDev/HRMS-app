<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\JobsModel;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request)
    {
        $data['getRecord'] = JobsModel::getRecord($request);
        return view('backend.jobs.list', $data);
    }
    public function add(Request $request)
    {
        return view('backend.jobs.add');

    }
    public function add_post(Request $request)
    {
        $user = request()->validate([
            'job_title'              => 'required',
            'min_salary'             => 'required',
            'max_salary'             => 'required'
        ]);

        $user                        = new JobsModel;
        $user->job_title             = trim($request->job_title);
        $user->min_salary            = trim($request->min_salary);
        $user->max_salary            = trim($request->max_salary);
        $user->save();

        return redirect('admin/jobs')->with('success' , 'Job Successfully Added.');
    }
    public function view($id)
    {
        $data['getRecord'] = JobsModel::find($id);
        return view('backend.jobs.view', $data);
    }
    public function edit($id)
    {
        $data['getRecord'] = JobsModel::find($id);
        return view('backend.jobs.edit', $data);
    }
    public function editJob($id, Request $request )
    {
        $user = request()->validate([
            'job_title'              => 'required',
            'min_salary'             => 'required',
            'max_salary'             => 'required'
        ]);
        
        
        $user = JobsModel::find($id);
        $user->job_title             = trim($request->job_title);
        $user->min_salary            = trim($request->min_salary);
        $user->max_salary            = trim($request->max_salary);
        $user->save();

        return redirect('admin/jobs')->with('success' , 'Job Successfully Updated.');
    }
    public function deleteJob($id)
    {
        $recordDelete = JobsModel::find($id);
        $recordDelete->delete();

        return redirect('admin/jobs')->with('delete' , 'Job Successfully Deleted.');
    }
}
