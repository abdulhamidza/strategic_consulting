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
                    New User
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li><a href="/admin/users">users</a></li>
                    <li class="active">new user</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="/admin/users/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="full name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="phone number">
                            </div>

                            <div class="form-group">
                                <label for="birthdate">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" value="2024-01-01"/>
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="none">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" name="role">
                                    <option value="client">Client</option>
                                    <option value="consultant">Consultant</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

@endsection
