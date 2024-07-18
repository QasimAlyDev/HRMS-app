@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Jobs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add</a></li>
                        <li class="breadcrumb-item active">Jobs</li>
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
                            <h3 class="card-title">Add Job</h3>
                        </div>
                        <form class="form-horizontal" method="post" accept="{{ url('admin/jobs/add') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="job" class="col-sm-2 col-form-label">
                                    Job Title <span style="color:red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title"
                                    placeholder="Enter Job Title" value="{{old('job_title')}}" required>
                                    @error('job_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>        
                            <div class="form-group row">
                                <label for="salary" class="col-sm-2 col-form-label">Min Salary</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('min_salary') is-invalid @enderror" name="min_salary"
                                    placeholder="Enter Min Salary" value="{{old('min_salary')}}">
                                    @error('min_salary')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>        
                            <div class="form-group row">
                                <label for="salary" class="col-sm-2 col-form-label">Max Salary</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('max_salary') is-invalid @enderror" name="max_salary"
                                    placeholder="Enter Max Salary" value="{{old('max_salary')}}">
                                    @error('max_salary')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>                   
                            <div class="card-footer">
                                <a href="{{ url('admin/jobs') }}" class="btn btn-default">Back</a>
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
