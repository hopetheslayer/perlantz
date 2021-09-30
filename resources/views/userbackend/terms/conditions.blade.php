
@extends('layouts.anatema-app')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title> Perlantz </title>
@endsection


@section('sayfa-description')@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Rd Global Admin')

@section('tw-title')@endsection
@section('tw-site','@rdglobal_inc')
@section('tw-description')@endsection


@section('fc-title')@endsection

@section('fc-image') @endsection
@section('fc-description')@endsection

@section('content')


    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Terms & Conditions</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-weight-bold text-uppercase">Terms & Conditions</h2>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <iframe src="frontend/document/Terms and Conditions - INVAMED.pdf#toolbar=0" width="100%" height="600px"></iframe >

            </div>
        </div>
    </div>



@endsection

@section('js-extender')







@stop
