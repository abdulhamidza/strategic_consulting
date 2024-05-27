x@extends('layouts.admin')

@section('title', 'AZ - New Consultant')

@section('content')

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    New Consultant
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li><a href="/admin/consultants">consultants</a></li>
                    <li class="active">new consultant</li>
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
                    <form role="form" action="/admin/consultants/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="full name">
                            </div>
                            <div class="form-group">
                                <label for="name">Bio</label>
                                <input type="text" class="form-control" name="bio" id="bio" placeholder="bio">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="experience_years">Experience Years</label>
                                <input type="number" class="form-control" id="experience_years" name="experience_years" placeholder="experience years"/>
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
