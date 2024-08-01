@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Employees</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">View</a></li>
                        <li class="breadcrumb-item active">Employees</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">View Employee</h3>
                        </div>
                        <form class="form-horizontal" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="form-group col-md-4 border">
                                        <label>ID</label> : {{ $getRecord->id }}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>First Name</label> : {{ $getRecord->name }}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Last Name</label> : {!! !empty($getRecord->last_name) ? $getRecord->last_name : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-md-4 border">
                                        <label>Email</label> : {{ $getRecord->email }}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Phone Number</label> : {!! !empty($getRecord->phone_number) ? $getRecord->phone_number : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Hire Date</label> : {!! !empty($getRecord->hire_date) ? date('d-m-Y', strtotime($getRecord->hire_date)) : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-md-4 border">
                                        <label>Job Title</label> : {!! !empty($getRecord->get_job_single->job_title)
                                            ? $getRecord->get_job_single->job_title : '<span class="text-danger">No Available</span>'!!}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Salary</label> : {!! !empty($getRecord->salary) ? $getRecord->salary : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Commission PCT</label> : {!! !empty($getRecord->commission_pct) ? $getRecord->commission_pct : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-md-4 border">
                                        <label>Manager Name</label> : {!! !empty($getRecord->manager_id) ? $getRecord->manager_id : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Department Name</label> : {!! !empty($getRecord->department_id) ? $getRecord->department_id : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Is Role</label> : {!! !empty($getRecord->is_role) ? 'HR' : 'Employee' !!}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-md-4 border">
                                        <label>Created Date</label> : {!! !empty($getRecord->created_at) ? \Carbon\Carbon::parse($getRecord->created_at)->format('d-m-Y h:i A') : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label>Updated Date</label> : {!! !empty($getRecord->updated_at) ? \Carbon\Carbon::parse($getRecord->updated_at)->format('d-m-Y h:i A') : '<span class="text-danger">No Available</span>' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('admin/employees') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
@endsection
