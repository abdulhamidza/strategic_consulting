@extends('layouts.admin')

@section('title', 'AZ - Messages')

@section('content')

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All Messages
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i>dashboard</a></li>
                    <li class="active">messages</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Navigation Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li><a href="/admin/messages">All Messages</a></li>
                        <li class="active"><a data-toggle="tab">Unread</a></li>
                        <li><a href="/admin/messages/unreplied">Unreplied</a></li>
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
                                <th>Client</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Messages as $Message)
                                @if($Message->status ==  "new")
                                    <tr class="row-align">
                                        <td>{{$Message->id}}</td>
                                        <td>{{$Message->userId->name}}</td>
                                        <td>{{$Message->subject}}</td>
                                        <td>{{$Message->status}}</td>
                                        <td><a href="{{route('admin.messages.show', ['id' => $Message->id])}}" class="btn btn-success btn-sm">Show</a></td>
                                        <td><a href="{{route('admin.messages.delete', ['id' => $Message->id])}}" class="btn btn-danger btn-sm"
                                               onclick="return confirm('Are you sure, you want to delete the message.!?')">
                                                Delete</a>
                                    </tr>
                                @endif
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
