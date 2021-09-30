@extends('arka')

@section('content')

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h2 style="text-align: center; margin-top: 15px;" class="text-center">Düzenlenecek Siparis Veren =  {{ $siparis->billing_name }} {{ $siparis->billing_lastname }}</h2>
                <h2 style="text-align: center; margin-top: 15px;" class="text-center">Sipariş Oluşturulma Tarihi =  {{ $siparis->created_at }}</h2>
            </header><!-- .widget-header -->

            <div class="widget-body">


                <form method="post" action="{{route('admin.siparis.guncelle',$siparis->id)}}" enctype="multipart/form-data">
                    @csrf


                    <div class="container-fluid">

                        <div role="tabpanel">
                            <div class="myaccount-content">
                                <h4 class="text-center">Order Details</h4>
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>

                                            <th>Order Id</th>
                                            <th>Order Email</th>
                                            <th>Order Phonenumber</th>
                                            <th>Order Total Price</th>
                                            <th>Order Status</th>
                                            <th>Order Info</th>
                                            <th>Order Date</th>
                                            <th>Order Country </th>
                                            <th>Order State </th>
                                            <th>Order Note </th>
                                            <th>Order Address</th>
                                            <th>Order Address2</th>

                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr>
                                            <td>{{$siparis->id}}</td>
                                            <td>{{$siparis->billing_email}}</td>
                                            <td>{{$siparis->billing_phone}}</td>
                                            <td>€{{$siparis->siparis_tutari/100,3}}</td>
                                            <td>{{$siparis->payment_status}}</td>
                                            <td>{{$siparis->durum}}</td>
                                            <td>{{$siparis->created_at}}</td>
                                            <td>{{$siparis->billing_country}}</td>
                                            <td>{{$siparis->billing_state}}</td>
                                            <td>{{$siparis->shipping_notes}}</td>
                                            <td>{{$siparis->billing_address}}</td>
                                            <td>{{$siparis->billing_address2}}</td>
                                        </tr>



                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div  style="margin-top: 15px;" class="container-fluid">

                        <div role="tabpanel">
                            <div class="myaccount-content">
                                <h4 class="text-center">Billing Details</h4>
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">

                                        <thead class="thead-light">
                                        <tr>
                                            <th>Billing Name  </th>
                                            <th>Billing LastName</th>
                                            <th>Billing Company</th>
                                            <th>Billing Address1</th>
                                            <th>Billing Address2</th>
                                            <th>Billing Phone</th>
                                            <th>Billing Email</th>
                                            <th>Billing Country</th>
                                            <th>Billing State</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{!! Form::text('billing_name',$siparis->billing_name, array('placeholder' => 'billing_name','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_lastname',$siparis->billing_lastname, array('placeholder' => 'billing_lastname','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_company',$siparis->billing_company, array('placeholder' => 'billing_company','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_address',$siparis->billing_address, array('placeholder' => 'billing_address','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_address2',$siparis->billing_address2, array('placeholder' => 'billing_address2','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_phone',$siparis->billing_phone, array('placeholder' => 'billing_phone','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_email',$siparis->billing_email, array('placeholder' => 'billing_email','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_country',$siparis->billing_country, array('placeholder' => 'billing_country','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('billing_state',$siparis->billing_state, array('placeholder' => 'billing_state','class' => 'form-control','style'=>'width:100%;')) !!}</td>

                                        </tr>


                                    </table>






                                </div>

                            </div>
                        </div>
                    </div>

                    <div  style="margin-top: 15px;" class="container-fluid">

                        <div role="tabpanel">
                            <div class="myaccount-content">
                                <h4 class="text-center">Shipping Details</h4>
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">

                                        <thead class="thead-light">
                                        <tr>
                                            <th>Shipping Name </th>
                                            <th>Shipping LastName </th>
                                            <th>Shipping Company</th>
                                            <th>Shipping Address1</th>
                                            <th>Shipping Address2</th>
                                            <th>Shipping Country</th>
                                            <th>Shipping State</th>
                                            <th>Shipping Notes</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{!! Form::text('shipping_name',$siparis->shipping_name, array('placeholder' => 'shipping_name','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('shipping_lastname',$siparis->shipping_lastname, array('placeholder' => 'shipping_lastname','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('shipping_company',$siparis->shipping_company, array('placeholder' => 'shipping_company','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('shipping_address',$siparis->shipping_address, array('placeholder' => 'shipping_address','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('shipping_address2',$siparis->shipping_address2, array('placeholder' => 'shipping_address2','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('shipping_country',$siparis->shipping_country, array('placeholder' => 'shipping_country','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('shipping_state',$siparis->shipping_state, array('placeholder' => 'shipping_state','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                            <td>{!! Form::text('shipping_notes',$siparis->shipping_notes, array('placeholder' => 'shipping_notes','class' => 'form-control','style'=>'width:100%;')) !!}</td>

                                        </tr>


                                    </table>






                                </div>

                            </div>
                        </div>
                    </div>

                    <div  style="margin-top: 15px;" class="container-fluid">

                        <div role="tabpanel">
                            <div class="myaccount-content">
                                <h4 class="text-center">Products Details</h4>
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">

                                        <thead class="thead-light">
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Center Stone</th>
                                            <th>Accent Stone</th>
                                            <th>Perlantz Logo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($siparis->sepet->sepet_urunler as $sepet_urun)
                                            <tr>
                                                <td style="width: 150px;">
                                                    <a href="{{route('urun',$sepet_urun->urun->slug)}}">
                                                        <img class="img-fluid" width="125" alt="" src="/frontend/uploads/urun/{{$sepet_urun->urun->urun_resmi}}">
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="{{route('urun',$sepet_urun->urun->slug)}}">
                                                        {{$sepet_urun->urun->urun_adi}}
                                                    </a>
                                                </td>
                                                <td>{{$sepet_urun->adet}}</td>
                                                <td>{{$sepet_urun->durum}}</td>
                                                <td>{!! Form::text('centerstone',$siparis->centerstone, array('placeholder' => 'centerstone','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                                <td>{!! Form::text('accentstone',$siparis->accentstone, array('placeholder' => 'accentstone','class' => 'form-control','style'=>'width:100%;')) !!}</td>
                                                <td>{!! Form::text('perlantzlogo',$siparis->perlantzlogo, array('placeholder' => 'perlantzlogo','class' => 'form-control','style'=>'width:100%;')) !!}</td>


                                            </tr>
                                        @endforeach

                                    </table>






                                </div>

                            </div>
                        </div>
                    </div>






            </div>

        </div>
    </div><!-- .widget-body -->
    </div><!-- .widget -->
    </div>







    <div style="margin-top: 20px;" class="col-md-12">
        <div class="widget">
            <header class="widget-header text-center">
                <a class="btn btn-info" href="{{ route('admin.siparis.index') }}"> Geri</a>
                <input class="btn btn-primary" type="submit" value="Gönder">
            </header><!-- .widget-header -->

        </div><!-- .widget -->
    </div>
    </form>
    </div><!-- END column -->
@endsection

@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

    <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };


        CKEDITOR.replace('aciklama',options);

    </script>

    <script>
        $('.js-example-basic-multiple').select2({
            placeholder: 'Select an option'
        });
    </script>



@endsection
