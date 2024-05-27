@extends('layouts.admin')

@section('title', 'AZ - Edit Consultant')

@section('content')

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Edit Consultant
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li><a href="/admin/consultants">consultants</a></li>
                    <li class="active">Edit Consultant</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->

                    <!-- form start -->
                    <form role="form" action="/admin/consultants/update/{{$consultant->id}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="box-body">

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name"
                                       value="{{ old('name', $consultant->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <input type="text" class="form-control" name="bio" id="bio" placeholder="bio"
                                       value="{{ old('bio', $consultant->bio) }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                       value="{{ old('email', $consultant->email) }}">
                            </div>

                            <div class="form-group">
                                <label for="experience_years">Experience Years</label>
                                <input type="number" class="form-control" name="experience_years" id="experience_years" placeholder="experience years"
                                       value="{{ old('experience_years', $consultant->experience_years) }}">
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
