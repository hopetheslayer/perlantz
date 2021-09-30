@extends('layouts.anatema-app')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title> Perlantz </title>
@endsection


@section('sayfa-description')@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title')@endsection
@section('tw-site','@rdglobal_inc')
@section('tw-description')@endsection


@section('fc-title')@endsection

@section('fc-image') @endsection
@section('fc-description')@endsection

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="{{route('home')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('user.address')}}">Addresses</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="margin-top: 100px; margin-bottom: 100px;" class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-dashboard">
                    <div class="card-body">
                        <h3 class="card-title">Billing Address</h3><!-- End .card-title -->
                        <p><b>Billing name :</b> {{$user->name}}<br>
                            <b>Billing address : </b>{{$user->detay->adress}}<br>
                            <b>Billing address 2</b>{{$user->detay->adress2}}<br>
                            <b>Zip Code : </b> {{$user->detay->zipcode}}<br>
                            <b>Country : </b>{{$user->detay->country}}<br>
                            <b>State : </b>{{$user->detay->state}}<br>
                            <b>Firm Name : </b> {{$user->detay->firm_name}}<br>
                            <b>Tax No : </b>{{$user->detay->taxno}}<br><br>
                            <a class="btn btn btn-sqr" href="{{route('user.billing',$user->detay->id)}}">Edit <i class="icon-edit"></i></a></p>
                    </div><!-- End .card-body -->
                </div><!-- End .card-dashboard -->
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6">
                <div class="card card-dashboard">
                    <div class="card-body">
                        <h3 class="card-title">Shipping Address</h3><!-- End .card-title -->
                        @if($user->ship->adress || $user->ship->adress2 == 1 )
                            <p><b>Shipping State : </b> {{$user->ship->state}}<br>
                                <b>Shipping Country : </b> {{$user->ship->country}}<br>
                                <b>Shipping Adress : </b> {{$user->ship->adress}}<br>
                                <b>Shipping Adress 2 : </b> {{$user->ship->adress2}}<br>
                                <b>Shipping zipcode : </b> {{$user->ship->zipcode}}<br><br><br><br><br>
                        @else
                            <p>You have not set up this type of address yet.</p>
                        @endif



                        <a class="btn btn-sqr" href="{{route('user.shipper',$user->ship->id)}}">Edit <i class="icon-edit"></i></a></p>
                    </div><!-- End .card-body -->
                </div><!-- End .card-dashboard -->
            </div><!-- End .col-lg-6 -->








        </div>
        <div style="margin-top: 50px;" class="text-center">
            <a href="{{route('home')}}"  class="btn btn-sqr">Back</a>

        </div>
@endsection

@section('js-extender')







@stop
