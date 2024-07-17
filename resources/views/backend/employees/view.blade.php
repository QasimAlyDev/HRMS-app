@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">View Employees</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">View</a></li>
                            <li class="breadcrumb-item active">Employees</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
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
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            ID</label>
                                        <div class="col-sm-10">
                                            {{ $getRecord->id }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            First Name </label>
                                        <div class="col-sm-10">
                                            {{ $getRecord->name }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Last Name </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->last_name) ? $getRecord->last_name : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Email </label>
                                        <div class="col-sm-10">
                                            {{ $getRecord->email }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Phone Number </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->phone_number) ? $getRecord->phone_number : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Hire Date </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->hire_date) ? date('d-m-Y' , strtotime($getRecord->hire_date)) : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Job Title </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->job_id) ? $getRecord->job_id : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Salary </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->salary) ? $getRecord->salary : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Commission PCT </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->commission_pct) ? $getRecord->commission_pct : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Manager Name </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->manager_id) ? $getRecord->manager_id : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Department Name </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->department_id) ? $getRecord->department_id : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Is Role </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->is_role) ? 'HR' : 'Employee' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Created Date </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->created_at) ? date('d-m-Y H:i A' , strtotime($getRecord->created_at)) : '<p class="text-danger">No Available</p>' !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Updated Date </label>
                                        <div class="col-sm-10">
                                            {!! !empty($getRecord->updated_at) ? date('d-m-Y H:i A' , strtotime($getRecord->updated_at)) : '<p class="text-danger">No Available</p>' !!}
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
    <!-- /.content-wrapper -->
@endsection
