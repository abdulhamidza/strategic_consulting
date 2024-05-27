@extends('layouts.admin')

@section('title', 'AZ - All Consultations')

@section('content')

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All users
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li class="active">consultations</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Navigation Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab">All Consultations</a></li>
                        <li><a href="/admin/unachieved_appointments">Unachieved</a></li>
                        <li><a href="/admin/achieved_appointments">Achieved</a></li>
                        <li><a href="/admin/consultations/create">New</a></li>
                    </ul>
                </div>

                <div class="box">
                    <!-- box-header -->
                    <!-- Search bar -->
                    <div class="box-header with-border">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search ...">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <br>
                        <table id="data-table" style="margin: 0" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 40px">Id</th>
                                <th>title</th>
                                <th>Client</th>
                                <th>Consultant</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Consultations as $Consultation)
                                <tr class="row-align">
                                    <td>{{$Consultation->id}}</td>
                                    <td>{{$Consultation->title}}</td>
                                    <td>{{$Consultation->userId->name}}</td>
                                    <td>{{$Consultation->consultantId->name}}</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($Consultation->date)->format('Y-m-d (g:i A)') }}
                                    </td>
                                    <td>{{$Consultation->status}}</td>
                                    <td><a href="{{route('admin.consultations.show', ['id' => $Consultation->id])}}" class="btn btn-success btn-sm">Show</a></td>
                                    <td><a href="{{route('admin.consultations.edit', ['id' => $Consultation->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td><a href="{{route('admin.consultations.delete', ['id' => $Consultation->id])}}" class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure, you want to delete the consultation.!?')">
                                            Delete</a>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

@endsection



@section('footer')
    <!-- Add any additional footer content here -->
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var input = document.getElementById('searchInput');
            var filter = input.value.toLowerCase();
            var table = document.getElementById('data-table');
            var trs = table.getElementsByTagName('tr');

            for (var i = 1; i < trs.length; i++) {
                var tds = trs[i].getElementsByTagName('td');
                var found = false;

                for (var j = 0; j < tds.length; j++) {
                    if (tds[j].textContent.toLowerCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }

                if (found) {
                    trs[i].style.display = '';
                } else {
                    trs[i].style.display = 'none';
                }
            }
        });
    </script>
@endsection
