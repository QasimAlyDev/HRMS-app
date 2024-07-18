@extends('backend.layouts.app') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jobs</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6" style="text-align: right;">
                    <a href="{{ url('admin/jobs/add') }}" class="btn btn-outline-primary mb-2">Add job</a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid"> 

            @include('message') 

            <div class="row">
                <section class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Search jobs</h3>
                        </div>
                        <form method="get" action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <label for="id">ID</label>
                                        <input type="text" name="id" class="form-control" value="{{ request()->id }}"
                                            placeholder="ID">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="Job Title">Job Title</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ request()->job_title }}" placeholder="Job Title">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="salary">Min Salary</label>
                                        <input type="text" name="min_salary" class="form-control"
                                            value="{{ request()->min_salary }}" placeholder="Min Salary">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="salary">Max Salary</label>
                                        <input type="text" name="max_salary" class="form-control"
                                            value="{{ request()->max_salary }}" placeholder="Max Salary">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <button class="btn btn-primary" type="submit" style="margin-top:30px;"> Search
                                        </button>
                                        <a href="{{ url('admin/jobs') }}" class="btn btn-success"
                                            style="margin-top:30px;"> Reset </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">jobs List</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Job Title</th>
                                        <th>Min Salary</th>
                                        <th>Max Salary</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($getRecord as $value)
                                        
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->job_title }}</td>
                                        <td>{{ $value->min_salary }}</td>
                                        <td>{{ $value->max_salary }}</td>
                                        <td>{{ date('d-m-Y H:i A' , strtotime($value->created_at)) }}</td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <a href="{{ url('admin/jobs/view/'.$value->id) }}"
                                                    class="btn btn-sm btn-outline-info m-1" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href=""
                                                    class="btn btn-sm btn-outline-primary m-1" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href=""
                                                    class="btn btn-sm btn-outline-danger m-1"
                                                    onclick="return confirm('Are you sure you want to deleted?')"
                                                    data-bs-toggle="tooltip" title="Delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr> 
                                    
                                    @empty 
                                    <tr>
                                        <td colspan="100%" style="text-align: center"> No Record Found. </td>
                                    </tr>
                                        
                                    @endforelse
                                    
                                </tbody>
                            </table>
                            <div style="padding:10px; float: right;">
                                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection