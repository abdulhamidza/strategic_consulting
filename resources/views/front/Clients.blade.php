@extends('layouts.front')

@section('title', 'AZ - Clients')

@section('content')
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="titlepage">
                        <h2>What is Say clients</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients_box">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="jonu">
                        <img src="{{asset('assets')}}/front/images/cross_img.png" alt="#"/>
                        <h3>Jone due</h3>
                        <strong>(sure there isn't)</strong>
                        <a class="read_more" href="#">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end clients -->
@endsection
