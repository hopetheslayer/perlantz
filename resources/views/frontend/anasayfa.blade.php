@extends('layouts.anatema')

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

    @include('layouts.partials.slider')
    <!--brand-->
    <div class="service-policy section-padding">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-sm-12 col-lg-12">

                    <div>
                        <img src="/frontend/assets/img/policy.png" class="image_full">
                        <img src="/frontend/assets/img/icon1.jpg"  class="image_mobile-1">
                        <img src="/frontend/assets/img/icon2.jpg"  class="image_mobile-2">
                    </div>



                </div>

            </div>
        </div>
    </div>
    <!-- brand end -->
    <!--categories-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @foreach($kat1 as $k1)
                    <div style="margin-left: -15px;" class="group-product-banner">
                        <a href="{{route('kategori',$k1->slug)}}">
                            <figure class="banner-statistics">
                                <img height="400" src="/frontend/assets/img/jewelry.png" alt="product banner">
                                <div class="banner-content banner-content_style3 text-center">
                                    <div class="cat-ban ">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jewelry</div>

                                </div>
                            </figure>
                        </a>
                        <ul style="margin-top: 15px" class="list list-group text-center list-zoom">
                            <li class="list-group-item d-flex justify-content-center align-items-center ">
                                <a href="{{url('category/j-rings')}}" class="cat-text">Rings</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-center  align-items-center">
                                <a href="{{url('category/j-necklaces')}}" class="cat-text">Necklaces</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-center  align-items-center">
                                <a href="{{url('category/j-bracelets')}}" class="cat-text">Bracelets</a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($kat2 as $k2)
                    <div style="margin-left: -15px;" class="group-product-banner">
                        <a href="{{route('kategori',$k2->slug)}}">
                            <figure class="banner-statistics">
                                <img height="400" src="/frontend/assets/img/wedding.png" alt="product banner">
                                <div class="banner-content banner-content_style3 text-center">
                                    <div class="cat-ban">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding</div>


                                </div>
                            </figure>
                        </a>
                        <ul style="margin-top: 15px" class="list list-group text-center   list-zoom ">
                            <li class="list-group-item d-flex justify-content-center align-items-center ">
                                <a href="{{url('category/wedding-rings-men')}}" class="cat-text ">Men</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-center  align-items-center">
                                <a href="{{url('category/wedding-rings-women')}}" class="cat-text">Women</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-center  align-items-center">
                                <a href="{{url('category/wedding-rings-couple')}}" class="cat-text">Couples</a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($kat3 as $k3)
                    <div style="margin-left: -15px;" class="group-product-banner">
                        <a href="{{route('kategori',$k3->slug)}}">
                            <figure class="banner-statistics">
                                <img height="400" src="/frontend/assets/img/less_is_more.png" alt="product banner">
                                <div class="banner-content banner-content_style3 text-center">
                                    <div class="cat-ban">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Less is More</div>


                                </div>
                            </figure>
                        </a>
                        <ul style="margin-top: 15px" class="list list-group text-center list-zoom">
                            <li class="list-group-item d-flex justify-content-center align-items-center ">
                                <a href="{{url('category/less-is-more-rings')}}" class="cat-text">Rings</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-center  align-items-center">
                                <a href="{{url('category/less-is-more-necklaces')}}" class="cat-text">Necklaces</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-center  align-items-center">
                                <a href="{{url('category/less-is-more-bracelets')}}" class="cat-text">Bracelets</a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

    <!-- categories end -->

    <div style="margin-top: 35px;" id="parallax-world-of-ugg">

        <section>
            <div class="parallax-one">
                <h2 >Perlantz Jewelry</h2>
                <h4>Customize Your Design</h4>
                <div style="margin-top: 50px;" class="d-flex justify-content-center">
                    <button style="font-family: gidole;" id='work' type="button" class="btn-sqr button-ronder" name="Hover">PERLANTZ</button>

                </div>

            </div>
        </section>



    </div>


    <!-- group blog start -->
    <section  class="section guides-home">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">Guides & Education</h2>
                    <p class="sub-title">Explore More</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="container">

            <div  class="row">
                <div  class="col-md-6 p-0 m-0">
                    <img style=" background-size: contain; background-position: center center; background-repeat: no-repeat;" class="image-framemin-height-300 h-100" style="height: 250px;" src="/frontend/assets/img/banner/help.jpg" alt="product banner">
                </div>

                <div  class="col-lg-6 col-xl-6 mb-4 mb-xl-0  appear-animation animated fadeInUpShorter appear-animation-visible p-0 m-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <div class="card  border-0">
                        <div  class="card   border-0 min-height-300  py-2 text-right  futura-news">
                            <div class="card-body p-4 ">

                                <h2 class="text-color-dark text-5 mb-2 gidole-font">HELP & EDUCATION</h2>
                                <p class="text-color-dark  mb-2 gidole-font">
                                    Getting engaged and married are two of the most important occasions in your life. These occasions are traditionally marked with the purchase and giving of engagement and wedding rings. Part of the fun in planning this big step in life is to choose your rings.
                                </p>
                                <button id='work' type="button" class="btn-sqr button-ronder" name="Hover">READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 15px;"  class="row mobil-revert">


                <div  class="col-lg-6 col-xl-6 mb-4 mb-xl-0  appear-animation animated fadeInUpShorter appear-animation-visible p-0 m-0 col-sm-push-0 one" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <div class="card  border-0">
                        <div  class="card news-background  border-0 min-height-300  py-2 text-right  futura-news">
                            <div class="card-body p-4">

                                <h2 class="text-color-dark text-5 mb-2 gidole-font">DIAMOND CERTIFICATION</h2>
                                <p class="text-color-dark  mb-2 gidole-font">
                                    Diamonds are natural stones and each diamond comes in unique internal and external characteristics. In addition to its size and colour, birthmarks inside the diamond also determine its characteristics. The value of a diamond is based on the combination of these qualities.
                                </p>

                                <a  href="{{route('aboutdiamonds')}}" id='work' type="button" class="btn-sqr button-ronder" name="Hover">READ MORE</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-md-6 p-0 m-0  order-xs-1 col-sm-push-1 two">
                    <img style=" background-size: contain; background-position: center center; background-repeat: no-repeat;  " class="image-framemin-height-300 h-100" src="/frontend/assets/img/banner/certifi.jpg" alt="product banner">
                </div>
            </div>

         <style>
             @media screen and (max-width: 768px) {
                 .mobil-revert  { display: flex; flex-flow: column; }
                 .two { order: 1; }
                 .one { order: 2 }
             }
         </style>

            <div style="margin-top: 15px;"  class="row">
                <div  class="col-md-6 p-0 m-0">
                    <img style=" background-size: contain; background-position: center center; background-repeat: no-repeat;" class="image-framemin-height-300 h-100" style="height: 250px;" src="/frontend/assets/img/banner/gem2.png" alt="product banner">
                </div>

                <div  class="col-lg-6 col-xl-6 mb-4 mb-xl-0  appear-animation animated fadeInUpShorter appear-animation-visible p-0 m-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <div class="card  border-0">
                        <div  class="card news-background  border-0 min-height-300  py-2 text-right  futura-news">
                            <div class="card-body p-4">

                                <h2 class="text-color-dark text-5 mb-2 gidole-font">ASK AN EXPERT</h2>
                                <p class="text-color-dark  mb-2 gidole-font">
                                    Tell Perlantz what you need and our jewellery specialists will go through thousands of unique design for you to find the perfect jewellery your decides
                                </p>
                                <button id='work' type="button" class="btn-sqr button-ronder" name="Hover">READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        </div>

    </section>
    <!-- group product start -->

    <!--
    <section style="margin-bottom: 35px;" class="about-us section-padding pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-thumb">
                        <img src="/frontend/assets/img/banner/per-ban.jpg" alt="about thumb">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">Perlantz
                        <h2 class="perlantz-title">Perlantz Diamonds</h2>
                        <h5 class="perlantz-yazi">
                            Getting engaged and married are two of the most important occasions in your life.<br><br>
                            These occasions are traditionally marked with the purchase and giving of engagement and wedding rings.<br><br>
                            Part of the fun in planning this big step in life is to choose your rings.<br><br>
                            When wedding jewelry is designed and created by the loving couple, it becomes even more special.<br><br>
                            <u>Perlantz</u>  is a successful European online "jeweler" which designs and crafts its own ranges of fine jewelry with input from its customers
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
     group about end -->

    <!-- latest blog area start
    <section style="margin-top: 100px;" class="latest-blog-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="section-title text-center">
                        <h2 class="title">latest blogs</h2>
                        <p class="sub-title">There are latest blog posts</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel-active slick-row-10 slick-arrow-style">
                        @foreach($blog as $bgx)


        <div class="blog-post-item">
            <figure class="blog-thumb">
                <a href="{{route('sblog',$bgx->slug)}}">
                                    <img src="/frontend/uploads/blog/kapak/{{$bgx->kimage}}" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>{{date('d F , Y', strtotime($bgx->created_at))}} | <a href="#">Perlantz Jewelry</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="{{route('sblog',$bgx->slug)}}">{{$bgx->post_baslik}}</a>
                                </h5>
                            </div>
                        </div>

                            @endforeach

        </div>
    </div>
</div>
</div>
</section>
latest blog area end -->

    <style>

        .section-title .sub-title {
            font-family: "gidole";
            font-size: 17px;
            padding-top: 6px;
            color: #555;
        }

        .guides-home h2{
            font-family: "gidole";

        }
        .guides-home p{
            font-family: "Montserrat";

        }
        .gidole-font{
            font-family: gidole;
            font-size: 15px;
        }


        @media (max-width: 640px) and (min-width: 320px){

            .image_mobile-1 {
                display: block;
                height: auto;
                margin-left: -5px;
            }

            .image_mobile-2 {
                display: block;
                height: auto;
                margin-left: 3px;
            }
        }

    </style>

@endsection
