@extends('backend.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Jobs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">View</a></li>
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
                            <h3 class="card-title">View Job</h3>
                        </div>
                        <form class="form-horizontal" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="form-group col-md-4 border">
                                        <label> ID</label> : {{ $getRecord->id }}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label> Job Title </label> : {{ $getRecord->job_title }}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label> Min Salary </label> : {{ $getRecord->min_salary }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-md-4 border">
                                        <label> Max Salary </label> : {{ $getRecord->max_salary }}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label> Created Date </label> : {{ \Carbon\Carbon::parse($getRecord->created_at)->format('d-m-Y h:i A') }}
                                    </div>
                                    <div class="form-group col-md-4 border">
                                        <label> Updated Date </label> : {{ \Carbon\Carbon::parse($getRecord->updated_at)->format('d-m-Y h:i A') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('admin/jobs') }}" class="btn btn-default">Back</a>
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