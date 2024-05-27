@extends('layouts.admin')

@section('title', 'AZ - New Consultation')

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
                    <li><a href="/admin/consultations">consultations</a></li>
                    <li class="active">new consultation</li>
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
                    <form role="form" action="/admin/consultations/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="description">
                            </div>
                            <div class="form-group">
                                <label for="date">Date and Time</label>
                                <input type="datetime-local" class="form-control" id="date" name="date"
                                       value="2024-01-01T12:00" min="2024-01-01T00:00" max="2026-12-30T23:59" />
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="number" class="form-control" name="duration" id="duration" placeholder="duration">
                            </div>
                            <div class="form-group">
                                {{--<label for="user_id">Client</label>
                                <input type="number" class="form-control" name="user_id" id="user_id" placeholder="user id">--}}
                                <label for="user_id">Consultant</label>
                                <select class="form-control" name="user_id" id="user_id">
                                    @foreach($Users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {{--<label for="consultant_id">Consultant</label>
                                <input type="number" class="form-control" name="consultant_id" id="consultant_id" placeholder="consultant id">--}}
                                <label for="consultant_id">Consultant</label>
                                <select class="form-control" name="consultant_id" id="consultant_id">
                                    @foreach($Consultants as $Consultant)
                                        <option value="{{ $Consultant->id }}">{{ $Consultant->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input type="number" class="form-control" name="fee" id="fee" placeholder="fee">
                            </div>
                            <div class="form-group">
                                <label for="customer_entity">Customer Entity</label>
                                <select class="form-control" name="customer_entity">
                                    <option value="person">Person</option>
                                    <option value="institution">Institution</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="review">Review</label>
                                <input type="text" class="form-control" name="review" id="review" placeholder="review">
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

@section('footer')

@endsection
