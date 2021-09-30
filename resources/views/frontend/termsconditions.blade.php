@extends('layouts.anatema')



@section('aside-page-title','ABOUT US')



@section('sayfa-title')

    <title></title>

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

                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>

                                <li class="breadcrumb-item active" href="{{route('terms')}}" aria-current="page">Terms & Conditions</li>

                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </div>






    <div style="margin-top: 25px;" class="container">

        <div class="row">

            <div class="col-md-12 col-lg-12 col-sm-12">

                <iframe src="frontend/documents/terms-conditions.pdf#toolbar=0" width="100%" height="600px"></iframe >



            </div>

        </div>

    </div>















@endsection



@section('js')



@endsection

