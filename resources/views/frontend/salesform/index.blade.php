@extends('layouts.anatema')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title>Perlantz </title>
@endsection


@section('sayfa-description')@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Perlantz Admin')

@section('tw-title') @endsection
@section('tw-site','')
@section('tw-description')@endsection


@section('fc-title') @endsection

@section('fc-image') @endsection
@section('fc-description')@endsection

@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('anasayfa')}}">Home</a></li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Sales Team</h1>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 mb-4 mb-md-0">
                    <div class="overflow-hidden mb-2">
                        <h2 class="word-rotator letters type font-weight-bold text-6 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                            <span>Submit Your</span>
                            <span class="word-rotator-words waiting">
											<b class="is-visible">Order</b>
											<b>Quote</b>
											<b>Request</b>
										</span>
                        </h2>
                    </div>
                    <p class="lead mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Our team of R&D engineers, biomedical engineers, clinical support specialists, qualified technicians and technical support specialists are ready to be your only solution for product development and production. Take a step to bring your project to market with the quality of INVAMED. Fill out the form below to contact our sales team. You will be returned as soon as possible.
                        Thank you interest in our company and products.</p>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: -125px;" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 mb-4 mb-md-0">
                    <form action="connect-sales" id="shopLoginSignIn" method="post">
                        @csrf
                        <div style="margin-top: 50px;" class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Product Area :</label>
                            <div class="col-lg-9">

                                <select name="product_area" class="form-control bg-dark-5 text-color-light-2 rounded border-0 text-1" style="width:350px">
                                    <option value="">Please select...</option>
                                    <option value="Extrusions">Extrusions</option>
                                    <option value="Diagnostic and interventional catheters">Diagnostic and interventional catheters</option>
                                    <option value="Balloons and balloon catheters">Balloons and balloon catheters</option>
                                    <option value="Sheath/dilator sets">Sheath/dilator sets</option>
                                    <option value="Sutures, braids, and fibers">Sutures, braids, and fibers</option>
                                    <option value="Bioabsorbable sutures, yarns, and resins">Bioabsorbable sutures, yarns, and resins</option>
                                </select>

                            </div>
                        </div>
                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">First Name :</label>
                            <div class="col-lg-6">
                                {!! Form::text('firstname',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'First Name', 'required' => '']) !!}
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Last Name :</label>
                            <div class="col-lg-6">
                                {!! Form::text('lastname',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'Last Name', 'required' => '']) !!}
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Email Address :</label>
                            <div class="col-lg-6">
                                {!! Form::email('email',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'Email Address', 'required' => '']) !!}
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Phone :</label>
                            <div class="col-lg-6">
                                {!! Form::text('phone',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'Phone', 'required' => '']) !!}
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Company :</label>
                            <div class="col-lg-6">
                                {!! Form::text('company',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'Company', 'required' => '']) !!}
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Job Title :</label>
                            <div class="col-lg-6">
                                {!! Form::text('jobtitle',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'Job Title', 'required' => '']) !!}
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Country / States :</label>
                            <div class="col-lg-3">
                                <select name="country" class="form-control bg-dark-5 text-color-light-2 rounded border-0 text-1" style="width:250px">
                                    <option value="">Please select...</option>
                                    @foreach ($countries as $key => $value)
                                        <option value="{{ $key }}-{{ $value }}" name="{{$value}}">{{ $value }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select name="states" class="form-control bg-dark-5 text-color-light-2 rounded border-0 text-1"style="width:250px"></select>
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Adress Details :</label>
                            <div class="col-lg-6">
                                {!! Form::textarea('address',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'Address Detail', 'required' => '']) !!}
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Other Questions :</label>
                            <div class="col-lg-6">
                                {!! Form::textarea('other',null, ['class' => 'form-control bg-dark-5 rounded border-0 text-color-light-2 text-1' ,'placeholder' => 'Other Questions', 'required' => '']) !!}
                            </div>
                        </div>

                        <div class="form-group  text-center">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-dark text-color-light">
                                    Send
                                </button>


                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>







@endsection

@section('js-extender')
    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            jQuery('select[name="country"]').on('change',function(){
                var countryID = jQuery(this).val();
                if(countryID)
                {
                    jQuery.ajax({
                        url : 'connect-sales/dropdownlist/getstates/' +countryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="states"]').empty();
                            jQuery.each(data, function(value,key){
                                $('select[name="states"]').append('<option value="'+ key +'">'+ key +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="states"]').empty();
                }
            });
        });
    </script>

@endsection
