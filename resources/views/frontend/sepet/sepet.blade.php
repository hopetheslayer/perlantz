@extends('layouts.anatema')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title>Perlantz </title>
@endsection


@section('sayfa-description') @endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Perlantz Admin')

@section('tw-title')Perlantz @endsection
@section('tw-site','')
@section('tw-description')@endsection


@section('fc-title')Perlantz @endsection

@section('fc-image')@endsection
@section('fc-description')@endsection

@section('content')


    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">shop</a></li>
                                <li class="breadcrumb-item active" href="{{route('cart')}}" aria-current="page">cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            @if(count(Cart::content())>0)
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div  class="cart-table table-responsive">

                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <th class="product-thumbnail">Photo</th>
                                    <th class="product-name"><strong>Product</strong></th>
                                    <th class="product-price"><strong>Price</strong></th>
                                    <th class="product-quantity"><strong>Quantity</strong></th>
                                    <th class="product-remove">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $urunCartItem)
                                    

                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="/frontend/uploads/urun/{{$urunCartItem->options->urun_resmi}}" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="{{route('urun',$urunCartItem->options->slug)}}">{{$urunCartItem->name}}</a></td>
                                    <td class="pro-price"><span>€{{$urunCartItem->price}}</span></td>
                                    <td class="product-quantity">
                                        <div class="quantity">
                                            <a href="#" class="btn btn-xs btn-default urun-adet-azalt" data-id="{{$urunCartItem->rowId}}"
                                               data-adet="{{$urunCartItem->qty-1}}">-</a>
                                            <span style="padding: 10px 20px">{{$urunCartItem->qty}}</span>
                                            <a href="#" class="btn btn-xs btn-default urun-adet-artir" data-id="{{$urunCartItem->rowId}}"
                                               data-adet="{{$urunCartItem->qty+1}}">+</a>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>€{{Cart::subtotal()}}</span></td>
                                    <td class="pro-remove"><a href="{{ route('cart.kaldir',$urunCartItem->rowId) }}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h6>Cart Totals</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>€{{Cart::subtotal()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>Free Delivery</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">€{{Cart::total()}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a style="margin-top: 10px;" href="{{route('odeme')}}" class="btn btn-sqr">PROCEED TO CHECKOUT</a>
                            <a style="margin-top: 10px;" href="{{route('anasayfa')}}" class="btn btn-sqr"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div style="margin-top: 50px;" class="text-center">
                    <h1 class="text-center">You have no items in your cart</h1>
                    <a style="margin-top: 15px;" href="{{route('anasayfa')}}" class="btn btn-sqr">RETURN TO PRODUCTS</a>
                </div>

            @endif
        </div>
    </div>
    <!-- cart main wrapper end -->



@section('js-extender')




    <script>


        setTimeout(function () {
            $('.alert').slideUp(10);
        },5000);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>


        $(function () {

            $('.urun-adet-artir, .urun-adet-azalt').on('click', function () {

                var id= $(this).attr('data-id');
                var adet= $(this).attr('data-adet');
                $.ajax({
                    type: 'PATCH',
                    url : '/cart/guncelle/' +id,
                    data : {adet:adet},
                    success:function (result) {
                        if(result.success)
                            window.location.href = '/cart';

                    }
                });
            });
        });
    </script>

@endsection

@endsection


