@extends('layouts.anatema')



@section('aside-page-title','HOME')



@section('sayfa-title')

    <title>Perlantz Jeweller</title>

@endsection





@section('sayfa-description')@endsection



@section('sayfa-keywords')@endsection



@section('sayfa-author','Rd Global Admin')


@section('tw-title') @endsection

@section('tw-site','@rdglobal_inc')

@section('tw-description')@endsection


@section('fc-title') @endsection


@section('fc-image')@endsection

@section('fc-description')@endsection



@section('content')


    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('anasayfa')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active"  aria-current="page">Category</li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="">{{$kategori->kategori_adi}}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

        .onlyImages{

            display: inline-block;

            position: relative;



        }

    </style>



    <div class="shop-main-wrapper section-padding">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 order-2 order-lg-1">

                    <aside class="sidebar-wrapper">

                        <!-- single sidebar start -->


                        <!-- sidebar area start
                        <div class="sidebar-single">

                            <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">

                                <div class="card">

                                    <div class="card-header accordion-header" role="tab" id="accordionMinimal4">

                                        <h5 class="mb-0">

                                            <a href="#" data-toggle="collapse" data-target="#accordionMinimalCollapse4" aria-expanded="false" aria-controls="accordionMinimalCollapse4">Precious Stones</a>

                                        </h5>

                                    </div>

                                    <div id="accordionMinimalCollapse4" class="collapse show" role="tabpanel" aria-labelledby="accordionMinimal4" data-parent="#accordionMinimal">

                                        <div class="card-body">

                                            <ul class="shop-categories">



                                                <ol>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr emerald " ><img alt="Emerald" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/emerald.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr ruby "><img alt="Ruby" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/ruby.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr sapphire " ><img alt="Sapphire" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/sapphire.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr diamond-sapphire " ><img alt="White Sapphire" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/diamond-sapphire.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr pinksapphire " ><img alt="Pink Sapphire" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/pinksapphire.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr yellow-sapphire " ><img alt="Yellow Sapphire" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/yellow-sapphire.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr black-sapphire " ><img alt="Black Sapphire" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/black-sapphire.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr green-sapphire " ><img alt="Green Sapphire" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/green-sapphire.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr orange-sapphire " ><img alt="Orange Sapphire" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/orange-sapphire.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                </ol>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="card">

                                    <div class="card-header accordion-header" role="tab" id="accordionMinimal5">

                                        <h5 class="mb-0">

                                            <a href="#" data-toggle="collapse" data-target="#accordionMinimalCollapse5" aria-expanded="false" aria-controls="accordionMinimalCollapse5">Semi-Precious Stones</a>

                                        </h5>

                                    </div>

                                    <div id="accordionMinimalCollapse5" class="collapse show" role="tabpanel" aria-labelledby="accordionMinimal5" data-parent="#accordionMinimal">

                                        <div class="card-body">

                                            <ul class="shop-categories">



                                                <ol>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr tanzanite " ><img alt="Tanzanite" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/tanzanite.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr tsavorite " ><img alt="Tsavorite" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/tsavorite.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr aquamarine " ><img alt="Aquamarine" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/aquamarine.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr pink-tourmaline "><img alt="Pink Tourmaline" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/pink-tourmaline.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr greentourmaline " ><img alt="Green Tourmaline" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/greentourmaline.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr morganite "><img alt="Morganite" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/morganite.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr sultan-stone " ><img alt="Sultan Stone" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/sultan-stone.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr amethyst " ><img alt="Amethyst" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/amethyst.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr kunzite "><img alt="Kunzite" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/kunzite.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr fire-opal "><img alt="Fire-Opal" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/fire-opal.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr peridot " ><img alt="Peridot" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/peridot.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr rhodolite " ><img alt="Rhodolite Garnet" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/rhodolite.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr opal " ><img alt="Opal" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/opal.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr black-opal " ><img alt="Black Opal" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/black-opal.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr garnet " ><img alt="Garnet" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/garnet.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr citrine " ><img alt="Citrine" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/citrine.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr topaz-blue " ><img alt="Blue Topaz" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/topaz-blue.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr green-amethyst " ><img alt="Green Amethyst" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/green-amethyst.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr lemon-quartz "><img alt="Lemon Quartz" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/lemon-quartz.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr smoke-quartz " ><img alt="Smoky Quartz" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/smoke-quartz.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr rose-quartz " ><img alt="Rose Quartz" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/rose-quartz.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr black-onyx " ><img alt="Black Onyx" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/black-onyx.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr diamond-topaz " ><img alt="White Topaz" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/diamond-topaz.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                </ol>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="card">

                                    <div class="card-header accordion-header" role="tab" id="accordionMinimal3">

                                        <h5 class="mb-0">

                                            <a href="#" data-toggle="collapse" data-target="#accordionMinimalCollapse3" aria-expanded="false" aria-controls="accordionMinimalCollapse3">Diamonds</a>

                                        </h5>

                                    </div>

                                    <div id="accordionMinimalCollapse3" class="collapse show" role="tabpanel" aria-labelledby="accordionMinimal3" data-parent="#accordionMinimal">

                                        <div class="card-body">

                                            <ul class="shop-categories">



                                                <ol>

                                                    <li  class="onlyImages">

                                                        <a class="navigationlayered-attr diamond-brillant " >

                                                            <img alt="Diamond" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/diamond-brillant.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr blackdiamond navigationlayered-attr-selected" ><img alt="Black Diamond" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/blackdiamond.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr yellowdiamond " ><img alt="Yellow Diamond" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/yellowdiamond.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr bluediamond " ><img alt="Blue Diamond" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/bluediamond.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr pinkdiamond " ><img alt="Pink Diamond" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/pinkdiamond.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr greendiamond " ><img alt="Green Diamond" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/greendiamond.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                    <li class="onlyImages">

                                                        <a class="navigationlayered-attr browndiamond " ><img alt="Brown Diamond" class="no-tooltip image_layered" src="https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/diamonds/stone_diamonds/browndiamond.jpg" width="41" height="36">



                                                        </a>

                                                    </li>

                                                </ol>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="card">

                                    <div class="card-header accordion-header" role="tab" id="accordionMinimal1">

                                        <h5 class="mb-0">

                                            <a href="#" data-toggle="collapse" data-target="#accordionMinimalCollapse1" aria-expanded="false" aria-controls="accordionMinimalCollapse1">Color</a>

                                        </h5>

                                    </div>

                                    <div id="accordionMinimalCollapse1" class="collapse show" role="tabpanel" aria-labelledby="accordionMinimal1" data-parent="#accordionMinimal">

                                        <div class="card-body">

                                            <ul class="shop-categories">

                                                <li style="height: auto;  border-bottom: 1px solid #e6e6e6;   padding: 4px 2px;    color: #414042;    margin: 0;">

                                                    <a title="White" class="navigationlayered-attr" href="?shortby=color-white">

                                                        <img title="White" alt="White" class="no-tooltip image_layered" src="/uploads/colors/white.png">

                                                        <span class="attr-title">White</span>

                                                    </a>

                                                </li>

                                                <li style="height: auto;  border-bottom: 1px solid #e6e6e6;   padding: 4px 2px;    color: #414042;    margin: 0;" >

                                                    <a title="Yellow" class="navigationlayered-attr" href="?shortby=color-yellow">

                                                        <img title="Sarı" alt="Sarı" class="no-tooltip image_layered" src="/uploads/colors/yellow.png">

                                                        <span class="attr-title">Yellow</span>

                                                    </a>

                                                </li>



                                                <li style="height: auto;  border-bottom: 1px solid #e6e6e6;   padding: 4px 2px;    color: #414042;    margin: 0;">

                                                    <a title="Yellow" class="navigationlayered-attr" href="?shortby=color-yellow">

                                                        <img title="Sarı" alt="Sarı" class="no-tooltip image_layered" src="/uploads/colors/yellow.png">

                                                        <span class="attr-title">Yellow</span>

                                                    </a>

                                                </li>





                                                <li style="height: auto;  border-bottom: 1px solid #e6e6e6;   padding: 4px 2px;    color: #414042;    margin: 0;">

                                                    <a title="Red" class="navigationlayered-attr" href="?shortby=color-red">

                                                        <img title="Kırmızı" alt="Kırmızı" class="no-tooltip image_layered" src="/uploads/colors/red.png">

                                                        <span class="attr-title">Red</span>

                                                    </a>

                                                </li>



                                                <li style="height: auto;  border-bottom: 1px solid #e6e6e6;   padding: 4px 2px;    color: #414042;    margin: 0;">

                                                    <a title="White Yellow" class="navigationlayered-attr" href="?shortby=white-yellow">

                                                        <img title="Beyaz Sarı" alt="Beyaz Sarı" class="no-tooltip image_layered" src="/uploads/colors/white_yellow.png">

                                                        <span class="attr-title">White Yellow</span>

                                                    </a>

                                                </li>



                                                <li style="height: auto;  border-bottom: 1px solid #e6e6e6;   padding: 4px 2px;    color: #414042;    margin: 0;">

                                                    <a style="" title="Sarı Beyaz" class="navigationlayered-attr" href="?shortby=yellow-white">

                                                        <img title="Sarı Beyaz" alt="Sarı Beyaz" class="no-tooltip image_layered" src="/uploads/colors/yellow_white.png">

                                                        <span class="attr-title">Yellow White</span>

                                                    </a>

                                                </li>



                                                <li style="height: auto;  border-bottom: 1px solid #e6e6e6;   padding: 4px 2px;    color: #414042;    margin: 0;">

                                                    <a title="Red White" class="navigationlayered-attr" href="?shortby=red-white">

                                                        <img title="Kırmızı Beyaz" alt="Kırmızı Beyaz" class="no-tooltip image_layered" src="/uploads/colors/red_white.png">

                                                        <span class="attr-title">Red White</span>

                                                    </a>

                                                </li>



                                                <li >

                                                    <a title="White Red" class="navigationlayered-attr" href="?shortby=white-red">

                                                        <img title="Beyaz Kırmızı" alt="Beyaz Kırmızı" class="no-tooltip image_layered" src="/uploads/colors/white_red.png">

                                                        <span class="attr-title">White Red</span>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>













                            </div>

                        </div>
                        -->

                        <div class="sidebar-single">

                            <h5 class="sidebar-title">Filter Prices</h5>

                            <div class="sidebar-body">

                                <ul class="shop-categories">

                                    <li><a href="?shortby=0-200">0 - 200 €<span></span></a></li>

                                    <li><a href="?shortby=200-500">200 - 500 € <span></span></a></li>

                                    <li><a href="?shortby=500-1000">500 - 1000 € <span></span></a></li>

                                    <li><a href="?shortby=1000-2000">1000 - 2000 € <span></span></a></li>

                                    <li><a href="?shortby=2000">2000 € & higher<span></span></a></li>

                                </ul>

                            </div>

                        </div>
                        @if(count($alt_kategori)>0)
                        <div class="sidebar-single">

                            <h5 class="sidebar-title">categories</h5>

                            <div class="sidebar-body">

                                <ul class="shop-categories">



                                        @foreach($alt_kategori as $kat)

                                        <li><a href="{{route('kategori',$kat->slug)}}"> {{$kat->kategori_adi}} <span>({{$kat->urunler->count()}})</span></a></li>
                                        @endforeach



                                </ul>

                            </div>

                        </div>
                        @else
                        @endif



                    </aside>

                </div>

                <div class="col-lg-9 order-1 order-lg-2">

                    <div class="shop-product-wrapper">

                        <!-- shop product top wrap start -->

                        <div class="shop-top-bar">

                            <div class="row align-items-center">

                                <div class="col-lg-7 col-md-6 order-2 order-md-1">

                                    <div class="top-bar-left">

                                        <div class="product-view-mode">

                                            <a class="active" href="#" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>

                                            <a href="#" data-target="list-view" data-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>

                                        </div>

                                        <div class="product-amount">

                                            <p> Showing <span>{{$urunler->firstItem()}} of {{$urunler->lastItem()}}</span> total {{$urunler->total()}} Products</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="product-short">
                                            <select id="dynamic_select">
                                                <option value="?shortby=most-popular">Name (A - Z)</option>

                                                <option value="?shortby=new-products">Name (Z - A)</option>
                                            </select>

                                            <script>

                                                $(function(){

                                                    // bind change event to select

                                                    $('#dynamic_select').on('change', function () {

                                                        var url = $(this).val(); // get selected value

                                                        if (url) { // require a URL

                                                            window.location = url; // redirect

                                                        }

                                                        return false;

                                                    });

                                                });

                                            </script>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="shop-product-wrap grid-view row mbn-30">

                        @foreach($urunler as $urunx)

                            <!-- product single item start -->

                            <div class="col-md-4 col-sm-6">

                                <!-- product grid start -->

                                <div class="product-item">

                                    <figure class="product-thumb">

                                        <a href="{{route('urun',$urunx->slug)}}">
                                            <img class="pri-img" src="/frontend/uploads/urun/{{$urunx->urun_resmi}}" alt="product">
                                            <img class="sec-img" src="/frontend/uploads/urun/{{$urunx->urun_resmi}}" alt="product">
                                        </a>


                                    </figure>
                                    <div class="button-group">
                                        <form action="{{route('wishlist.ekle')}}" method="post">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$urunx->id}}">

                                            <a data-toggle="tooltip" title="Add Wishlist"><button type="submit" >
                                                <i class="fas fa-heart"></i>
                                            </button></a>


                                        </form>



                                    </div>

                                    <div class="product-caption text-center">


                                        <h6 class="product-name">

                                            <a href="{{route('urun',$urunx->slug)}}">{{$urunx->urun_adi}}</a>

                                        </h6>
                                        <div class="price-box">



                                            <span class="price-regular">€{{$urunx->fiyat_eur_indirim}}</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="product-list-item">

                                    <figure class="product-thumb">

                                        <a href="{{route('urun',$urunx->slug)}}">

                                            <img class="pri-img" src="/frontend/uploads/urun/{{$urunx->urun_resmi}}" alt="product">


                                            <img class="sec-img" src="/frontend/uploads/urun/{{$urunx->urun_resmi}}" alt="product">

                                        </a>






                                    </figure>

                                    <div class="product-content-list">
                                        <h5 class="product-name"><a href="{{route('urun',$urunx->slug)}}">{{$urunx->urun_adi}}</a></h5>

                                        <div class="price-box">

                                            <span class="price-regular">€{{$urunx->fiyat_eur_indirim}}</span>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            @endforeach
                        </div>

                        <div class="paginatoin-area justify-content-center">

                            {{request()->has('shortby') ? $urunler->appends(['shortby'=>request('shortby')])->links() :$urunler->links()}}

                        </div>

                        <!-- end pagination area -->

                    </div>

                </div>

                <!-- shop main wrapper end -->

            </div>

        </div>

    </div>



@endsection



@section('js-extender')







@endsection





