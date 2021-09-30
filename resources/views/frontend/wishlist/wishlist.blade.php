@extends('layouts.anatema')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title> </title>
@endsection


@section('sayfa-description')@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title')@endsection
@section('tw-site','')
@section('tw-description')@endsection


@section('fc-title') @endsection

@section('fc-image') @endsection
@section('fc-description')@endsection

@section('content')

    <div style="margin-top: 50px; margin-bottom: 15px;" class="container">
        <div class="row">

            <div class="wishlist-border col-md-12">
                    <!-- Topic Cards -->
                <div class="col-md-12">
                    <div class="float-left">
                        <div style="margin-top: 10px;">
                            <h4>SAVED ITEMS</h4>
                        </div>

                    </div>
                    <div class="float-right">
                        <div style="margin-bottom: 10px;">
                            <a class="btn btn-sqr font-weight-semibold text-color-light btn-h-2 rounded h-100" data-toggle="modal" data-target="#exampleModal">Send Email Your Wishlist</a>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <div style="margin-top: 25px; margin-bottom: 50px;" class="row">
            <div class="col-lg-12 order-1 order-lg-2">
                <div class="shop-product-wrapper">

                    <!-- shop product top wrap start -->

                    <!-- product item list wrapper start -->
                    <div   class="shop-product-wrap grid-view row mbn-30">
                    @foreach(Cart::instance('wishlist')->content() as $urunCartItem)
                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="{{route('urun',$urunCartItem->options->slug)}}">
                                        <img class="pri-img" src="/frontend/uploads/urun/{{$urunCartItem->options->urun_resmi}}"
                                             alt="product">
                                        <img class="sec-img" src="/frontend/uploads/urun/{{$urunCartItem->options->urun_resmi}}"
                                             alt="product">
                                    </a>

                                    <div class="button-group">
                                        <a href="{{ route('wishlist.anasayfa.kaldir',$urunCartItem->rowId) }}" ><span
                                                data-toggle="tooltip" data-placement="left"
                                                title="Delete Wish Product"><i class="fas fa-trash"></i></span></a>
                                    </div>
                                </figure>
                                <div class="product-caption text-center">

                                    <h6 class="product-name">
                                        <a href="{{route('urun',$urunCartItem->options->slug)}}">{{$urunCartItem->name}}</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-regular">€{{$urunCartItem->price}}</span>

                                    </div>
                                </div>
                            </div>
                            <!-- product grid end -->


                        </div>
                        <!-- product single item start -->

                        @endforeach
                    </div>
                    <!-- product item list wrapper end -->


                    <!-- end pagination area -->
                </div>
            </div>
        </div>
    </div>



    <div style="margin-top: 100px;" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog text-left" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">,
                    <form  action="{{route('wishlist.contact.mail.store')}}" method="post">
                        @csrf
                        <h4 class="contact-title">Send Email Your Current Wishlist</h4>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control bg-light-3 rounded border-0 text-color-dark text-1"  name="name" placeholder="Name" required autofocus="">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="mail" class="form-control bg-light-3 rounded border-0 text-color-dark text-1"  name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" class="form-control bg-light-3 rounded border-0 text-color-dark text-1"  name="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <textarea class="form-control textarea-contact bg-light-3 rounded border-0 text-color-dark text-1" rows="5" name="message" placeholder="Type Your Message / Feedback here..." required></textarea>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                {!! NoCaptcha::display(['class'=>'rdcaptacha']) !!}


                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block text-danger">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="col text-center">
                                <button class="btn news-button text-3 text-color-light " type="submit"> Send </button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sqr">OK</button>
                </div>
            </div>
        </div>
    </div>



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



@endsection

@endsection


