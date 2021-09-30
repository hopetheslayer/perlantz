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
                                <li class="breadcrumb-item active" href="{{route('aboutdiamonds')}}" aria-current="page">Contact</li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section style="margin-top: -25px;" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 mx-auto">
                    <div class="page-header">RETURN FORM</div>
                    <div class="header-p">
                        <p>
                            We are working at full capacity and doing our best to get your product delivered within the estimated time frame. However, short delays may occur from time to time, due to the restrictions caused by the ongoing pandemic, in some areas. We appreciate your patience and understanding in these rare cases.
                        </p>
                        <p>
                            Please complete and submit the form below to return your product.
                            <br>If you would like to learn about our return policy prior to your submission, you can visit this link:<br> <a class="returnlink" href="{{route('return')}}">perlantz.com/return-policy/</a>
                        </p>
                    </div>
                    <div class="page-inner" id="returnform">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="question1">Please select your return type*</label>
                                    <ol>
                                        <li class="wraper_radio">
                                            <input class="radio validation-passed" type="radio" name="action" value="resizing"  >
                                            <span>Resizing</span>
                                        </li>
                                        <li class="wraper_radio">
                                            <input class="radio validation-passed" type="radio" name="action" value="engraving">
                                            <span>Engraving</span>
                                        </li>
                                        <li class="wraper_radio">
                                            <input class="radio repair validation-passed" type="radio" name="action" value="repair">
                                            <span>Repair</span>
                                        </li>
                                        <li class="wraper_radio">
                                            <input class="radio validation-passed" type="radio" name="action" value="withdrawal">
                                            <span>Withdrawal</span>
                                        </li>


                                    </ol>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $("input[type='radio']").change(function() {
                                    if ($(this).val() == "resizing") {

                                        $("#resizing").show();
                                    } else {
                                        $("#resizing").hide();
                                    }
                                });
                            });

                            $(document).ready(function() {
                                $("input[type='radio']").change(function() {
                                    if ($(this).val() == "sizeknowledge") {
                                        $("#resizing").show();
                                        $("#resizingyazi").show();
                                    } else {

                                        $("#resizingyazi").hide();
                                        $("#resizing").show();
                                    }
                                });
                            });
                        </script>

                        <script>
                            $(document).ready(function() {
                                $("input[type='radio']").change(function() {
                                    if ($(this).val() == "engraving") {
                                        $("#resizing").hide();
                                        $("#engraving").show();
                                    } else {

                                        $("#engraving").hide();
                                    }
                                });
                            });
                        </script>

                        <script>
                            $(document).ready(function() {
                                $("input[type='radio']").change(function() {
                                    if ($(this).val() == "repair") {
                                        $("#resizing").hide();
                                        $("#engraving").hide();
                                        $("#repair").show();
                                    } else {

                                        $("#repair").hide();
                                    }
                                });
                            });
                        </script>

                        <script>
                            $(document).ready(function() {
                                $("input[type='radio']").change(function() {
                                    if ($(this).val() == "withdrawal") {
                                        $("#resizing").hide();
                                        $("#engraving").hide();
                                        $("#repair").hide();
                                        $("#withdrawal").show();
                                    } else {

                                        $("#withdrawal").hide();
                                    }
                                });
                            });
                        </script>

                        <div style=" display:none; margin-top: 25px;" type="text"  id="resizing" class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <label for="inputOrdernumber">How did you measure your ring size?</label>
                                    <ol style="list-style: none;">
                                        <li class="wraper_radio">
                                            <input class="radio validation-passed" type="radio" name="measure" value="ringsizerans"  >
                                            <span> Through a professional source</span>
                                        </li>
                                        <li class="wraper_radio">
                                            <input class="radio validation-passed" type="radio" name="measure" value="sizeknowledge">
                                            <span> Based on my personal assumption or size knowledge</span>
                                        </li>

                                    </ol>
                                </div>
                                <div class="col-md-12 ">
                                    <label style="display: none;" for="inputOrdernumber" name="measure" id="resizingyazi">
                                        If you are not 100% sure of your ring size, we can send you a free ring sizer.
                                        Please click here to request a free ring sizer.
                                    </label>


                                </div>

                            </div>
                        </div>

                        <div style=" display:none; margin-top: 25px;" type="text"  id="engraving" class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                xd
                                </div>
                                <div class="col-md-6 ">
                                xd
                                </div>

                            </div>
                        </div>

                        <div style=" display:none; margin-top: 25px;" type="text"  id="repair" class="container">

                        </div>

                        <div style=" display:none; margin-top: 25px;" type="text"  id="withdrawal" class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <label for="inputOrdernumber">Reason:</label>
                                <ol style="list-style: none;">
                                    <li class="wraper_radio">
                                        <input class="radio validation-passed" type="radio" name="measure" value="ringsizerans"  >
                                        <span>It is damaged</span>
                                    </li>
                                    <li class="wraper_radio">
                                        <input class="radio validation-passed" type="radio" name="measure" value="sizeknowledge">
                                        <span> The parts are missing</span>
                                    </li>
                                    <li class="wraper_radio">
                                        <input class="radio validation-passed" type="radio" name="measure" value="sizeknowledge">
                                        <span> It is not what I ordered</span>
                                    </li>
                                    <li class="wraper_radio">
                                        <input class="radio validation-passed" type="radio" name="measure" value="sizeknowledge">
                                        <span>  Other (up to 1000 characters)</span>
                                    </li>

                                </ol>
                                <div class="col-md-12 ">
                                </div>
                            </div>
                        </div>
                        </div>





                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="inputOrdernumber">Order Number*</label>
                                    <input type="ordernumber" class="form-control" id="inputOrdernumber">
                                </div>
                            </div>


                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">Email*</label>
                                    <input type="email" class="form-control" id="inputEmail">
                                    <span>Your email address and order number must match our records to proceed with your return. Please make sure your order number is correct and your email address is the one that you initially used to place your order.</span>
                                </div>
                            </div>
                        </div><!--row biter-->
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="inputFirstName">First Name*</label>
                                    <input type="firstname" class="form-control" id="inputFirstname">
                                </div>
                            </div>


                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="inputLastName">Last Name*</label>
                                    <input type="lastname" class="form-control" id="inputLastname">
                                </div>
                            </div>
                        </div><!--row biter-->
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="inputPhonenumber">Phone Number*</label>
                                    <input type="phonenumber" class="form-control" id="inputPhonenumber">
                                </div>
                            </div>

                        </div><!--row biter-->
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="inputComment">Please add your comment for your return (up to 1000 characters)*</label>
                                    <textarea type="comment" class="form-control" id="inputComment"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <input type="checkbox" name="terms" title="Accept Terms &amp; Condition" value="1" id="inputTerms">
                                <label for="inputTerms">I have read the <a href="{{route('terms')}}" target="_blank"><b>terms and conditions</b></a> and accept them.</label>
                            </div>
                            <div class="col-lg-12 col-12">
                                <input type="checkbox" name="change_ringsize_condition" title="Change the ring size information" value="1" id="inputTerms2">
                                <label for="inputTerms2">I understand and agree that I cannot change the ring size information after submitting the return form.</label>
                            </div>
                            <div class="col-lg-12 col-12">
                                <input type="checkbox" name="permission_reproduction" title="I understand that a reproduction may be necessary for the resizing / repair of my product and I give my permission to GLAMIRA to reproduce my returned item, if necessary. (*The reproduction will be free of charge as long as the product is eligible for free resizing or repair)." value="1" id="permission_reproduction">
                                <label for="inputTerms">I understand that a reproduction may be necessary for the resizing / repair of my product and I give my permission to PERLANTZ to reproduce my returned item, if necessary. (*The reproduction will be free of charge as long as the product is eligible for free resizing or repair).</label>
                            </div>
                            <div class="col-lg-12 col-12">
                                <input type="checkbox" name="permission_resizing" title="I understand that resizing may cause a change in the thickness or quantity of the stones of my ring and I agree to any possible changes that may occur due to resizing." value="1" id="permission_resizing">
                                <label for="inputTerms">I understand that resizing may cause a change in the thickness or quantity of the stones of my ring and I agree to any possible changes that may occur due to resizing.</label>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="note">
                                    <div class="note tt"><b>IMPORTANT NOTES:</b></div>
                                    <ul>
                                        <li>
                                            Please note that your return request will be processed based on the information that you submit online. Any handwritten notes on the printed copy of the return form will not be taken into consideration.                        </li>
                                        <li>
                                            To ensure rapid and efficient return services, we are unable to modify your requests after you submit your return form. Before you proceed to submission, please double-check the information that you have provided regarding your requests.                        </li>
                                        <li>
                                            Resizing and repair processes can take up to 25 business days. In the case you have an approaching occasion such as a wedding, we kindly advise you to send your product after the occasion. You can consult to our customer support team if your 60-Day period will expire before the date of your occasion.                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 text-left">
                                <div class="btn-div"> <a id="#returnsubmit" class="btn btn-default btn-block btn-save">SUBMIT</a></div>
                            </div>

                        </div><!--row biter-->
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
                    <h4 class="modal-title">EMail Us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6 col-sm-4 col-xs-6">
                            <div class="form-group col-md-10">
                                <label for="inputName">First Name</label>
                                <input type="firstname" class="form-control" id="inputFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputLastName">Last Name</label>
                                <input type="lastname" class="form-control" id="inputLastName" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-4 col-xs-6">
                            <div class="form-group col-md-10 mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group col-md-10 mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputTextarea" class="form-label">Comments</label>
                                <textarea class="form-control" id="inputTextarea" rows="3"></textarea>
                            </div>
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
