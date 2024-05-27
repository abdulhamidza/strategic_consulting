@extends('layouts.admin')

@section('title', 'AZ - Consultants')

@section('content')

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Show Consultant
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li><a href="/admin/consultants">consultants</a></li>
                    <li class="active">show consultant</li>
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
                                <td>{{$Consultant->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Name</th>
                                <td>{{$Consultant->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Bio</th>
                                <td>{{$Consultant->bio}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Email</th>
                                <td>{{$Consultant->email}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Ex-Years</th>
                                @if($Consultant->experience_years >= 1)
                                    <td>{{$Consultant->experience_years}}y</td>
                                @else

                                    <td></td>
                                @endif

                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{route('admin.consultants.edit', ['id' => $Consultant->id])}}" class=" btn btn-info btn-sm">Edit</a>
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

@endsection
