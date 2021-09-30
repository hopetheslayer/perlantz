
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('siparisler')}}">Orders</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div style="margin-top: 50px; margin-bottom: 50px;" class="container text-center">
        <div class="myaccount-content">
            <h2 class="text-center">Requested Orders</h2>
            @if(count($siparisler)==0)
                <p>You don't have orders yet</p>
            @else
                <div class="myaccount-table table-responsive text-center">


                <table style="margin-top: 50px;" class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Order Code</th>
                        <th>Total Product</th>
                        <th>status</th>
                        <th>Settings</th>
                    </tr>
                    </thead>

                    <tr>
                        @foreach($siparisler as $siparis)
                            <td>SP-00{{$siparis->id}}</td>

                            <td>{{$siparis->sepet->sepet_urun_adet()}}</td>
                            <td>{{$siparis->durum}}</td>
                            <td><a href="{{route('siparis',$siparis->id)}}" class="btn btn btn-sqr">Details</a></td>
                    </tr>
                    @endforeach
                </table>
                </div>
            @endif
        </div>
        <div style="margin-top: 25px;" class="text-center">
            <a href="{{route('home')}}"  class="btn btn-sqr">Back</a>

        </div>
    </div>




@endsection

@section('js-extender')




@stop
