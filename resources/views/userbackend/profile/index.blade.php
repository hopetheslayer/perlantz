
@extends('layouts.anatema-app')

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
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" href="{{route('home')}}" aria-current="page">my-account</li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('user.profile')}}">User Profile</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
    </style>

    <div style="margin-top: 50px; margin-bottom: 50px;" class="container">
        <div class="row">
            <div class="col">
                <div class="myaccount-content">
                    <h5 class="text-center">{{Auth::user()->name}} {{Auth::user()->surname}} Profile </h5>


                    <div class="card-body">

                        <form method="POST" action="{{ route('dene.profile.kaydet',$user->id) }}" enctype="multipart/form-data">
                            @csrf


                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <div class="form-group row">
                                <div style="margin-bottom: 25px;" class="col-lg-12">

                                    <div class="col text-center">
                                        <img src="/frontend/uploads/profile/{{$user->detay->imageb}}" class="img-fluid rounded-circle" alt="" width="200" />
                                    </div>
                                </div>



                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Profile Photo :</label>
                                <div class="col-md-9 ">
                                    {!! Form::file('imageb', array('class' => 'form-control')) !!}
                                </div>

                            </div>

                            <div style="margin-top: 50px;" class="form-group row">

                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Name :</label>
                                <div class="col-lg-6">


                                        {!! Form::text('name',$user->name, ['class' => 'form-control  ' ,'placeholder' => 'name']) !!}                                    </div>

                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Surname :</label>
                                <div class="col-lg-6">
                                    {!! Form::text('surname',$user->surname, ['class' => 'form-control ' ,'placeholder' => 'Surname']) !!}
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Website</label>
                                <div class="col-lg-6">
                                    {!! Form::text('website',$user->detay->website, ['class' => 'form-control ' ,'placeholder' => 'Website']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputHelpText">Phone Number:</label>
                                <div class="col-lg-6">
                                    {!! Form::text('phone',$user->detay->phone, ['class' => 'form-control ' ,'placeholder' => 'Phone Number']) !!}

                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2">Selected Your Country</label>
                                <div class="col-lg-6">


                                    <h4><span class="badge badge-primary">Selected Country : {{substr ($user->detay->country,4,100)}}</span></h4>

                                    <select name="country" class="form-control bg-light-5 rounded border-0 text-1" style="width:250px">
                                        @foreach ($countries as $key => $value)
                                            <option value="{{ $key }}-{{ $value }}" name="{{$value}}">{{ $value }}</option>
                                        @endforeach

                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2">Selected Your State</label>
                                <div class="col-lg-6">
                                    <h4><span class="badge badge-primary">Selected State : {{$user->detay->state}}</span></h4>
                                    <select name="state" class="form-control bg-light-5 rounded border-0 text-1"style="width:250px">
                                    </select>
                                </div>
                            </div>





                            <div class="form-group text-center">
                                <div class="col-md-12 offset-md-4">
                                    <button type="submit" class="btn btn-sqr">
                                        Save
                                    </button>


                                </div>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
        </div>


    </div>







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
                        url : 'profile/dropdownlist/getstates/' +countryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="state"]').empty();
                            jQuery.each(data, function(value,key){
                                $('select[name="state"]').append('<option value="'+ key +'">'+ key +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="state"]').empty();
                }
            });
        });
    </script>




@stop
