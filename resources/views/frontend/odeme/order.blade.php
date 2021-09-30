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
                    <form method="post" action="{{route('odemeyap')}}"  class="" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <div class="row mb-5">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <h2 class="font-weight-bold mb-3 text-center">Billing Address</h2>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_name">NAME:</label>
                                        {!! Form::text('billing_name',$user->name, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Name')) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_last_name">LAST NAME:</label>
                                        {!! Form::text('billing_lastname',$user->surname, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Last Name')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="billing_company">COMPANY NAME:</label>
                                        {!! Form::text('billing_company',$user->detay->firm_name, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Company')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="billing_address">ADDRESS:</label>
                                        {!! Form::text('billing_address',$user->detay->adress, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Address')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        {!! Form::text('billing_address2',$user->detay->adress2, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Address 2')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="billing_city">Country:</label>
                                        {!! Form::text('billing_country',$user->detay->country, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing City')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="billing_city">CITY / TOWN:</label>
                                        {!! Form::text('billing_state',$user->detay->state, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing City')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_email">EMAIL ADDRESS:</label>
                                        {!! Form::text('billing_email',$user->email, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing Email')) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="billing_phone">PHONE:</label>
                                        {!! Form::text('billing_phone',$user->detay->phone, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Billing phone')) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="font-weight-bold text-center mb-3">Shipping Address</h2>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_name">NAME:</label>
                                        {!! Form::text('shipping_name',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Name')) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_last_name">LAST NAME:</label>
                                        {!! Form::text('shipping_lastname',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Last Name')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_company">COMPANY NAME:</label>
                                        {!! Form::text('shipping_company',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Company')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_address">ADDRESS:</label>
                                        {!! Form::text('shipping_address',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Address')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">

                                        {!! Form::text('shipping_address2',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Address 2')) !!}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_city">Country:</label>
                                        {!! Form::text('shipping_country',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Country')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_city">State:</label>
                                        {!! Form::text('shipping_state',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Country')) !!}

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark font-weight-semibold" for="shipping_notes">NOTES:</label>
                                        {!! Form::textarea('shipping_notes',null, array('class' => 'form-control line-height-1 bg-light-5','placeholder'=>'Shipping Notes')) !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4 mb-md-0">
                                <h3 class="font-weight-bold text-4 text-center">Your Orders ({{Cart::content()->count()}})</h3>
                                <div class="shop-cart">

                                    <div class="table-responsive text-center">
                                        @if(count(Cart::content())>0)
                                            <table class="shop-cart-table w-100">
                                                <thead>
                                                <tr>

                                                    <th class="product-name"><strong>Product</strong></th>
                                                    <th class="product-price"><strong>Quantity</strong></th>

                                                    <th class="product-price"><strong>Price</strong></th>
                                                    <th class="product-price"><strong>CenterStone / Accent Stone / Print Logo </strong></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach(Cart::content() as $urunCartItem)
                                                    <tr class="cart-item">

                                                        <td class="product-name">
                                                            <a href="{{route('urun',$urunCartItem->options->slug)}}">{{$urunCartItem->name}}</a>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="unit-price">{{$urunCartItem->qty}}</span>
                                                        </td>


                                                        <td class="product-price">
                                                            <span class="unit-price">${{$urunCartItem->price}}</span>
                                                        </td>
                                                        <td>
                                                        @if($urunCartItem->options->centerstone == null)
                                                        @else
                                                                <input type="hidden" readonly name="centerstone" value="{{$urunCartItem->options->centerstone}} ">
                                                                <span class="unit-price">{{$urunCartItem->options->centerstone}} /</span>

                                                        @endif
                                                        @if($urunCartItem->options->accentstone == null)
                                                                <span class="unit-price">None Accent Stone /</span>
                                                        @else
                                                                <input type="hidden" readonly name="accentstone" value="{{$urunCartItem->options->accentstone}} ">
                                                                <span class="unit-price">{{$urunCartItem->options->accentstone}}/</span>

                                                        @endif
                                                        @if($urunCartItem->options->perlantzlogo == null)
                                                                <span class="unit-price">None Print Logo</span>
                                                        @else
                                                                <input type="hidden" readonly name="perlantzlogo" value="{{$urunCartItem->options->perlantzlogo}} ">
                                                                <span class="unit-price">{{$urunCartItem->options->perlantzlogo}}</span>

                                                            @endif
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

                            <div  style="margin-top: 25px;" class="col-md-12 ">
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

                            </div>

                            <div style="margin-left: 35px;" class="col-md-6 ">
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

                        <div style="margin-top: 35px;" class="row">

                            <div class="col-md-6 col-sm-6">

                                <h2 style="margin-bottom: 10px;" class="cart-total-label text-center">Distance Sales Agreement </h2>
                                <div id="on-bilgilendirme" style="height:350px; margin-top:5px; border:1px solid #ccc; padding:6px 12px; font-size:14px; overflow-y:auto;">

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h2 style="margin-bottom: 10px;" class="cart-total-label text-center">Return Policy</h2>
                                <div id="on-bilgilendirme" style="height:350px; margin-top:5px; border:1px solid #ccc; padding:6px 12px; font-size:14px; overflow-y:auto;">

                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 50px;" class="row">
                            <div style="margin-bottom: 50px;" class="col-12 text-center">
                                <input type="checkbox" name="agree1" value="1" id="agree1" /> I have read and agree to the <a href="{{route('terms')}}"><b>Terms and Conditions</b></a> and <a href="{{route('privacy')}}"><b>Privacy Policy</b></a>
                            </div>
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
