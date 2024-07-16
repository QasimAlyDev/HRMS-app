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
                                <li class="breadcrumb-item"><a href="#">List</a></li>
                                <li class="breadcrumb-item active">Employees</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    @include('message')

                    <a href="{{ url('admin/employees/add') }}" class="btn btn-outline-primary mb-2">Add Employee</a>

                    <div class="row">
                        <section class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>qasim</td>
                                                <td>Ali</td>
                                                <td>qasim@gmail.com</td>
                                            </tr>
                                        </tbody>
                                    </table>             
                                </div>
                            </div>

                        </section>
                    </div>

                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

@endsection     