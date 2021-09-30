
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
                                <li class="breadcrumb-item " aria-current="page"><a href="{{route('siparisler')}}">Orders</a></li>
                                @foreach($siparis->sepet->sepet_urunler as $sepet_urun)
                                <li class="breadcrumb-item active" aria-current="page"><a > {{$sepet_urun->urun->urun_adi}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">

        <div role="tabpanel">
            <div class="myaccount-content">
                <h5 class="text-center">Order Details</h5>
                <div class="myaccount-table table-responsive text-center">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>

                            <th>Order Id</th>
                            <th>Order Email</th>
                            <th>Order Phonenumber</th>
                            <th>Order Total Price</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>Order Country </th>
                            <th>Order State </th>
                            <th>Order Note </th>
                            <th>Order Address</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($siparisler as $spx)

                        <tr>
                            <td>{{$spx->id}}</td>
                            <td>{{$spx->billing_email}}</td>
                            <td>{{$spx->billing_phone}}</td>
                            <td>€ {{$spx->siparis_tutari/100,3}}</td>
                            <td>{{$spx->durum}}</td>
                            <td>{{$spx->created_at}}</td>
                            <td>{{$spx->billing_country}}</td>
                            <td>{{$spx->billing_state}}</td>
                            <td>{{$spx->shipping_notes}}</td>
                            <td>{{$spx->billing_address}}</td>

                        </tr>
                        @endforeach


                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>

                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Total Price</th>
                            <th>Quantity</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($siparis->sepet->sepet_urunler as $sepet_urun)
                            <tr>
                                <td style="width: 150px;">
                                    <a href="{{route('urun',$sepet_urun->urun->slug)}}">
                                        <img class="img-fluid" width="125" alt="" src="/frontend/uploads/product/{{$sepet_urun->urun->urun_resmi}}">
                                    </a>
                                </td>

                                <td>
                                    <a href="{{route('urun',$sepet_urun->urun->slug)}}">
                                        {{$sepet_urun->urun->urun_adi}}
                                    </a>
                                </td>

                                <td>{{$sepet_urun->adet}}</td>

                                <td>{{$sepet_urun->durum}}</td>

                            </tr>
                        @endforeach

                    </table>


                </div>
                <div class="text-center">
                    <a href="{{route('siparisler')}}"  class="btn btn-sqr">Back</a>

                </div>

            </div>
        </div>
    </div>




@endsection

@section('js-extender')




@stop
