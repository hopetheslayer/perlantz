@extends('layouts.anatema')

@section('aside-page-title','ABOUT US')

@section('sayfa-title')
    <title>Perlantz | About Us </title>
@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')

@section('content')

    <link rel="stylesheet" href="/frontend/assets/css/faq.css">

    <!-- ======= Hero Search Starts ======= -->
    <section id="hero">
        <div class="container search-box search-box--hero">
            <div class="hero__subtitle">Help desk</div>
            <div class="hero__title">Hello, how can we help?</div>
            <form role="search" class="search" data-search="" data-instant="true" autocomplete="off"><input name="utf8" type="hidden" value="✓"><input type="search" name="query" id="query" placeholder="Search" autocomplete="off" aria-label="Search">
                <input type="submit" name="commit" value="Search"></form>
        </div>
    </section><!-- Hero Search Ends -->

    <main id="main">


        <!-- ======= Frequently ======= -->
        <section style="margin-bottom: 56px;" id="faq" class="faq">
            <div class="container">

                <div class="row">


                    <div class="col-lg-4 ">
                        <a href="#">
                            <div class="icon-box">
                                <div class="icon"><i class="fas  fa-question"></i></div>
                                <h4 class="title">General Questions</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 ">
                        <a href="#">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-address-card"></i></div>
                                <h4 class="title">Jewelry Education</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 ">
                        <a href="#">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-save"></i></div>
                                <h4 class="title">Existing Orders</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 ">
                        <a href="#">
                            <div class="icon-box icon-box2">
                                <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">Payment Options</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 ">
                        <a href="#">
                            <div class="icon-box icon-box2">
                                <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">Jewelry Guides</h4>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 ">
                        <a href="#">
                            <div class="icon-box icon-box2">
                                <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">Repair & Resize</h4>

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 ">
                        <a href="#">
                            <div class="icon-box icon-box2">
                                <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">Returns</h4>

                            </div>
                        </a>
                    </div>


                </div>

            </div>
        </section><!-- Frequently Ends -->


    </main><!-- End #main -->







@endsection

@section('js')

@endsection
