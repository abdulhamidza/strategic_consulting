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
                    Edit User
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li><a href="/admin/users">users</a></li>
                    <li class="active">Edit user</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Author Information</h3>
                    </div>
                    <!-- /.box-header -->

                    <!-- form start -->
                    <form role="form" action="/admin/users/update/{{$user->id}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="box-body">

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name"
                                       value="{{ old('name', $user->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                       value="{{ old('email', $user->email) }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <small class="text-muted">Leave blank to keep the existing password.</small>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone"
                                       value="{{ old('phone', $user->phone) }}">
                            </div>

                            <div class="form-group">
                                <label for="birthdate">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate"
                                       value="{{ $user->birthdate && strtotime($user->birthdate) ? date('Y-m-d', strtotime($user->birthdate)) : '' }}"
                                       min="2024-01-01" max="2025-12-30" />
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="none">Select</option>
                                    <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" name="role">
                                    <option value="client" {{ old('role', $user->role) == 'client' ? 'selected' : '' }}>Client</option>
                                    <option value="consultant" {{ old('role', $user->role) == 'consultant' ? 'selected' : '' }}>Consultant</option>
                                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

@endsection
