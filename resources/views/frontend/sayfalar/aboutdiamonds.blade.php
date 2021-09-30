@extends('layouts.anatema')

@section('aside-page-title','CONTACT US')

@section('sayfa-title')
    <title>Perlantz | Ring Guide </title>
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
                                <li class="breadcrumb-item active" href="{{route('aboutdiamonds')}}" aria-current="page">Diamond Education</li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section style="margin-bottom: 35px;" class="about-us section-padding pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                 @foreach($diamondsbilgi as $dia)
                     {!! $dia->aciklama !!}
                    @endforeach
                </div>

                </div>
            </div>
        </div>
    </section>


@endsection


@section('js-extender')
    <!-- Include Editor style. -->
    <link href="/frontend/css/frola.css" rel="stylesheet" type="text/css" />

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="/frontend/js/frola.js"></script>

    <!-- Initialize the editor. -->
    <script>
        new FroalaEditor('textarea');
    </script>
@endsection
