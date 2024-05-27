@extends('layouts.front')

@section('title', 'AZ - Our Work')

@section('content')
    <!-- our work -->
    <div class="ourwork">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset('assets')}}/front/images/our.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset('assets')}}/front/images/our1.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset('assets')}}/front/images/our.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset('assets')}}/front/images/our1.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset('assets')}}/front/images/our.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset('assets')}}/front/images/our1.jpg" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our work -->
@endsection
