@extends('layouts.anatema-app')

@section('content')

    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">My Account</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('home')}}">Dashboard</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="row">


                    <div style="margin-top: 55px; margin-bottom: 100px;" class="col-md-12 col-lg-12 text-center">
                        <p>
                        <h1>Hello <span class="font-weight-normal text-dark">{{$user->name}}</span></h1>
                        <br>
                        <h4>From your account dashboard you can view your <a  href="{{route('siparisler')}}" class="text-3"><b>recent orders</b></a>, manage your <a href="{{route('user.address')}}" class="text-3"><b>shipping and billing addresses</b></a></h4></div>
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->


@endsection
