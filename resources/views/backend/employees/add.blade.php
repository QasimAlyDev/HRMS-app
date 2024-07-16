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
                        <form class="form-horizontal" method="post" accept="{{ url('admin/employees/add') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">
                                    First Name <span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Enter First Name" value="{{old('name')}}" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="Enter Email ID" value="{{old('email')}}" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>        
                            <div class="form-group row">
                                <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
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
                                    <input type="date" class="form-control @error('hire_date') is-invalid @enderror" name="hire_date"
                                        value="{{old('hire_date')}}" required>
                                    @error('hire_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>        
                            <div class="form-group row">
                                <label for="job_id" class="col-sm-2 col-form-label">Job Title
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <select name="job_id" class="form-control @error('job_id') is-invalid @enderror" required>
                                        <option value="">Select Job</option>
                                        <option value="1">Web Developer</option>
                                        <option value="2">PDF Developer</option>
                                    </select>
                                    @error('job_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label for="salary" class="col-sm-2 col-form-label">Salary
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('salary') is-invalid @enderror" name="salary"
                                    placeholder="Enter Salary" value="{{old('salary')}}" required>
                                    @error('salary')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>       
                            <div class="form-group row">
                                <label for="commission_pct" class="col-sm-2 col-form-label">Commission PCT
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('commission_pct') is-invalid @enderror" name="commission_pct"
                                    placeholder="Enter Commission PCT" value="{{old('commission_pct')}}" required>
                                    @error('commission_pct')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="manager_id" class="col-sm-2 col-form-label">Manager Name
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <select name="manager_id" class="form-control @error('manager_id') is-invalid @enderror" required>
                                        <option value="">Select Manager Name</option>
                                        <option value="1">abc</option>
                                        <option value="2">xyz</option>
                                    </select>
                                    @error('manager_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="department_id" class="col-sm-2 col-form-label">Department Name
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <select name="department_id" class="form-control @error('department_id') is-invalid @enderror" required>
                                        <option value="">Select Department Name</option>
                                        <option value="1">Developer Department</option>
                                        <option value="2">BDM Department</option>
                                    </select>
                                    @error('department_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        // Clear validation errors on input focus
        $('.form-control').on('input', function () {
            var input = $(this);
            if (input.val()) {
                input.removeClass('is-invalid');
                input.siblings('.invalid-feedback').hide();
            } 
        });
    });
</script>
@endsection 
