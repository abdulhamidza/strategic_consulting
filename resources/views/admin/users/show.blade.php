@extends('layouts.admin')

@section('title', 'AZ - Users')

@section('content')

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Show User
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li><a href="/admin/users">users</a></li>
                    <li class="active">show user</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box ">
                    <!-- box-header -->
                    <div class="box-header">
                        <h3 class="box-title">Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body padding">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th style="width: 150px">Id</th>
                                <td>{{$users->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Name</th>
                                <td>{{$users->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Email</th>
                                <td>{{$users->email}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Phone</th>
                                <td>{{$users->phone}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Birthdate</th>
                                <td>{{$users->birthdate}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Role</th>
                                <td>{{$users->role}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Gender</th>
                                <td>{{$users->gender}}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{route('admin.users.edit', ['id' => $users->id])}}" class=" btn btn-info btn-sm">Edit</a>
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

@endsection
