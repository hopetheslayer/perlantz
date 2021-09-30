@extends('layouts.anatema')

@section('aside-page-title','CONTACT US')

@section('sayfa-title')
    <title>Perlantz | Contact Us </title>
@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i> </a>Home</li>
                                <li class="breadcrumb-item active" href="{{route('contact-us')}}" aria-current="page">Contact</li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ph-small">NEED ASSISTANCE?</div>
                    <div class="page-header">CONTACT US</div>
                    <div class="header-p">
                        <p>
                            Questions about your order status? Need help picking out the perfect piece?
                        </p>
                        <p>
                            Contact our Jewelry Consultants with any questions you have regarding your purchase. Our experts act as your personal concierge and are ready to advise you every step of the way.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-12 py-1">
                            <div class="page-inner">
                                <div class="icon-box icon"><i class="fas fa-envelope"></i></div>
                                <div class="btn-div"> <a id="#modalmail" class="btn btn-default btn-block btn-save" data-toggle="modal" data-target="#modal-mail">E-MAIL US</a></div>
                                <div class="text-center">
                                    <p><b>24 hours</b> a day<br>
                                        <b>7 days</b> a week
                                    </p>
                                    <a href="mailto:info@perlantz.com" class="contact-url">info@perlantz.com</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-12 py-1">
                            <div class="page-inner">
                                <div class="icon-box icon"><i class="fas fa-comments"></i></div>
                                <div class="btn-div"> <a id="#modalmail" class="btn btn-default btn-block btn-save" data-toggle="modal" data-target="#modal-2">CHAT WITH US</a></div>
                                <div class="text-center">
                                    <p>Need help?
                                        <br>
                                        Click to chat with our experts in real-time.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-12 py-1">
                            <div class="page-inner">
                                <div class="icon-box icon"><i class="fas fa-phone"></i></div>

                                <div class="btn-div"> <a id="#modalmail" class="btn btn-default btn-block btn-save" data-toggle="modal" data-target="#modal-2" href="tel:800-436-8803">CALL US</a></div>
                                <div class="text-center">
                                    <p>Monday - Friday<br>
                                        <b>9AM</b> ET to <b>5PM</b> ET
                                    </p>

                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
        </div>
    </section>


    <!-- Modal 1-->


    <div class="modal fade" id="modal-mail" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ">EMail Us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <form  action="contact-us" method="post" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="first_name" class="form-control" placeholder="Name *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" class="form-control" placeholder="Phone *" type="text" required>
                                    </div>
                                    <div style="margin-top: 15px; " class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="email_address" class="form-control" placeholder="Email *" type="text" required>
                                    </div>
                                    <div style="margin-top: 15px; " class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="contact_subject" class="form-control" placeholder="Subject *" type="text">
                                    </div>
                                    <div style="margin-top: 15px; " class="col-12 text-center">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Message *" name="message" class="form-control" required=""></textarea>
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
                                        <div style="margin-top: 15px;" class="contact-btn">
                                            <button class="btn btn-sqr" type="submit">Send Message</button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Modal 1----->


@endsection


@section('js-extender')

    <link href="/frontend/assets/css/customsen.css" rel="stylesheet" type="text/css" />


@endsection
