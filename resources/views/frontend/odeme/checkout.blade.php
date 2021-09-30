@extends('layouts.anatema-app')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title>Perlantz Order </title>
@endsection


@section('sayfa-description')@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title') @endsection
@section('tw-site','')
@section('tw-description')@endsection


@section('fc-title')@endsection

@section('fc-image') @endsection
@section('fc-description')@endsection

@section('content')
    <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">shop</a></li>
                                <li class="breadcrumb-item active" href="" aria-current="page">Order Phase 1</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="post" action="{{route('step1checkout')}}"  class="" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h3 class="font-weight-bold text-4 text-center">Your Orders ({{Cart::content()->count()}})</h3>
                                <div class="shop-cart">

                                    <div class="table-responsive text-center">
                                        @if(count(Cart::content())>0)
                                            <table class="shop-cart-table w-100">
                                                <thead>
                                                <tr>
                                                    <th class="product-thumbnail"></th>
                                                    <th class="product-name"><strong>Product</strong></th>
                                                    <th class="product-price"><strong>Quantity</strong></th>
                                                    <th class="product-price"><strong>Price</strong></th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach(Cart::content() as $urunCartItem)
                                                    <tr class="cart-item">
                                                        <td class="product-thumbnail">
                                                            <img src="/frontend/uploads/product/{{$urunCartItem->options->urun_resmi}}" class="img-fluid" width="67" alt="" />
                                                        </td>
                                                        <td class="product-name">
                                                            <a href="{{route('urun',$urunCartItem->options->slug)}}">{{$urunCartItem->name}}</a>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="unit-price">{{$urunCartItem->qty}}</span>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="unit-price">${{$urunCartItem->price}}</span>
                                                        </td>



                                                    </tr>
                                                @endforeach
                                                @else
                                                    <div style="margin-top: 50px;" class="text-center">
                                                        <h1 class="text-center">Sepetinizde Ürün yok </h1>
                                                        <a href="{{route('anasayfa','#products')}}" class="btn oem-button text-light btn-rounded font-weight-bold btn-h-2 btn-v-3 text-center">RETURN TO PRODUCTS</a>
                                                    </div>

                                                @endif
                                                </tbody>
                                            </table>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="font-weight-bold text-4 text-center mb-3">Cart Totals</h3>
                                <div class="table-responsive mb-4">
                                    <table class="cart-totals w-100">
                                        <tbody class="border-top-0">
                                        <tr>
                                            <td>
                                                <span class="cart-total-label">Cart Subtotal</span>
                                            </td>
                                            <td>
                                                <span class="cart-total-value">€{{Cart::Subtotal()}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="cart-total-label">Shipping</span>
                                            </td>
                                            <td>
                                                <span class="cart-total-value">Free Delivery</span>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom-0">
                                            <td>
                                                <span class="cart-total-label">Total</span>
                                            </td>
                                            <td>
                                                <span class="cart-total-value text-color-primary text-4">€{{Cart::total()}}</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="shopPayment">
                                    <div class="radio-custom">
                                        <input type="radio" value="stripe" id="toggle1" name="checkout">
                                        <label class="font-weight-semibold" for="shopPaymentCheque">Pay via Stripe <span><img style="height: 28px; margin-left: 5px;" src="/frontend/assets/img/stripe.jpg"></span></label>
                                    </div>
                                    <div class="radio-custom">
                                        <input type="radio" value="paypal" name="checkout">
                                        <label class="font-weight-semibold" for="shopPaymentPaypal">Pay via Paypal <span><img style="height: 55px;" src="/frontend/assets/img/paypal.jpg"></span></label>
                                    </div>


                                </div>
                            </div>

                            <div style="display:none; margin-top: 25px;" type="text"  id="otherAnswer" class="container">
                                <div class="row">

                                    <div class="col-md-3 col-md-offset-3">

                                    </div>
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="credit-card-box">
                                            <div style=" margin: 20px;" class="panel panel-default  ">

                                                <div class="panel-body">
                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 col-md-6 form-group '>
                                                            <label class='control-label text-color-dark'>Name on Card</label>
                                                            <input class='form-control bg-light-3 rounded border-0 text-color-dark text-1' size='4' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-6 form-group '>
                                                            <label class='control-label text-color-dark'>Card Number</label>
                                                            <input autocomplete='off' class='form-control card-number bg-light-3 rounded border-0 text-color-dark text-1' size='20' type='text'>
                                                        </div>
                                                    </div>
                                                    <div class='form-row row'>
                                                        <div class='col-xs-12 col-md-4 form-group cvc '>
                                                            <label class='control-label text-color-dark'>CVC</label>
                                                            <input autocomplete='off' class='form-control card-cvc  bg-light-3 rounded border-0 text-color-dark text-1' placeholder='ex. 311' size='4' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration '>
                                                            <label class='control-label text-color-dark'>Month</label>
                                                            <input class='form-control card-expiry-month  bg-light-3 rounded border-0 text-color-dark text-1' placeholder='MM' size='2' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-4 form-group expiration '>
                                                            <label class='control-label text-color-dark'>Year</label>
                                                            <input class='form-control card-expiry-year  bg-light-3 rounded border-0 text-color-dark text-1' placeholder='YYYY' size='4' type='text'>
                                                        </div>
                                                    </div>
                                                    {{-- <div class='form-row row'>
                                                       <div class='col-md-12 error form-group hide'>
                                                          <div class='alert-danger alert'>Please correct the errors and try
                                                             again.
                                                          </div>
                                                       </div>
                                                    </div> --}}


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 col-md-offset-3">

                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $("input[type='radio']").change(function() {
                                        if ($(this).val() == "stripe") {
                                            $("#otherAnswer").show();
                                        } else {
                                            $("#otherAnswer").hide();
                                        }
                                    });
                                });

                                $('input:radio').click(function () {
                                    if ($(this).val() == "stripe") {
                                        $('#payment-form').attr('class', 'require-validation');
                                    }
                                    else {
                                        $('#payment-form').attr('class', '');
                                    }
                                });






                            </script>


                        </div>





                        <div style="margin-top: 50px;" class="row">

                            <div style="margin-bottom: 25px;" class="col text-center">
                                {!! Form::submit(trans('PLACE ORDER'), ['class' => 'btn btn-sqr ']) !!}

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        </form>
        </div>
        </div>
        </div>
    </section>


@endsection

@section('js-extender')

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>


@endsection
