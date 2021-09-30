4@extends('layouts.anatema-app')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title>RD Global Research & Development </title>
@endsection


@section('sayfa-description')We're dedicated to continuous innovation in order to shape everything we do Our purpose is to improve health of the patients all around the world.@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title')RD Global Research & Development @endsection
@section('tw-site','@rdglobal_inc')
@section('tw-description')We're dedicated to continuous innovation in order to shape everything we do Our purpose is to improve health of the patients all around the world.@endsection


@section('fc-title')RD Global Research & Development @endsection

@section('fc-image')https://www.rdglobal.com.tr/frontend/img/anasayfa/rev-slider-1.png @endsection
@section('fc-description')We're dedicated to continuous innovation in order to shape everything we do Our purpose is to improve health of the patients all around the world.@endsection

@section('content')

    <link rel="stylesheet" href="/frontend/css/checkout.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">



    <section >
        <section  class="multi_step_form">
            <form method="post" action="{{route('odemeyap')}}" enctype="multipart/form-data" id="msform">
                @csrf
                <div class="tittle">
                    <h2>Verification Process</h2>
                    <p>In order to use this service, you have to complete this verification process</p>
                </div>
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">See Orders</li>
                    <li>Verify Billing Address</li>
                    <li>Verify Shipping Address</li>
                    <li>Agreements</li>

                </ul>

                <fieldset>
                    <div class="col-md-12 mb-4 mb-md-0">
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
                    <div class="col-md-12">
                        <h3 class="font-weight-bold text-4 text-center mb-3">Cart Totals</h3>
                        <div class="table-responsive mb-4">
                            <table class="cart-totals w-100">
                                <tbody class="border-top-0">
                                <tr>
                                    <td>
                                        <span class="cart-total-label">Cart Subtotal</span>
                                    </td>
                                    <td>
                                        <span class="cart-total-value">${{Cart::Subtotal()}}</span>
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
                                        <span class="cart-total-value text-color-primary text-4">${{Cart::total()}}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button type="button" class="action-button previous_button">Back</button>
                    <button type="button" class="next action-button">Continue</button>
                </fieldset>
                <fieldset >
                    <div   class="row mb-5">
                        <div  class="col-md-12 mb-5 mb-md-0">
                            <h2 class="font-weight-bold mb-3 text-center">Billing Address</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-dark font-weight-semibold" for="billing_name">NAME:</label>
                                    {!! Form::text('billing_name',$user->name, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing Name')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-color-dark font-weight-semibold" for="billing_last_name">LAST NAME:</label>
                                    {!! Form::text('billing_last_name',$user->surname, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing Last Name')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="billing_company">COMPANY NAME:</label>
                                    {!! Form::text('billing_company',$user->detay->firm_name, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing Company')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="billing_address">ADDRESS:</label>
                                    {!! Form::text('billing_address',$user->detay->adress, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing Address')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    {!! Form::text('billing_address2',$user->detay->adress2, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing Address 2')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="billing_city">Country:</label>
                                    {!! Form::text('billing_country',$user->detay->country, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing City')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="billing_city">CITY / TOWN:</label>
                                    {!! Form::text('billing_state',$user->detay->state, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing City')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-dark font-weight-semibold" for="billing_email">EMAIL ADDRESS:</label>
                                    {!! Form::text('billing_email',$user->email, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing Email')) !!}

                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-color-dark font-weight-semibold" for="billing_phone">PHONE:</label>
                                    {!! Form::text('billing_phone',$user->detay->phone, array('class' => 'form-control  bg-light-5','placeholder'=>'Billing phone')) !!}

                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="button" class="action-button previous previous_button">Back</button>
                    <button type="button" class="next action-button">Continue</button>
                </fieldset>
                <fieldset>

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="font-weight-bold text-center mb-3">Shipping Address</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-color-dark font-weight-semibold" for="shipping_name">NAME:</label>
                                    {!! Form::text('shipping_name',$user->name, array('class' => 'form-control  bg-light-5','placeholder'=>'Shipping Name')) !!}

                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-color-dark font-weight-semibold" for="shipping_last_name">LAST NAME:</label>
                                    {!! Form::text('shipping_last_name',$user->surname, array('class' => 'form-control  bg-light-5','placeholder'=>'Shipping Last Name')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="shipping_company">COMPANY NAME:</label>
                                    {!! Form::text('shipping_company',null, array('class' => 'form-control  bg-light-5','placeholder'=>'Shipping Company')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="shipping_address">ADDRESS:</label>
                                    {!! Form::text('shipping_address',$user->ship->adress, array('class' => 'form-control  bg-light-5','placeholder'=>'Shipping Address')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">

                                    {!! Form::text('shipping_address2',$user->ship->adress2, array('class' => 'form-control  bg-light-5','placeholder'=>'Shipping Address 2')) !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="shipping_city">Country:</label>
                                    {!! Form::text('shipping_country',$user->ship->country, array('class' => 'form-control  bg-light-5','placeholder'=>'Shipping Country')) !!}

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark font-weight-semibold" for="shipping_city">State:</label>
                                    {!! Form::text('shipping_state',$user->ship->state, array('class' => 'form-control  bg-light-5','placeholder'=>'Shipping Country')) !!}

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
                    <button type="button" class="action-button previous previous_button">Back</button>
                    <button type="button" class="next action-button">Continue</button>
                </fieldset>
                <fieldset>
                   <div style="margin-top: 25px;margin-bottom: 25px;">
                       <input type="checkbox" name="agreement1" value="check" id="agree" /> I have read and agree to the <a  data-toggle="modal" data-target="#largeModal"><b>Distance Sales Agreement</b> </a>and <b><a>Return Policy</a></b>
                       <br>
                       <br>
                       <input type="checkbox" name="agreement2" value="check" id="agree" /> I have read and agree to the <a href="{{route('terms')}}"><b>Terms and Conditions</b></a> and <a href="{{route('privacy')}}"><b>Privacy Policy</b></a>



                       <div style="margin-top: 150px;" class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                   <div class="modal-body">
                                       <h2 style="margin-bottom: 10px;" class="cart-total-label text-center">Distance Sales Agreement </h2>
                                       <div id="on-bilgilendirme" style="height:500px;   border:1px solid #ccc; padding:6px 12px; font-size:14px; overflow-y:auto;"><strong>BETWEEN:</strong><br>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></strong><strong><span style='font-family:"Arial Narrow",sans-serif;'>DISTANCE SALES AGREEMENT</span></strong></p>

                                           <p style='margin-right:-14.15pt;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-bottom:.0001pt;text-align:justify;'><strong><span style='font-family:"Arial Narrow",sans-serif;'>BETWEEN:</span></strong></p>

                                           <p style='margin-right:-14.15pt;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-bottom:.0001pt;text-align:justify;'><strong><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></strong></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol style="margin-bottom:0in;list-style-type: decimal;margin-left:4.199999999999999px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style='font-family:"Arial Narrow",sans-serif;color:black;'>&ldquo;THE SELLER&rdquo; INFORMATION</span></strong></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin:0in;margin-bottom:.0001pt;'><strong><span style='font-family:"Arial Narrow",sans-serif;color:black;'>Name:</span></strong><span style='font-family:"Arial Narrow",sans-serif;color:black;'>&nbsp;INVAMED SAGLIK ILAC SANAYI VE TICARET ANONIM SIRKETI<br> <strong><span style='font-family:"Arial Narrow",sans-serif;'>Address:</span></strong> MALIKOY MAH., ANADOLU OSB, 30 AĞUSTOS CAD., NO: 13, SINCAN, ANKARA
	<br>&nbsp;</span><strong>Tel:</strong><span style='font-family:"Arial Narrow",sans-serif;color:black;'>&nbsp;+90 312 <a href="https://www.google.com/search?q=RD+GLObal+ara%C5%9F.geli%C5%9F.sa%C4%9F.ila%C3%A7.in%C5%9F.yat.san.+tic.a.%C5%9F&oq=RD+GLObal+ara%C5%9F.geli%C5%9F.sa%C4%9F.ila%C3%A7.in%C5%9F.yat.san.+tic.a.%C5%9F&aqs=chrome..69i57.52724j0j7&sourceid=chrome&ie=UTF-8"><span style="color:black;text-decoration:none;">235 77 35</span></a>
	<br> <strong><span style='font-family:"Arial Narrow",sans-serif;'>E-mail:</span></strong> globalsales@rdglobal.com.tr</span></p>

                                           <p style='margin-right:-14.15pt;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin:0in;margin-bottom:.0001pt;margin-top:0in;vertical-align:baseline;'><strong><span style='font-family:"Arial Narrow",sans-serif;color:black;'><br> <strong><span style='font-family:"Arial Narrow",sans-serif;'>2. &ldquo;THE BUYER&rdquo; INFORMATION</span></strong></span></strong></p>

                                           <p style='margin-right:-14.15pt;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin:0in;margin-bottom:.0001pt;margin-top:0in;vertical-align:baseline;'><strong><span style='font-family:"Arial Narrow",sans-serif;color:black;'>Name surname / Title:</span></strong><span style='font-family:"Arial Narrow",sans-serif;color:black;'><br> <strong><span style='font-family:"Arial Narrow",sans-serif;'>Delivery Address:</span></strong>
	<br> <strong><span style='font-family:"Arial Narrow",sans-serif;'>Telephone:</span></strong>
	<br> <strong><span style='font-family:"Arial Narrow",sans-serif;'>E-mail:</span></strong><strong><br> <strong><span style='font-family:"Arial Narrow",sans-serif;'>IP address:</span></strong></strong></span></p>

                                           <p style='margin-right:-14.15pt;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin:0in;margin-bottom:.0001pt;margin-top:0in;vertical-align:baseline;'><span style='font-family:"Arial Narrow",sans-serif;color:black;'>&nbsp;</span></p>

                                           <p style='margin-right:-14.15pt;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin:0in;margin-bottom:.0001pt;margin-top:0in;text-align:justify;vertical-align:baseline;'><span style='font-family:"Arial Narrow",sans-serif;color:black;border:none windowtext 1.0pt;padding:0in;'>The personal information given during the purchase order is taken into consideration as the BUYER information.</span></p>

                                           <p style='margin-right:-14.15pt;margin-left:14.2pt;font-size:16px;font-family:"Times New Roman",serif;margin:0in;margin-bottom:.0001pt;margin-top:0in;text-align:justify;vertical-align:baseline;'><span style='font-family:"Arial Narrow",sans-serif;color:black;border:none windowtext 1.0pt;padding:0in;'>This Agreement has agreed and concluded by the parties on &hellip;&hellip;&hellip;, the date when the order of the Buyer was completed on Seller&rsquo;s website and a copy of the contract was sent to the e-mail address of the Buyer.</span></p>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-size:12px;font-family:"Arial",sans-serif;color:#444444;background:#FAFAFA;'>&nbsp;</span></p>

                                           <p style='margin-right:0in;margin-left:21.3pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:-21.3pt;'><strong><span style='font-family:"Arial Narrow",sans-serif;'>1. &nbsp; &nbsp; &nbsp; &nbsp; SUBJECT OF THE CONTRACT&nbsp;</span></strong></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="1" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The subject of this Agreement is to determine the rights and liabilities of the parties in accordance with the provisions of Law No. 6502 - Law on Consumer Protection, regarding the protection of consumers and the regulation on the implementation principles and procedures of distance contracts regarding the sale of products and services done by the Seller whose detailed information is given on the website linked &nbsp;</span><a href="https://www.medipratic.com/">https://www.medipratic.com/</a><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;which is operated by the Seller (hereinafter shall be referred as &ldquo;Website&rdquo;) and delivery of the products to the delivery address.</span></li>
                                               </ol>
                                           </div>

                                           <p>
                                               <br>
                                           </p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="2" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>Buyer accepts and declares that it was informed about the basic qualifications, the sale price, the type of payment, the conditions of delivery and the right to &ldquo;withdraw&rdquo; regarding the goods or services subject to sale, that Buyer confirmed the preliminary informing in electronic environment and the preliminary then ordered the goods or services in accordance with the provisions of this Agreement. The preliminary informing and the invoice in the payment page of Website, are integral parts of this contract.</span></li>
                                               </ol>
                                           </div>

                                           <p>
                                               <br>
                                           </p>

                                           <ol start="1" style="margin-bottom:0in;margin-top:0in;" type="1">
                                               <li style="text-align:justify;"><strong><span style='font-family:"Arial Narrow",sans-serif;'>TERM&nbsp;</span></strong></li>
                                               <li style="text-align:justify;"><span style='font-family:"Arial Narrow",sans-serif;'>This Agreement will be effective on the date The Buyer orders Product(s) (the &quot;Effective Date&quot;) and will continue until such Product(s) have been delivered to The Buyer, (the &quot;Term&quot;), however, the terms contained herein will govern any dispute related to the sale or use of such Product(s).</span></li>
                                           </ol>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:-0.5in;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><strong><span style='font-family:"Arial Narrow",sans-serif;'>PRO &nbsp; DUCTS</span></strong>

                                                       <ol>
                                                           <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The &nbsp; &nbsp; details of the products and services; the type, quantity, brand/model, color, sales price of the products is as chosen and verified by the Buyer from the Seller&rsquo;s product range. Products are</span></li>
                                                           <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;subject to availability. All of the products selected by the Buyer and listed in the invoice shall be referred as &ldquo;Product(s)&rdquo; hereinafter.</span></li>
                                                       </ol>
                                                   </li>
                                               </ol>
                                           </div>

                                           <p>
                                               <br>
                                           </p>

                                           <ol start="3" style="margin-bottom:0in;margin-top:0in;" type="1">
                                               <li style="text-align:justify;"><strong><span style='font-family:"Arial Narrow",sans-serif;'>DELIVERY</span></strong></li>
                                           </ol>

                                           <p>
                                               <br>
                                           </p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="1" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The Agreement comes into force when it is approved by the Buyer and it is completed by the delivery. Delivery of the good is performed in the committed period after the stock of the Seller is available and the payment is realized. The Product(s) shall be delivered to the address stated by the Buyer during check-out process on the Website, packed and together with the invoice. In case the Buyer is not present in the delivery place at the delivery time, the Seller shall be deemed as it has performed its obligations hereunder fully and completely. Therefore, any and all losses and damages due to the late delivery of the product shall be on Buyer&rsquo;s responsibility.&nbsp;</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="2" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>In case the Product(s) are intended to be delivered to another person / organization besides the Buyer, the Seller shall not be held liable if the person / organization to be delivered will not accept the delivery.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="3" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The Buyer is responsible for checking the product at the time of delivery and when there is a problem arising from the cargo in the Product(s), not accepting the Product(s) and getting the courier company officer take a statement down. Otherwise, the Seller shall not accept any liability.</span></li>
                                               </ol>
                                           </div>

                                           <p>
                                               <br>
                                           </p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="1" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The delivery costs of the Product(s) for the shipments within Turkey shall belong to the Buyer</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;margin:0in;margin-bottom:.0001pt;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="2" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The Buyer, based on the fact that the term sales may be conducted only through credit cards issued by the banks, agrees, declares and undertakes that it shall confirm the information related to the interest rates and delay interests with the bank separately, that the provision on the interest payments and delay interests shall apply pursuant to the credit card contract between the Bank and the Buyer. In installment transactions the provisions of the contract concluded between the Buyer and the bank issued the relevant card shall apply. The payment dates for the credit card shall also be determined between the bank and the Buyer as per their agreement. The Buyer is entitled to follow the number of installments and payments thereof on the account summary to be sent by the bank.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <ol start="4" style="margin-bottom:0in;margin-top:0in;" type="1">
                                               <li style="text-align:justify;"><strong><span style='font-family:"Arial Narrow",sans-serif;'>THE RIGHT OF WITHDRAWAL</span></strong></li>
                                           </ol>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="1" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>Pursuant to the relevant provisions regarding distance contracts about sales of goods of Law No. 6502 - Law on Consumer Protection and The Regulation on Distance Contracts dated November 27<sup>th</sup>, 2014 numbered 29188; the Buyer is entitled to use the right of withdrawal from the Agreement within 14 (fourteen) days of receipt without any justification and/or legal or penal liabilities.&nbsp;</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>After this period The Buyer may only use this right, in case;</span></p>

                                           <p>
                                               <br>
                                           </p>

                                           <ol style="list-style-type: lower-roman;">
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>There is a <a href="https://tureng.com/tr/turkce-ingilizce/substantial%20error"><span style="color:windowtext;text-decoration:none;">substantial&nbsp;</span></a>error regarding the shipped Product(s);</span></li>
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>The Product(s) were delivered after the expiration date or,</span></li>
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>The Product(s) were improperly labeled or packaged by The Seller.</span></li>
                                           </ol>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>To exercise the right of withdrawal, The Buyer must inform The Seller about the decision to withdraw by clicking the &ldquo;Return&rdquo; button on the order page on the Website and fill the appeared page of return conditions completely and correctly. After the submission the Seller shall review the conditions and inform The Buyer within 5 (five) workdays, regarding its decision of whether to accept the request of withdrawal. In case the application is accepted by the Seller, The Buyer shall be granted by the right of withdrawal and receive a Return Number.</span></p>

                                           <p>
                                               <br>
                                           </p>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>In the event of usage of the right of withdrawal, it is required to return;</span></p>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <ol style="list-style-type: lower-roman;margin-left:0.5in;">
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>the Invoice; If the invoice of the products was issued to a legal entity/company, it should be returned with the return invoice issued by the returning entity. The order returns issued to the entities shall not be completed without such return invoice.</span></li>
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>Return Form: When returning a product, the Buyer must complete the appropriate fields of the Return Forms, provided alongside the delivery, and sign and place it with the product.</span></li>
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>The boxed Product(s), all package content with all tags, labels in place, without any missing item.</span></li>
                                           </ol>

                                           <p style='margin-right:0in;margin-left:1.0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <p style='margin-right:0in;margin-left:42.55pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>The cargo containing all of the items above shall be delivered to the same carrier, using the obtained Return Number.</span></p>

                                           <p style='margin-right:0in;margin-left:1.0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="2" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The Buyer&rsquo;s right to withdraw shall not apply to the contracts regarding;</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <ol style="list-style-type: lower-roman;">
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>The Product(s) prepared in accordance with the request and personal needs of the customer,</span></li>
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>The delivery of the perishables or the Product(s) of which expiry date is shorter than 2 (two) months,</span></li>
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>The delivery of the Product(s) of which protective element such as package, tape, and seal are opened provided that it is inappropriate to return them due to health and hygiene concerns,</span></li>
                                               <li><span style='font-family:"Arial Narrow",sans-serif;'>To the Product(s) which are mixed with other Product(s) and it is impossible for them to be separated intrinsically.</span></li>
                                           </ol>

                                           <p style='margin-right:0in;margin-left:1.0in;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="3" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The Seller, shall reimburse the total price, all payments received including the costs of delivery, to the Buyer within 14 days from the receipt of the notice of withdrawal and the Product(s) in case the delivery has been completed before the withdrawal.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <ol start="5" style="margin-bottom:0in;margin-top:0in;" type="1">
                                               <li style="text-align:justify;"><strong><span style='font-family:"Arial Narrow",sans-serif;'>GENERAL TERMS</span></strong></li>
                                           </ol>

                                           <p style='margin-right:0in;margin-left:.5in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><strong><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></strong></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="1" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The Seller and The Buyer agree that this Agreement represents and/or contains confidential information that shall not be disclosed to any third party or otherwise made public, without prior written authorization of the other party, except where such disclosure is required by law.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="2" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>Neither party shall be liable to the other party in respect of any delay or failure to perform that results from any event or ca use that is beyond the reasonable control of the party obligated to perform.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="3" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>In no event shall either party be liable to the other party for special, incidental, consequential, or indirect damages in connection with this Agreement or performance hereunder. The Seller shall not be held liable for any prejudice or damage resulting from the use of the Internet network, such as loss of data, intrusion, virus, service breakdown or other problems outside of its control.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:35.4pt;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-bottom:.0001pt;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="4" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>All documents and every constitutive element on the Website are the exclusive intellectual property of The Seller. The reproduction, exploitation, redistribution or use of all or part of any visual, auditory or software element or document from the Website is strictly prohibited.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:35.4pt;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-bottom:.0001pt;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="5" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>Any notice required to be given hereunder shall be in writing and may be given by e-mail or facsimile transmission (confirmed by telephone or mail), personal delivery (including by professional courier), or mailing (by first class receipted prepaid mail) to, the contact information set forth in the check-out process page. &nbsp;In the case of e-mail, facsimile transmission or personal delivery, such notice shall be deemed to have been given upon the date of such transmission or delivery. &nbsp;In the case of mailing, such notice shall be deemed to have been given three (3) days after such mailing</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:35.4pt;font-size:16px;font-family:"Times New Roman",serif;margin-top:0in;margin-bottom:.0001pt;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="6" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>The parties represent that they have the authority to enter into this agreement. The parties further represent that the terms of this agreement are not inconsistent with any other contractual obligations, express or implied, that they may have.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>
                                           <div style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>

                                               <ol start="7" style="margin-bottom:0in;list-style-type: lower-alpha;margin-left:26.75px;">
                                                   <li style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><span style='font-family:"Arial Narrow",sans-serif;'>This Agreement shall be governed by, enforced and construed under and in accordance with the laws of Turkey, without regard to the conflicts of laws rules thereof. &nbsp;In the resolution of any dispute that may arise from this Agreement and / or its implementation, Seller records (including recordings in the magnetic environment such as computer-audio records) constitute conclusive evidence; Turkish Consumer Arbitration Committee located in the residential region of the SELLER is authorized up to the value declared by the Turkish Ministry of Industry and Trade, Courts and Debt Enforcement Offices of ANKARA BATI, TURKEY are exclusively authorized for the values exceeding it.</span></li>
                                               </ol>
                                           </div>

                                           <p style='margin-right:0in;margin-left:36.75pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>IN WITNESS WHEREOF,&nbsp;</span><span style='font-family:"Arial Narrow",sans-serif;color:black;'>The Buyer declares, accepts and undertakes that it has read all the conditions and explanations written in this Agreement and the Order Form constituting its integral part, has received, examined and accepted the sales terms and all other preliminary information.</span></p>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                           <p style='margin-right:0in;margin-left:0in;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><span style='font-family:"Arial Narrow",sans-serif;'>&nbsp;</span></p>

                                       </div>
                                   </div>

                               </div>
                           </div>
                       </div>
                       <br>


                   </div>
                    <button type="button" class="action-button previous previous_button">Back</button>
                    {!! Form::submit(trans('PLACE ORDER'), ['class' => 'btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3 ']) !!}
                </fieldset>
            </form>
        </section>
    </section>
    <!-- Multi step form -->

    <!-- End Multi step form -->




    <script>
        ;(function($) {
            "use strict";

            //* Form js
            function verificationForm(){
                //jQuery time
                var current_fs, next_fs, previous_fs; //fieldsets
                var left, opacity, scale; //fieldset properties which we will animate
                var animating; //flag to prevent quick multi-click glitches

                $(".next").click(function () {
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    //activate next step on progressbar using the index of next_fs
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50) + "%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'position': 'absolute'
                            });
                            next_fs.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });

                $(".previous").click(function () {
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //de-activate current step on progressbar
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale previous_fs from 80% to 100%
                            scale = 0.8 + (1 - now) * 0.2;
                            //2. take current_fs to the right(50%) - from 0%
                            left = ((1 - now) * 50) + "%";
                            //3. increase opacity of previous_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'left': left
                            });
                            previous_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });

                $(".submit").click(function () {
                    return false;
                })
            };

            //* Add Phone no select
            function phoneNoselect(){
                if ( $('#msform').length ){
                    $("#phone").intlTelInput();
                    $("#phone").intlTelInput("setNumber", "+880");
                };
            };
            //* Select js
            function nice_Select(){
                if ( $('.product_select').length ){
                    $('select').niceSelect();
                };
            };
            /*Function Calls*/
            verificationForm ();
            phoneNoselect ();
            nice_Select ();
        })(jQuery);
    </script>


@endsection

@section('js-extender')




@endsection
