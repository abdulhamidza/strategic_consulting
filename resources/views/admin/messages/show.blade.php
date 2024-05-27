@extends('layouts.admin')

@section('title', 'AZ - Message')

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
                    <li><a href="/admin/messages">messages</a></li>
                    <li class="active">show message</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box ">
                    <!-- box-header -->
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body padding">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th style="width: 150px">Id</th>
                                <td>{{$Message->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Client</th>
                                <td>{{$Message->userId->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Subject</th>
                                <td>{{$Message->subject}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Message</th>
                                <td>{{$Message->message}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Reply</th>
                                <td>{{$Message->reply}}</td>
                            </tr>
                            <tr>
                                <th style="width: 150px">Status</th>
                                <td>{{$Message->status}}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    {{--<div class="box-footer clearfix">
                        <a href="{{route('admin.messages.edit', ['id' => $Message->id])}}" class=" btn btn-info btn-sm">Reply</a>
                    </div>--}}

                    <div class="box ">
                        <!-- box-header -->
                        <div class="box-header bg-info">
                            <form role="form" id="myForm" action="{{route('admin.messages.store', ['id' => $Message->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Reply</label>
                                    <textarea class="form-control" style="resize: none" name="reply">{{$Message->reply}}</textarea>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" id="submitButton" class="btn btn-primary">Reply</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body padding">
                        </div>
                    </div>

                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

@endsection
