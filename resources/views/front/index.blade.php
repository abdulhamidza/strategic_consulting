@extends('layouts.front')

@section('title', 'AZ - Strategic Consulting')

@section('banner')
    @include('front.banner')
@endsection

@section('content')
    <!-- about -->
    <div id="about"  class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>Web Development</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="{{asset('assets')}}/front/images/about_img.png" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- mobile -->
    <div id="mobile"  class="mobile">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="mobile_img">
                        <figure><img src="{{asset('assets')}}/front/images/mobile.png" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>Mobile App Development</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile -->
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
    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Request A call back</h2>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <textarea class="contactus" placeholder="Message" type="type" Message="Name">Message </textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection
