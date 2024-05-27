@extends('layouts.admin')

@section('title', 'AZ - Consultation')

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
                    <li><a href="/admin/consultations">users</a></li>
                    <li class="active">Consultation</li>
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
                                <td>{{$Consultation->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Title</th>
                                <td>{{$Consultation->title}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Description</th>
                                <td>{{$Consultation->description}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Client</th>
                                <td>{{$Consultation->userId->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Consultant</th>
                                <td>{{$Consultation->consultantId->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Customer Entity</th>
                                <td>{{$Consultation->customer_entity}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Date</th>
                                <td>{{ \Carbon\Carbon::parse($Consultation->date)->format('Y-m-d (g:i A)') }}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Duration</th>
                                <td>{{$Consultation->duration}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Status</th>
                                <td>{{$Consultation->status}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Review</th>
                                <td>{{$Consultation->review}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Fee</th>
                                <td>{{$Consultation->fee}}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{route('admin.consultations.edit', ['id' => $Consultation->id])}}" class=" btn btn-info btn-sm">Edit</a>
                        <a href="{{route('admin.consultations.achieve_it', ['id' => $Consultation->id])}}" class=" btn btn-info btn-sm">Achieve the date</a>
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

@endsection
