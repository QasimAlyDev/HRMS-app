@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Employees</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add</a></li>
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
                            <h3 class="card-title">Add Employee</h3>
                        </div>
                        <form class="form-horizontal" method="post" accept="{{ url('admin/employees/add') }}" 
                        action="" enctype="multipart/form-data">

                        @csrf

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">
                                    First Name <span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"
                                        placeholder="Enter First Name" value="{{old('name')}}" required>
                                    </div>
                            </div>        
                            <div class="form-group row">
                                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="last_name"
                                        placeholder="Enter Last Name" value="{{old('last_name')}}">
                                    </div>
                            </div>        
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">
                                    Email <span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email"
                                        placeholder="Enter Email ID" value="{{old('email')}}" required>
                                    </div>
                            </div>        
                            <div class="form-group row">
                                <label for="number" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone_number"
                                        placeholder="Enter Phone Number" value="{{old('phone_number')}}">
                                    </div>
                            </div>        
                            <div class="form-group row">
                                <label for="hire_date" class="col-sm-2 col-form-label">Hire Date
                                    <span style="color:red;">*</span>
                                </label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="hire_date"
                                            value="{{old('hire_date')}}" required>
                                    </div>
                            </div>        
                            <div class="form-group row">
                                <label for="Job Title" class="col-sm-2 col-form-label">Job Title
                                    <span style="color:red;">*</span>
                                </label>
                                    <div class="col-sm-10">
                                        <select name="job_id" class="form-control" required>
                                            <option value="">Select Job</option>
                                            <option value="1">Web Developer</option>
                                            <option value="2">PDF Developer</option>
                                        </select>
                                    </div>
                            </div>   
                            <div class="form-group row">
                                <label for="salary" class="col-sm-2 col-form-label">Salary
                                    <span style="color:red;">*</span>
                                </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="salary"
                                        placeholder="Enter Salary" value="{{old('salary')}}" required>
                                    </div>
                            </div>       
                            <div class="form-group row">
                                <label for="Commission Pct" class="col-sm-2 col-form-label">Commission PCT
                                    <span style="color:red;">*</span>
                                </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="commission_pct"
                                        placeholder="Enter Commission PCT" value="{{old('commission_pct')}}" required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="Manager Name" class="col-sm-2 col-form-label">Manager Name
                                    <span style="color:red;">*</span>
                                </label>
                                    <div class="col-sm-10">
                                        <select name="manager_id" class="form-control" required>
                                            <option value="">Select Manager Name</option>
                                            <option value="1">abc</option>
                                            <option value="2">xyz</option>
                                        </select>
                                    </div>
                            </div> 
                            <div class="form-group row">
                                <label for="Department Name" class="col-sm-2 col-form-label">Department Name
                                    <span style="color:red;">*</span>
                                </label>
                                    <div class="col-sm-10">
                                        <select name="department_it" class="form-control" required>
                                            <option value="">Select Department Name</option>
                                            <option value="1">Developer Department</option>
                                            <option value="2">BDM Department</option>
                                        </select>
                                    </div>
                            </div>   
                            <div class="card-footer">
                                <a href="{{ url('admin/employees') }}" class="btn btn-default">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
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