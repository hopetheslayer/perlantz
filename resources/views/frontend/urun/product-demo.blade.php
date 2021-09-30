@extends('layouts.anatema')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title>Perlantz </title>
@endsection


@section('sayfa-description')@endsection

@section('sayfa-keywords')@endsection

@section('sayfa-author','Perlantz Admin')

@section('tw-title')@endsection
@section('tw-site','')
@section('tw-description')@endsection


@section('fc-title') @endsection

@section('fc-image')@endsection
@section('fc-description')@endsection

@section('content')

    <link href="/frontend/assets/css/sen-purified.css" rel="stylesheet">

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    @if($urun->defination == 'Ring')
        <form action="{{route('cart.ekle')}}" method="post">
            <!-- page main wrapper start -->
            <section style="margin-top: 25px;" class="inner-page">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 offset-lg-1 one">
                            <div class="product-header">
                                <h6 class="product-heading">Create Your</h6>
                                <h4 class="product-name">{{$urun->urun_adi}}</h4>
                            </div>

                            <div id="accordion">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                    @if($urun->stone == '-')

                                    @else
                                        <!--Ring Layer 1-->
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Center Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola" style="background-image: url(/frontend/assets/img/gems/{{$urun->stone.'.png'}});" class="gem-1"></span>
                                                        <span class="gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 1 Ends-
                                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">



                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Diamond" @if($urun->stone == 'diamond') checked="checked"@endif >
                                                                    <img src="/frontend/assets/img/gems/diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name"> Diamond</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Ruby" @if($urun->stone == 'ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Sapphire" @if($urun->stone == 'Blue Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Emerald" @if($urun->stone == 'Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Amethyst" @if($urun->stone == 'Amethyst') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/amethyst.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Amethyst</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Aquamarine" @if($urun->stone == 'Aquamarine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Aquamarine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Citrine" @if($urun->stone == 'Citrine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/citrine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Citrine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Red Garnet" @if($urun->stone == 'Red Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Red Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rhodolite Garnet" @if($urun->stone == 'Rhodolite Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/gem-9.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Tourmaline" @if($urun->stone == 'Pink Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Tourmaline</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Black Onyx" @if($urun->stone == 'Black Onyx') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Black Onyx</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Peridot" @if($urun->stone == 'Peridot') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/peridot.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Peridot</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Sapphire" @if($urun->stone == 'Pink Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Yellow Sapphire" @if($urun->stone == 'Yellow Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Yellow Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Tanzanite" @if($urun->stone == 'Tanzanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Tanzanite</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Topaz" @if($urun->stone == 'Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Tourmaline" @if($urun->stone == 'Green Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Tourmaline</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rose Quartz" @if($urun->stone == 'Rose Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rose Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Smoky Quartz" @if($urun->stone == 'Smoky Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Smoky Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Quartz" @if($urun->stone == 'Green Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Quartz</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Iolite" @if($urun->stone == 'Iolite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lolite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Iolite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Fire Opal" @if($urun->stone == 'Fire Opal') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Fire Opal</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="London Blue Topaz" @if($urun->stone == 'London Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">London Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Moissanite" @if($urun->stone == 'Moissanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/moissanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Moissanite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Grown Diamond" @if($urun->stone == 'Lab Grown Diamond') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Emerald" @if($urun->stone == 'Lab Created Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Ruby" @if($urun->stone == 'Lab Created Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Sapphire" @if($urun->stone == 'Lab Created Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Morganite" @if($urun->stone == 'Morganite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/morganite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Morganite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Alexandrite" @if($urun->stone == 'Lab Alexandrite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Alexandrite</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>




                                                </div>
                                            </div>
                                            -->
                                            </li>
                                    @endif
                                    <!--Ring Layer 1 Ends--->

                                        <!--Ring Layer 2--->
                                        @if($urun->stone_dia1 == '-')

                                        @else
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Accent Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone_dia1}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola" style="background-image: url(/frontend/assets/img/gems/{{$urun->stone_dia1.'.png'}});" class="gem-2"></span>
                                                        <span class="bx bx-chevron-down gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 2
                                                <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                    <div class="card-body">
                                                        <div class="clearfix"></div>

                                                        <div class="swatches">

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="diamond" @if($urun->stone_dia1 == 'diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Diamond</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="ruby" @if($urun->stone_dia1 == 'ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Sapphire" @if($urun->stone_dia1 == 'Blue Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Emerald" @if($urun->stone_dia1 == 'Emerald') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Emerald</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Amethyst" @if($urun->stone_dia1 == 'Amethyst') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/amethyst.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Amethyst</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Aquamarine" @if($urun->stone_dia1 == 'Aquamarine') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Aquamarine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Citrine" @if($urun->stone_dia1 == 'Citrine') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/citrine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Citrine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Red Garnet" @if($urun->stone_dia1 == 'Red Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Red Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rhodolite Garnet" @if($urun->stone_dia1 == 'Rhodolite Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/gem-9.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Tourmaline" @if($urun->stone_dia1 == 'Pink Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Tourmaline</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Black Onyx" @if($urun->stone_dia1 == 'Black Onyx') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Black Onyx</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Peridot" @if($urun->stone_dia1 == 'Peridot') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/peridot.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Peridot</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Sapphire" @if($urun->stone_dia1 == 'Pink Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Yellow Sapphire" @if($urun->stone_dia1 == 'Yellow Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Yellow Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Tanzanite" @if($urun->stone_dia1 == 'Tanzanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Tanzanite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">
                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Topaz" @if($urun->stone_dia1 == 'Blue Topaz') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Green Tourmaline" @if($urun->stone_dia1 == 'Green Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Green Tourmaline</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rose Quartz" @if($urun->stone_dia1 == 'Rose Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rose Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Smoky Quartz" @if($urun->stone_dia1 == 'Smoky Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Smoky Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Iolite" @if($urun->stone_dia1 == 'Iolite') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lolite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Iolite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">




                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Fire Opal" @if($urun->stone_dia1 == 'Fire Opal') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Fire Opal</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="London Blue Topaz" @if($urun->stone_dia1 == 'London Blue Topaz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">London Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Moissanite" @if($urun->stone_dia1 == 'Moissanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/moissanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Moissanite</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Grown Diamond" @if($urun->stone_dia1 == 'Lab Grown Diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Emerald" @if($urun->stone_dia1 == 'Lab Created Emerald') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">



                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Ruby" @if($urun->stone_dia1 == 'Lab Created Ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Sapphire" @if($urun->stone_dia1 == 'Lab Created Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Alexandrite" @if($urun->stone_dia1 == 'Lab Alexandrite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Alexandrite</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </div>






                                                    </div>
                                                </div>
                                                --->
                                            </li>
                                            <!--Ring Layer 2 Ends-->
                                    @endif
                                    <!--Ring Layer 3---->
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" >


                                                <div class="col-lg-8 col-8 product-info">

                                                    <div class="layer-type">Primary Metal</div>
                                                    <div class="layer-desc" >{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                                </div>

                                                <div class="col-lg-4 col-4 swatch-box ">
                                                    <span style="background-image: url(/frontend/assets/img/metals/{{$urun->main_metal_k }}{{$urun->metal_color.'.png'}});" class="gem-3"></span>
                                                    <span class="bx bx-chevron-down gemchevron"></span>
                                                </div>


                                            </div>
                                            <!--Ring Layer 3 Ends
                                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Platinum"  >
                                                                    <img src="/frontend/assets/img/metals/platinum.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Platinum</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Palladium">
                                                                    <img src="/frontend/assets/img/metals/palladium.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Palladium</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Silver">
                                                                    <img src="/frontend/assets/img/metals/silver.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Silver</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K White Gold</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K White Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K White Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>



                                                        <div class="gems-5-row row">



                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/14kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/10kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Yellow Gold</span>
                                                                </label>
                                                            </div>




                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Rose Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                    <div class="option-sub-description-title">Free engraving available in Cart</div>
                                                    <div class="option-info stone">

                                                        <span class="short-title">18K Yellow Gold</span>
                                                        <div class="short-body">A premium gold hypoallergenic alloy, 18-karat yellow gold is 75% pure gold, with a rich buttery golden color.</div>
                                                    </div>



                                                </div>
                                            </div>
                                            -->
                                        </li>
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" id="headingOne" >

                                                <div class="col-lg-6 col-8 product-info">

                                                    <div class="layer-type">Perlantz Logo </div>
                                                    <div class="layer-desc" >Inside</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">
                                                        <div class="card">

                                                            <div class="designbutton">
                                                                <input type="checkbox" checked="checked" name="perlog" value="yes" class="flipswitch" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                        <!--Ring Layer 3 Ends-->

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- Orta Slider Starts --->
                        <div class="col-lg-5 two">
                            <div class="main-product-slider text-center">
                                <div class="product-header-mobile">
                                    <h6 class="product-heading">Create Your</h6>
                                    <h4 class="product-name">{{$urun->urun_adi}}</h4>
                                </div>
                                <div class="main-product-slider text-center">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img  src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div style="" class="pro-large-img img-zoom">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div class="pro-nav-thumb">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/assets/img/360-logo.png" alt="product-details" />
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--- Orta Slider---->

                        <div  class="col-lg-2 three ">


                            @if($urun->shape == '-')

                            @else
                                <div style="margin-top: 8px;" class="cut-info" class="hidden-xs">{{$urun->shape}} Cut</div>
                            @endif
                            @if($urun->stone == '-')

                            @else
                                <div style="margin-top: 8px;" class="primary-stone-info">Stone Type: {{$urun->stone}}</div>
                            @endif
                            @if($urun->seo_description == '-')

                            @else
                                <div style="margin-top: 8px;" class="material-description">
                                    {{$urun->seo_description}}
                                </div>
                            @endif
                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="all-prices-container">
                                    <span class="product-price">Price: € {{$urun->fiyat_eur}}</span>
                                </div>
                            @endif

                            @if($urun->est_delivery == '-')

                            @else
                                <div style="margin-top: 8px;" class="learn-more-link">
                                    <span>Estimated Delivery:{{$urun->est_delivery}}</span>
                                </div>
                            @endif

                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="add-to-cart text-center">

                                    @csrf

                                    <input type="hidden" name="id" value="{{$urun->id}}">

                                    <input style=" justify-content: center;" type="submit" class="btn btn-sqr " value="Add To Card">




                                </div>
                            @endif





                        </div>
                        <div class="col-lg-1">
                        </div>
            </section>
        </form>







        <section  class="about-us section-padding pb-0">
            <div class="container">
                <div  class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="about-content text-center">
                            <div class="taki-sag-yazi">ABOUT YOUR</div>
                            <div class="taki-sag-yazi-urun-isim">{{$urun->urun_adi}}</div>
                            <div class="taki-sag-yazi-urun-yazi">
                                {{$urun->about_urun_yazi}}
                            </div>
                            <div style="margin-top: 45px;" class="row">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <th class="table-yazi-baslik">
                                                <div class="br"></div>
                                                General
                                            </th>
                                            <td>
                                                <div class="table-yazi-info1"><b>Color / Metal</b></div>
                                                <div class="table-yazi-info1">{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                            </td>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="table-yazi-info1"><b>Average Weight</b></div>
                                                <div class="table-yazi-info1">
                                                    @if($urun->eightk_weight != '-')
                                                        {{$urun->eightk_weight}}
                                                    @endif
                                                    @if($urun->ninek_weight != '-')
                                                        {{$urun->ninek_weight}}
                                                    @endif
                                                    @if($urun->forteenk_weight != '-')
                                                        {{$urun->forteenk_weight}}
                                                    @endif
                                                    @if($urun->eighteenk_weight != '-')
                                                        {{$urun->eighteenk_weight}}
                                                    @endif
                                                    @if($urun->twentyfivek_weight != '-')
                                                        {{$urun->twentyfivek_weight}}
                                                    @endif
                                                    @if($urun->ninefiveplt_weight != '-')
                                                        {{$urun->ninefiveplt_weight}}
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-yazi-baslik"> <div class="br"></div>Center Stone</th>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            @if($urun->stone_dia1 == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Stone dia1</b></div>
                                                    <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                </td>
                                            @endif
                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Carat</b></div>
                                                    <div class="table-yazi-info1">{{$urun->total_crt}}</div>
                                                </td>
                                            @endif

                                            @if($urun->color == '-' and $urun->clarity == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Color / Clarity</b></div>
                                                    <div class="table-yazi-info1">{{$urun->color}} /  {{$urun->clarity}}</div>
                                                </td>
                                            @endif

                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Size</b></div>
                                                    <div class="table-yazi-info1">{{$urun->mm}}mm</div>
                                                </td>
                                            @endif

                                            @if($urun->certificate == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Certificate</b></div>
                                                    <div class="table-yazi-info1">{{$urun->certificate}}</div>
                                                </td>
                                            @endif


                                        </tr>
                                        @if($urun->stone_dia1 == '-')
                                        @else
                                            <tr>
                                                <th class="table-yazi-baslik"> <div class="br"></div>Accent Stone</th>
                                                @if($urun->stone_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Stone</b></div>
                                                        <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->cert_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Certificate</b></div>
                                                        <div class="table-yazi-info1">{{$urun->cert_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->color_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Color</b></div>
                                                        <div class="table-yazi-info1">{{$urun->color_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->clarity_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Clarity</b></div>
                                                        <div class="table-yazi-info1">{{$urun->clarity_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->shape_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Shape</b></div>
                                                        <div class="table-yazi-info1">{{$urun->shape_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->mm_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->mm_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->total_crt_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->total_crt_dia1}}</div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                                <div class="taki-sag-yazi-urun-yazi ">Stone counts and weights are based on a size 7 for women and a size 10 for men, and may vary slightly for different sizes.</div>

                                <div class="taki-sag-yazi-urun-yazi ">All items are delivered within 7-10 business days with free shipping. We offer one free resize and a craftsmanship warranty during the first year, and returns within 45 days.</div>




                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section style="margin-top: 35px; margin-bottom: -55px" class="section section-background section-height-3" data-plugin-image-background data-plugin-options="{'imageUrl': '/frontend/assets/img/diff.png'}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold text-light mb-0">EXPERT ADVICE FROM OUR Jewelry Consultants</h2>
                        <p class="font-weight-light text-light mb-0">Our Consultants are here to help every step of the way, from selecting the perfect
                            setting and stones to ensuring a seamless delivery.</p>
                        <a class="btn btn-sqr" href="{{route('contact-us')}}">SEND US A MESSAGE</a>
                        <a class="btn btn-sqr" href="tel:+1234567890">Call Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- page main wrapper end -->
    @endif

    @if($urun->defination == 'Earring')
        <form action="{{route('cart.ekle')}}" method="post">
            <!-- page main wrapper start -->
            <section style="margin-top: 25px;" class="inner-page">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 offset-lg-1 one">
                            <div class="product-header">
                                <h6 class="product-heading">Create Your</h6>
                                <h4 class="product-name">{{$urun->urun_adi}}</h4>
                            </div>

                            <div id="accordion">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                    @if($urun->stone == '-')

                                    @else
                                        <!--Ring Layer 1-->
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Center Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola" style="background-image: url(/frontend/assets/img/gems/{{$urun->stone.'.png'}});" class="gem-1"></span>
                                                        <span class="gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 1 Ends-
                                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">



                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Diamond" @if($urun->stone == 'Diamond') checked="checked"@endif >
                                                                    <img src="/frontend/assets/img/gems/diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name"> Diamond</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Ruby" @if($urun->stone == 'Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Sapphire" @if($urun->stone == 'Blue Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Emerald" @if($urun->stone == 'Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Amethyst" @if($urun->stone == 'Amethyst') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/amethyst.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Amethyst</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Aquamarine" @if($urun->stone == 'Aquamarine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Aquamarine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Citrine" @if($urun->stone == 'Citrine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/citrine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Citrine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Red Garnet" @if($urun->stone == 'Red Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Red Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rhodolite Garnet" @if($urun->stone == 'Rhodolite Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/gem-9.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Tourmaline" @if($urun->stone == 'Pink Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Tourmaline</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Black Onyx" @if($urun->stone == 'Black Onyx') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Black Onyx</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Peridot" @if($urun->stone == 'Peridot') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/peridot.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Peridot</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Sapphire" @if($urun->stone == 'Pink Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Yellow Sapphire" @if($urun->stone == 'Yellow Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Yellow Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Tanzanite" @if($urun->stone == 'Tanzanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Tanzanite</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Topaz" @if($urun->stone == 'Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Tourmaline" @if($urun->stone == 'Green Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Tourmaline</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rose Quartz" @if($urun->stone == 'Rose Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rose Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Smoky Quartz" @if($urun->stone == 'Smoky Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Smoky Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Quartz" @if($urun->stone == 'Green Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Quartz</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Iolite" @if($urun->stone == 'Iolite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lolite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Iolite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Fire Opal" @if($urun->stone == 'Fire Opal') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Fire Opal</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="London Blue Topaz" @if($urun->stone == 'London Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">London Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Moissanite" @if($urun->stone == 'Moissanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/moissanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Moissanite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Grown Diamond" @if($urun->stone == 'Lab Grown Diamond') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Emerald" @if($urun->stone == 'Lab Created Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Ruby" @if($urun->stone == 'Lab Created Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Sapphire" @if($urun->stone == 'Lab Created Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Morganite" @if($urun->stone == 'Morganite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/morganite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Morganite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Alexandrite" @if($urun->stone == 'Lab Alexandrite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Alexandrite</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>




                                                </div>
                                            </div>
                                            -->
                                            </li>
                                    @endif
                                    <!--Ring Layer 1 Ends--->

                                        <!--Ring Layer 2--->
                                        @if($urun->stone_dia1 == '-')

                                        @else
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Accent Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone_dia1}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola2" class="gem-2"></span>
                                                        <span class="bx bx-chevron-down gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 2
                                                <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                    <div class="card-body">
                                                        <div class="clearfix"></div>

                                                        <div class="swatches">

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="diamond" @if($urun->stone_dia1 == 'diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Diamond</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="ruby" @if($urun->stone_dia1 == 'ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Sapphire" @if($urun->stone_dia1 == 'Blue Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Emerald" @if($urun->stone_dia1 == 'Emerald') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Emerald</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Amethyst" @if($urun->stone_dia1 == 'Amethyst') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/amethyst.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Amethyst</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Aquamarine" @if($urun->stone_dia1 == 'Aquamarine') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Aquamarine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Citrine" @if($urun->stone_dia1 == 'Citrine') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/citrine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Citrine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Red Garnet" @if($urun->stone_dia1 == 'Red Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Red Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rhodolite Garnet" @if($urun->stone_dia1 == 'Rhodolite Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/gem-9.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Tourmaline" @if($urun->stone_dia1 == 'Pink Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Tourmaline</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Black Onyx" @if($urun->stone_dia1 == 'Black Onyx') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Black Onyx</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Peridot" @if($urun->stone_dia1 == 'Peridot') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/peridot.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Peridot</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Sapphire" @if($urun->stone_dia1 == 'Pink Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Yellow Sapphire" @if($urun->stone_dia1 == 'Yellow Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Yellow Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Tanzanite" @if($urun->stone_dia1 == 'Tanzanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Tanzanite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">
                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Topaz" @if($urun->stone_dia1 == 'Blue Topaz') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Green Tourmaline" @if($urun->stone_dia1 == 'Green Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Green Tourmaline</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rose Quartz" @if($urun->stone_dia1 == 'Rose Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rose Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Smoky Quartz" @if($urun->stone_dia1 == 'Smoky Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Smoky Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Iolite" @if($urun->stone_dia1 == 'Iolite') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lolite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Iolite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">




                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Fire Opal" @if($urun->stone_dia1 == 'Fire Opal') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Fire Opal</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="London Blue Topaz" @if($urun->stone_dia1 == 'London Blue Topaz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">London Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Moissanite" @if($urun->stone_dia1 == 'Moissanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/moissanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Moissanite</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Grown Diamond" @if($urun->stone_dia1 == 'Lab Grown Diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Emerald" @if($urun->stone_dia1 == 'Lab Created Emerald') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">



                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Ruby" @if($urun->stone_dia1 == 'Lab Created Ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Sapphire" @if($urun->stone_dia1 == 'Lab Created Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Alexandrite" @if($urun->stone_dia1 == 'Lab Alexandrite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Alexandrite</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </div>






                                                    </div>
                                                </div>
                                                --->
                                            </li>
                                            <!--Ring Layer 2 Ends-->
                                    @endif
                                    <!--Ring Layer 3---->
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" >


                                                <div class="col-lg-8 col-8 product-info">

                                                    <div class="layer-type">Primary Metal</div>
                                                    <div class="layer-desc" >{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                                </div>

                                                <div class="col-lg-4 col-4 swatch-box ">
                                                    <span style="background-image: url(/frontend/assets/img/metals/{{$urun->main_metal_k }}{{$urun->metal_color.'.png'}});" class="gem-3"></span>
                                                    <span class="bx bx-chevron-down gemchevron"></span>
                                                </div>


                                            </div>
                                            <!--Ring Layer 3 Ends
                                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Platinum"  >
                                                                    <img src="/frontend/assets/img/metals/platinum.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Platinum</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Palladium">
                                                                    <img src="/frontend/assets/img/metals/palladium.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Palladium</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Silver">
                                                                    <img src="/frontend/assets/img/metals/silver.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Silver</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K White Gold</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K White Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K White Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>



                                                        <div class="gems-5-row row">



                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/14kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/10kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Yellow Gold</span>
                                                                </label>
                                                            </div>




                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Rose Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                    <div class="option-sub-description-title">Free engraving available in Cart</div>
                                                    <div class="option-info stone">

                                                        <span class="short-title">18K Yellow Gold</span>
                                                        <div class="short-body">A premium gold hypoallergenic alloy, 18-karat yellow gold is 75% pure gold, with a rich buttery golden color.</div>
                                                    </div>



                                                </div>
                                            </div>
                                            -->
                                        </li>
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" id="headingOne" >

                                                <div class="col-lg-6 col-8 product-info">

                                                    <div class="layer-type">Perlantz Logo </div>
                                                    <div class="layer-desc" >Inside</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">
                                                        <div class="card">

                                                            <div class="designbutton">
                                                                <input type="checkbox" checked="checked" name="perlog" value="yes" class="flipswitch" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                        <!--Ring Layer 3 Ends-->

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- Orta Slider Starts --->
                        <div class="col-lg-5 two">
                            <div class="main-product-slider text-center">
                                <div class="product-header-mobile">
                                    <h6 class="product-heading">Create Your</h6>
                                    <h4 class="product-name">{{$urun->urun_adi}}</h4>
                                </div>
                                <div class="main-product-slider text-center">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img  src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div style="" class="pro-large-img img-zoom">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div class="pro-nav-thumb">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/assets/img/360-logo.png" alt="product-details" />
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--- Orta Slider---->

                        <div  class="col-lg-2 three ">


                            @if($urun->shape == '-')

                            @else
                                <div style="margin-top: 8px;" class="cut-info" class="hidden-xs">{{$urun->shape}} Cut</div>
                            @endif
                            @if($urun->stone == '-')

                            @else
                                <div style="margin-top: 8px;" class="primary-stone-info">Stone Type: {{$urun->stone}}</div>
                            @endif
                            @if($urun->seo_description == '-')

                            @else
                                <div style="margin-top: 8px;" class="material-description">
                                    {{$urun->seo_description}}
                                </div>
                            @endif
                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="all-prices-container">
                                    <span class="product-price">Price: € {{$urun->fiyat_eur}}</span>
                                </div>
                            @endif

                            @if($urun->est_delivery == '-')

                            @else
                                <div style="margin-top: 8px;" class="learn-more-link">
                                    <span>Estimated Delivery:{{$urun->est_delivery}}</span>
                                </div>
                            @endif

                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="add-to-cart text-center">

                                    @csrf

                                    <input type="hidden" name="id" value="{{$urun->id}}">

                                    <input style=" justify-content: center;" type="submit" class="btn btn-sqr " value="Add To Card">




                                </div>
                            @endif





                        </div>
                        <div class="col-lg-1">
                        </div>
            </section>
        </form>







        <section  class="about-us section-padding pb-0">
            <div class="container">
                <div  class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="about-content text-center">
                            <div class="taki-sag-yazi">ABOUT YOUR</div>
                            <div class="taki-sag-yazi-urun-isim">{{$urun->urun_adi}}</div>
                            <div class="taki-sag-yazi-urun-yazi">
                                {{$urun->about_urun_yazi}}
                            </div>
                            <div style="margin-top: 45px;" class="row">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <th class="table-yazi-baslik">
                                                <div class="br"></div>
                                                General
                                            </th>
                                            <td>
                                                <div class="table-yazi-info1"><b>Color / Metal</b></div>
                                                <div class="table-yazi-info1">{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                            </td>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="table-yazi-info1"><b>Average Weight</b></div>
                                                <div class="table-yazi-info1">
                                                    @if($urun->eightk_weight != '-')
                                                        {{$urun->eightk_weight}}
                                                    @endif
                                                    @if($urun->ninek_weight != '-')
                                                        {{$urun->ninek_weight}}
                                                    @endif
                                                    @if($urun->forteenk_weight != '-')
                                                        {{$urun->forteenk_weight}}
                                                    @endif
                                                    @if($urun->eighteenk_weight != '-')
                                                        {{$urun->eighteenk_weight}}
                                                    @endif
                                                    @if($urun->twentyfivek_weight != '-')
                                                        {{$urun->twentyfivek_weight}}
                                                    @endif
                                                    @if($urun->ninefiveplt_weight != '-')
                                                        {{$urun->ninefiveplt_weight}}
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-yazi-baslik"> <div class="br"></div>Center Stone</th>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            @if($urun->stone_dia1 == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Stone dia1</b></div>
                                                    <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                </td>
                                            @endif
                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Carat</b></div>
                                                    <div class="table-yazi-info1">{{$urun->total_crt}}</div>
                                                </td>
                                            @endif

                                            @if($urun->color == '-' and $urun->clarity == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Color / Clarity</b></div>
                                                    <div class="table-yazi-info1">{{$urun->color}} /  {{$urun->clarity}}</div>
                                                </td>
                                            @endif

                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Size</b></div>
                                                    <div class="table-yazi-info1">{{$urun->mm}}mm</div>
                                                </td>
                                            @endif

                                            @if($urun->certificate == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Certificate</b></div>
                                                    <div class="table-yazi-info1">{{$urun->certificate}}</div>
                                                </td>
                                            @endif


                                        </tr>
                                        @if($urun->stone_dia1 == '-')
                                        @else
                                            <tr>
                                                <th class="table-yazi-baslik"> <div class="br"></div>Accent Stone</th>
                                                @if($urun->stone_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Stone</b></div>
                                                        <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->cert_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Certificate</b></div>
                                                        <div class="table-yazi-info1">{{$urun->cert_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->color_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Color</b></div>
                                                        <div class="table-yazi-info1">{{$urun->color_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->clarity_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Clarity</b></div>
                                                        <div class="table-yazi-info1">{{$urun->clarity_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->shape_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Shape</b></div>
                                                        <div class="table-yazi-info1">{{$urun->shape_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->mm_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->mm_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->total_crt_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->total_crt_dia1}}</div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                                <div class="taki-sag-yazi-urun-yazi ">Stone counts and weights are based on a size 7 for women and a size 10 for men, and may vary slightly for different sizes.</div>

                                <div class="taki-sag-yazi-urun-yazi ">All items are delivered within 7-10 business days with free shipping. We offer one free resize and a craftsmanship warranty during the first year, and returns within 45 days.</div>




                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section style="margin-top: 35px; margin-bottom: -55px" class="section section-background section-height-3" data-plugin-image-background data-plugin-options="{'imageUrl': '/frontend/assets/img/diff.png'}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold text-light mb-0">EXPERT ADVICE FROM OUR Jewelry Consultants</h2>
                        <p class="font-weight-light text-light mb-0">Our Consultants are here to help every step of the way, from selecting the perfect
                            setting and stones to ensuring a seamless delivery.</p>
                        <a class="btn btn-sqr" href="{{route('contact-us')}}">SEND US A MESSAGE</a>
                        <a class="btn btn-sqr" href="tel:+1234567890">Call Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- page main wrapper end -->
    @endif

    @if($urun->defination == 'Bracelet')
        <form action="{{route('cart.ekle')}}" method="post">
            <!-- page main wrapper start -->
            <section style="margin-top: 25px;" class="inner-page">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 offset-lg-1 one">
                            <div class="product-header">
                                <h6 class="product-heading">Create Your</h6>
                                <h4 class="product-name">{{$urun->urun_adi}}</h4>
                            </div>

                            <div id="accordion">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                    @if($urun->stone == '-')

                                    @else
                                        <!--Ring Layer 1-->
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Center Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola" style="background-image: url(/frontend/assets/img/gems/{{$urun->stone.'.png'}});" class="gem-1"></span>
                                                        <span class="gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 1 Ends-
                                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">



                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Diamond" @if($urun->stone == 'Diamond') checked="checked"@endif >
                                                                    <img src="/frontend/assets/img/gems/diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name"> Diamond</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Ruby" @if($urun->stone == 'Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Sapphire" @if($urun->stone == 'Blue Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Emerald" @if($urun->stone == 'Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Amethyst" @if($urun->stone == 'Amethyst') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/amethyst.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Amethyst</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Aquamarine" @if($urun->stone == 'Aquamarine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Aquamarine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Citrine" @if($urun->stone == 'Citrine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/citrine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Citrine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Red Garnet" @if($urun->stone == 'Red Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Red Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rhodolite Garnet" @if($urun->stone == 'Rhodolite Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/gem-9.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Tourmaline" @if($urun->stone == 'Pink Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Tourmaline</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Black Onyx" @if($urun->stone == 'Black Onyx') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Black Onyx</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Peridot" @if($urun->stone == 'Peridot') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/peridot.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Peridot</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Sapphire" @if($urun->stone == 'Pink Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Yellow Sapphire" @if($urun->stone == 'Yellow Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Yellow Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Tanzanite" @if($urun->stone == 'Tanzanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Tanzanite</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Topaz" @if($urun->stone == 'Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Tourmaline" @if($urun->stone == 'Green Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Tourmaline</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rose Quartz" @if($urun->stone == 'Rose Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rose Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Smoky Quartz" @if($urun->stone == 'Smoky Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Smoky Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Quartz" @if($urun->stone == 'Green Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Quartz</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Iolite" @if($urun->stone == 'Iolite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lolite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Iolite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Fire Opal" @if($urun->stone == 'Fire Opal') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Fire Opal</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="London Blue Topaz" @if($urun->stone == 'London Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">London Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Moissanite" @if($urun->stone == 'Moissanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/moissanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Moissanite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Grown Diamond" @if($urun->stone == 'Lab Grown Diamond') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Emerald" @if($urun->stone == 'Lab Created Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Ruby" @if($urun->stone == 'Lab Created Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Sapphire" @if($urun->stone == 'Lab Created Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Morganite" @if($urun->stone == 'Morganite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/morganite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Morganite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Alexandrite" @if($urun->stone == 'Lab Alexandrite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Alexandrite</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>




                                                </div>
                                            </div>
                                            -->
                                            </li>
                                    @endif
                                    <!--Ring Layer 1 Ends--->

                                        <!--Ring Layer 2--->
                                        @if($urun->stone_dia1 == '-')

                                        @else
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Accent Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone_dia1}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola2" class="gem-2"></span>
                                                        <span class="bx bx-chevron-down gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 2
                                                <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                    <div class="card-body">
                                                        <div class="clearfix"></div>

                                                        <div class="swatches">

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="diamond" @if($urun->stone_dia1 == 'diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Diamond</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="ruby" @if($urun->stone_dia1 == 'ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Sapphire" @if($urun->stone_dia1 == 'Blue Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Emerald" @if($urun->stone_dia1 == 'Emerald') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Emerald</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Amethyst" @if($urun->stone_dia1 == 'Amethyst') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/amethyst.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Amethyst</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Aquamarine" @if($urun->stone_dia1 == 'Aquamarine') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Aquamarine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Citrine" @if($urun->stone_dia1 == 'Citrine') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/citrine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Citrine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Red Garnet" @if($urun->stone_dia1 == 'Red Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Red Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rhodolite Garnet" @if($urun->stone_dia1 == 'Rhodolite Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/gem-9.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Tourmaline" @if($urun->stone_dia1 == 'Pink Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Tourmaline</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Black Onyx" @if($urun->stone_dia1 == 'Black Onyx') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Black Onyx</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Peridot" @if($urun->stone_dia1 == 'Peridot') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/peridot.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Peridot</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Sapphire" @if($urun->stone_dia1 == 'Pink Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Yellow Sapphire" @if($urun->stone_dia1 == 'Yellow Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Yellow Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Tanzanite" @if($urun->stone_dia1 == 'Tanzanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Tanzanite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">
                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Topaz" @if($urun->stone_dia1 == 'Blue Topaz') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Green Tourmaline" @if($urun->stone_dia1 == 'Green Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Green Tourmaline</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rose Quartz" @if($urun->stone_dia1 == 'Rose Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rose Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Smoky Quartz" @if($urun->stone_dia1 == 'Smoky Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Smoky Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Iolite" @if($urun->stone_dia1 == 'Iolite') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lolite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Iolite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">




                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Fire Opal" @if($urun->stone_dia1 == 'Fire Opal') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Fire Opal</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="London Blue Topaz" @if($urun->stone_dia1 == 'London Blue Topaz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">London Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Moissanite" @if($urun->stone_dia1 == 'Moissanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/moissanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Moissanite</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Grown Diamond" @if($urun->stone_dia1 == 'Lab Grown Diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Emerald" @if($urun->stone_dia1 == 'Lab Created Emerald') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">



                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Ruby" @if($urun->stone_dia1 == 'Lab Created Ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Sapphire" @if($urun->stone_dia1 == 'Lab Created Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Alexandrite" @if($urun->stone_dia1 == 'Lab Alexandrite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Alexandrite</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </div>






                                                    </div>
                                                </div>
                                                --->
                                            </li>
                                            <!--Ring Layer 2 Ends-->
                                    @endif
                                    <!--Ring Layer 3---->
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" >


                                                <div class="col-lg-8 col-8 product-info">

                                                    <div class="layer-type">Primary Metal</div>
                                                    <div class="layer-desc" >{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                                </div>

                                                <div class="col-lg-4 col-4 swatch-box ">
                                                    <span style="background-image: url(/frontend/assets/img/metals/{{$urun->main_metal_k }}{{$urun->metal_color.'.png'}});" class="gem-3"></span>
                                                    <span class="bx bx-chevron-down gemchevron"></span>
                                                </div>


                                            </div>
                                            <!--Ring Layer 3 Ends
                                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Platinum"  >
                                                                    <img src="/frontend/assets/img/metals/platinum.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Platinum</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Palladium">
                                                                    <img src="/frontend/assets/img/metals/palladium.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Palladium</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Silver">
                                                                    <img src="/frontend/assets/img/metals/silver.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Silver</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K White Gold</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K White Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K White Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>



                                                        <div class="gems-5-row row">



                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/14kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/10kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Yellow Gold</span>
                                                                </label>
                                                            </div>




                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Rose Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                    <div class="option-sub-description-title">Free engraving available in Cart</div>
                                                    <div class="option-info stone">

                                                        <span class="short-title">18K Yellow Gold</span>
                                                        <div class="short-body">A premium gold hypoallergenic alloy, 18-karat yellow gold is 75% pure gold, with a rich buttery golden color.</div>
                                                    </div>



                                                </div>
                                            </div>
                                            -->
                                        </li>
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" id="headingOne" >

                                                <div class="col-lg-6 col-8 product-info">

                                                    <div class="layer-type">Perlantz Logo </div>
                                                    <div class="layer-desc" >Inside</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">
                                                        <div class="card">

                                                            <div class="designbutton">
                                                                <input type="checkbox" checked="checked" name="perlog" value="yes" class="flipswitch" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                        <!--Ring Layer 3 Ends-->

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- Orta Slider Starts --->
                        <div class="col-lg-5 two">
                            <div class="main-product-slider text-center">
                                <div class="product-header-mobile">
                                    <h6 class="product-heading">Create Your</h6>
                                    <h4 class="product-name">{{$urun->urun_adi}}</h4>
                                </div>
                                <div class="main-product-slider text-center">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img  src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div style="" class="pro-large-img img-zoom">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div class="pro-nav-thumb">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/assets/img/360-logo.png" alt="product-details" />
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--- Orta Slider---->

                        <div  class="col-lg-2 three ">


                            @if($urun->shape == '-')

                            @else
                                <div style="margin-top: 8px;" class="cut-info" class="hidden-xs">{{$urun->shape}} Cut</div>
                            @endif
                            @if($urun->stone == '-')

                            @else
                                <div style="margin-top: 8px;" class="primary-stone-info">Stone Type: {{$urun->stone}}</div>
                            @endif
                            @if($urun->seo_description == '-')

                            @else
                                <div style="margin-top: 8px;" class="material-description">
                                    {{$urun->seo_description}}
                                </div>
                            @endif
                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="all-prices-container">
                                    <span class="product-price">Price: € {{$urun->fiyat_eur}}</span>
                                </div>
                            @endif

                            @if($urun->est_delivery == '-')

                            @else
                                <div style="margin-top: 8px;" class="learn-more-link">
                                    <span>Estimated Delivery:{{$urun->est_delivery}}</span>
                                </div>
                            @endif

                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="add-to-cart text-center">

                                    @csrf

                                    <input type="hidden" name="id" value="{{$urun->id}}">

                                    <input style=" justify-content: center;" type="submit" class="btn btn-sqr " value="Add To Card">




                                </div>
                            @endif





                        </div>
                        <div class="col-lg-1">
                        </div>
            </section>
        </form>







        <section  class="about-us section-padding pb-0">
            <div class="container">
                <div  class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="about-content text-center">
                            <div class="taki-sag-yazi">ABOUT YOUR</div>
                            <div class="taki-sag-yazi-urun-isim">{{$urun->urun_adi}}</div>
                            <div class="taki-sag-yazi-urun-yazi">
                                {{$urun->about_urun_yazi}}
                            </div>
                            <div style="margin-top: 45px;" class="row">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <th class="table-yazi-baslik">
                                                <div class="br"></div>
                                                General
                                            </th>
                                            <td>
                                                <div class="table-yazi-info1"><b>Color / Metal</b></div>
                                                <div class="table-yazi-info1">{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                            </td>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="table-yazi-info1"><b>Average Weight</b></div>
                                                <div class="table-yazi-info1">
                                                    @if($urun->eightk_weight != '-')
                                                        {{$urun->eightk_weight}}
                                                    @endif
                                                    @if($urun->ninek_weight != '-')
                                                        {{$urun->ninek_weight}}
                                                    @endif
                                                    @if($urun->forteenk_weight != '-')
                                                        {{$urun->forteenk_weight}}
                                                    @endif
                                                    @if($urun->eighteenk_weight != '-')
                                                        {{$urun->eighteenk_weight}}
                                                    @endif
                                                    @if($urun->twentyfivek_weight != '-')
                                                        {{$urun->twentyfivek_weight}}
                                                    @endif
                                                    @if($urun->ninefiveplt_weight != '-')
                                                        {{$urun->ninefiveplt_weight}}
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-yazi-baslik"> <div class="br"></div>Center Stone</th>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            @if($urun->stone_dia1 == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Stone dia1</b></div>
                                                    <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                </td>
                                            @endif
                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Carat</b></div>
                                                    <div class="table-yazi-info1">{{$urun->total_crt}}</div>
                                                </td>
                                            @endif

                                            @if($urun->color == '-' and $urun->clarity == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Color / Clarity</b></div>
                                                    <div class="table-yazi-info1">{{$urun->color}} /  {{$urun->clarity}}</div>
                                                </td>
                                            @endif

                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Size</b></div>
                                                    <div class="table-yazi-info1">{{$urun->mm}}mm</div>
                                                </td>
                                            @endif

                                            @if($urun->certificate == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Certificate</b></div>
                                                    <div class="table-yazi-info1">{{$urun->certificate}}</div>
                                                </td>
                                            @endif


                                        </tr>
                                        @if($urun->stone_dia1 == '-')
                                        @else
                                            <tr>
                                                <th class="table-yazi-baslik"> <div class="br"></div>Accent Stone</th>
                                                @if($urun->stone_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Stone</b></div>
                                                        <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->cert_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Certificate</b></div>
                                                        <div class="table-yazi-info1">{{$urun->cert_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->color_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Color</b></div>
                                                        <div class="table-yazi-info1">{{$urun->color_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->clarity_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Clarity</b></div>
                                                        <div class="table-yazi-info1">{{$urun->clarity_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->shape_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Shape</b></div>
                                                        <div class="table-yazi-info1">{{$urun->shape_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->mm_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->mm_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->total_crt_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->total_crt_dia1}}</div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                                <div class="taki-sag-yazi-urun-yazi ">Stone counts and weights are based on a size 7 for women and a size 10 for men, and may vary slightly for different sizes.</div>

                                <div class="taki-sag-yazi-urun-yazi ">All items are delivered within 7-10 business days with free shipping. We offer one free resize and a craftsmanship warranty during the first year, and returns within 45 days.</div>




                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section style="margin-top: 35px; margin-bottom: -55px" class="section section-background section-height-3" data-plugin-image-background data-plugin-options="{'imageUrl': '/frontend/assets/img/diff.png'}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold text-light mb-0">EXPERT ADVICE FROM OUR Jewelry Consultants</h2>
                        <p class="font-weight-light text-light mb-0">Our Consultants are here to help every step of the way, from selecting the perfect
                            setting and stones to ensuring a seamless delivery.</p>
                        <a class="btn btn-sqr" href="{{route('contact-us')}}">SEND US A MESSAGE</a>
                        <a class="btn btn-sqr" href="tel:+1234567890">Call Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- page main wrapper end -->
    @endif

    @if($urun->defination == 'Pendant')
        <form action="{{route('cart.ekle')}}" method="post">
            <!-- page main wrapper start -->
            <section style="margin-top: 25px;" class="inner-page">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 offset-lg-1 one">
                            <div class="product-header">
                                <h6 class="product-heading">Create Your</h6>
                                <h4 class="product-name">{{$urun->urun_adi}}</h4>
                            </div>

                            <div id="accordion">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                    @if($urun->stone == '-')

                                    @else
                                        <!--Ring Layer 1-->
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Center Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola" style="background-image: url(/frontend/assets/img/gems/{{$urun->stone.'.png'}});" class="gem-1"></span>
                                                        <span class="gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 1 Ends-
                                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">



                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Diamond" @if($urun->stone == 'Diamond') checked="checked"@endif >
                                                                    <img src="/frontend/assets/img/gems/diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name"> Diamond</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Ruby" @if($urun->stone == 'Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Sapphire" @if($urun->stone == 'Blue Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Emerald" @if($urun->stone == 'Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Amethyst" @if($urun->stone == 'Amethyst') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/amethyst.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Amethyst</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Aquamarine" @if($urun->stone == 'Aquamarine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Aquamarine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Citrine" @if($urun->stone == 'Citrine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/citrine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Citrine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Red Garnet" @if($urun->stone == 'Red Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Red Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rhodolite Garnet" @if($urun->stone == 'Rhodolite Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/gem-9.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Tourmaline" @if($urun->stone == 'Pink Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Tourmaline</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Black Onyx" @if($urun->stone == 'Black Onyx') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Black Onyx</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Peridot" @if($urun->stone == 'Peridot') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/peridot.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Peridot</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Sapphire" @if($urun->stone == 'Pink Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Yellow Sapphire" @if($urun->stone == 'Yellow Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Yellow Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Tanzanite" @if($urun->stone == 'Tanzanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Tanzanite</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Topaz" @if($urun->stone == 'Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Tourmaline" @if($urun->stone == 'Green Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Tourmaline</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rose Quartz" @if($urun->stone == 'Rose Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rose Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Smoky Quartz" @if($urun->stone == 'Smoky Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Smoky Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Quartz" @if($urun->stone == 'Green Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Quartz</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Iolite" @if($urun->stone == 'Iolite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lolite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Iolite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Fire Opal" @if($urun->stone == 'Fire Opal') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Fire Opal</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="London Blue Topaz" @if($urun->stone == 'London Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">London Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Moissanite" @if($urun->stone == 'Moissanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/moissanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Moissanite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Grown Diamond" @if($urun->stone == 'Lab Grown Diamond') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Emerald" @if($urun->stone == 'Lab Created Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Ruby" @if($urun->stone == 'Lab Created Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Sapphire" @if($urun->stone == 'Lab Created Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Morganite" @if($urun->stone == 'Morganite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/morganite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Morganite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Alexandrite" @if($urun->stone == 'Lab Alexandrite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Alexandrite</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>




                                                </div>
                                            </div>
                                            -->
                                            </li>
                                    @endif
                                    <!--Ring Layer 1 Ends--->

                                        <!--Ring Layer 2--->
                                        @if($urun->stone_dia1 == '-')

                                        @else
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Accent Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone_dia1}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola2" class="gem-2"></span>
                                                        <span class="bx bx-chevron-down gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 2
                                                <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                    <div class="card-body">
                                                        <div class="clearfix"></div>

                                                        <div class="swatches">

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="diamond" @if($urun->stone_dia1 == 'diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Diamond</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="ruby" @if($urun->stone_dia1 == 'ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Sapphire" @if($urun->stone_dia1 == 'Blue Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Emerald" @if($urun->stone_dia1 == 'Emerald') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Emerald</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Amethyst" @if($urun->stone_dia1 == 'Amethyst') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/amethyst.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Amethyst</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Aquamarine" @if($urun->stone_dia1 == 'Aquamarine') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Aquamarine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Citrine" @if($urun->stone_dia1 == 'Citrine') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/citrine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Citrine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Red Garnet" @if($urun->stone_dia1 == 'Red Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Red Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rhodolite Garnet" @if($urun->stone_dia1 == 'Rhodolite Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/gem-9.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Tourmaline" @if($urun->stone_dia1 == 'Pink Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Tourmaline</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Black Onyx" @if($urun->stone_dia1 == 'Black Onyx') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Black Onyx</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Peridot" @if($urun->stone_dia1 == 'Peridot') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/peridot.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Peridot</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Sapphire" @if($urun->stone_dia1 == 'Pink Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Yellow Sapphire" @if($urun->stone_dia1 == 'Yellow Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Yellow Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Tanzanite" @if($urun->stone_dia1 == 'Tanzanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Tanzanite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">
                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Topaz" @if($urun->stone_dia1 == 'Blue Topaz') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Green Tourmaline" @if($urun->stone_dia1 == 'Green Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Green Tourmaline</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rose Quartz" @if($urun->stone_dia1 == 'Rose Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rose Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Smoky Quartz" @if($urun->stone_dia1 == 'Smoky Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Smoky Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Iolite" @if($urun->stone_dia1 == 'Iolite') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lolite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Iolite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">




                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Fire Opal" @if($urun->stone_dia1 == 'Fire Opal') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Fire Opal</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="London Blue Topaz" @if($urun->stone_dia1 == 'London Blue Topaz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">London Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Moissanite" @if($urun->stone_dia1 == 'Moissanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/moissanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Moissanite</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Grown Diamond" @if($urun->stone_dia1 == 'Lab Grown Diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Emerald" @if($urun->stone_dia1 == 'Lab Created Emerald') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">



                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Ruby" @if($urun->stone_dia1 == 'Lab Created Ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Sapphire" @if($urun->stone_dia1 == 'Lab Created Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Alexandrite" @if($urun->stone_dia1 == 'Lab Alexandrite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Alexandrite</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </div>






                                                    </div>
                                                </div>
                                                --->
                                            </li>
                                            <!--Ring Layer 2 Ends-->
                                    @endif
                                    <!--Ring Layer 3---->
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" >


                                                <div class="col-lg-8 col-8 product-info">

                                                    <div class="layer-type">Primary Metal</div>
                                                    <div class="layer-desc" >{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                                </div>

                                                <div class="col-lg-4 col-4 swatch-box ">
                                                    <span style="background-image: url(/frontend/assets/img/metals/{{$urun->main_metal_k }}{{$urun->metal_color.'.png'}});" class="gem-3"></span>
                                                    <span class="bx bx-chevron-down gemchevron"></span>
                                                </div>


                                            </div>
                                            <!--Ring Layer 3 Ends
                                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Platinum"  >
                                                                    <img src="/frontend/assets/img/metals/platinum.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Platinum</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Palladium">
                                                                    <img src="/frontend/assets/img/metals/palladium.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Palladium</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Silver">
                                                                    <img src="/frontend/assets/img/metals/silver.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Silver</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K White Gold</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K White Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K White Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>



                                                        <div class="gems-5-row row">



                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/14kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/10kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Yellow Gold</span>
                                                                </label>
                                                            </div>




                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Rose Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                    <div class="option-sub-description-title">Free engraving available in Cart</div>
                                                    <div class="option-info stone">

                                                        <span class="short-title">18K Yellow Gold</span>
                                                        <div class="short-body">A premium gold hypoallergenic alloy, 18-karat yellow gold is 75% pure gold, with a rich buttery golden color.</div>
                                                    </div>



                                                </div>
                                            </div>
                                            -->
                                        </li>
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" id="headingOne" >

                                                <div class="col-lg-6 col-8 product-info">

                                                    <div class="layer-type">Perlantz Logo </div>
                                                    <div class="layer-desc" >Inside</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">
                                                        <div class="card">

                                                            <div class="designbutton">
                                                                <input type="checkbox" checked="checked" name="perlog" value="yes" class="flipswitch" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                        <!--Ring Layer 3 Ends-->

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- Orta Slider Starts --->
                        <div class="col-lg-5 two">
                            <div class="main-product-slider text-center">
                                <div class="product-header-mobile">
                                    <h6 class="product-heading">Create Your</h6>
                                    <h4 class="product-name">{{$urun->urun_adi}}</h4>
                                </div>
                                <div class="main-product-slider text-center">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img  src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div style="" class="pro-large-img img-zoom">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div class="pro-nav-thumb">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/assets/img/360-logo.png" alt="product-details" />
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--- Orta Slider---->

                        <div  class="col-lg-2 three ">


                            @if($urun->shape == '-')

                            @else
                                <div style="margin-top: 8px;" class="cut-info" class="hidden-xs">{{$urun->shape}} Cut</div>
                            @endif
                            @if($urun->stone == '-')

                            @else
                                <div style="margin-top: 8px;" class="primary-stone-info">Stone Type: {{$urun->stone}}</div>
                            @endif
                            @if($urun->seo_description == '-')

                            @else
                                <div style="margin-top: 8px;" class="material-description">
                                    {{$urun->seo_description}}
                                </div>
                            @endif
                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="all-prices-container">
                                    <span class="product-price">Price: € {{$urun->fiyat_eur}}</span>
                                </div>
                            @endif

                            @if($urun->est_delivery == '-')

                            @else
                                <div style="margin-top: 8px;" class="learn-more-link">
                                    <span>Estimated Delivery:{{$urun->est_delivery}}</span>
                                </div>
                            @endif

                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="add-to-cart text-center">

                                    @csrf

                                    <input type="hidden" name="id" value="{{$urun->id}}">

                                    <input style=" justify-content: center;" type="submit" class="btn btn-sqr " value="Add To Card">




                                </div>
                            @endif





                        </div>
                        <div class="col-lg-1">
                        </div>
            </section>
        </form>







        <section  class="about-us section-padding pb-0">
            <div class="container">
                <div  class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="about-content text-center">
                            <div class="taki-sag-yazi">ABOUT YOUR</div>
                            <div class="taki-sag-yazi-urun-isim">{{$urun->urun_adi}}</div>
                            <div class="taki-sag-yazi-urun-yazi">
                                {{$urun->about_urun_yazi}}
                            </div>
                            <div style="margin-top: 45px;" class="row">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <th class="table-yazi-baslik">
                                                <div class="br"></div>
                                                General
                                            </th>
                                            <td>
                                                <div class="table-yazi-info1"><b>Color / Metal</b></div>
                                                <div class="table-yazi-info1">{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                            </td>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="table-yazi-info1"><b>Average Weight</b></div>
                                                <div class="table-yazi-info1">
                                                    @if($urun->eightk_weight != '-')
                                                        {{$urun->eightk_weight}}
                                                    @endif
                                                    @if($urun->ninek_weight != '-')
                                                        {{$urun->ninek_weight}}
                                                    @endif
                                                    @if($urun->forteenk_weight != '-')
                                                        {{$urun->forteenk_weight}}
                                                    @endif
                                                    @if($urun->eighteenk_weight != '-')
                                                        {{$urun->eighteenk_weight}}
                                                    @endif
                                                    @if($urun->twentyfivek_weight != '-')
                                                        {{$urun->twentyfivek_weight}}
                                                    @endif
                                                    @if($urun->ninefiveplt_weight != '-')
                                                        {{$urun->ninefiveplt_weight}}
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-yazi-baslik"> <div class="br"></div>Center Stone</th>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            @if($urun->stone_dia1 == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Stone dia1</b></div>
                                                    <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                </td>
                                            @endif
                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Carat</b></div>
                                                    <div class="table-yazi-info1">{{$urun->total_crt}}</div>
                                                </td>
                                            @endif

                                            @if($urun->color == '-' and $urun->clarity == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Color / Clarity</b></div>
                                                    <div class="table-yazi-info1">{{$urun->color}} /  {{$urun->clarity}}</div>
                                                </td>
                                            @endif

                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Size</b></div>
                                                    <div class="table-yazi-info1">{{$urun->mm}}mm</div>
                                                </td>
                                            @endif

                                            @if($urun->certificate == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Certificate</b></div>
                                                    <div class="table-yazi-info1">{{$urun->certificate}}</div>
                                                </td>
                                            @endif


                                        </tr>
                                        @if($urun->stone_dia1 == '-')
                                        @else
                                            <tr>
                                                <th class="table-yazi-baslik"> <div class="br"></div>Accent Stone</th>
                                                @if($urun->stone_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Stone</b></div>
                                                        <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->cert_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Certificate</b></div>
                                                        <div class="table-yazi-info1">{{$urun->cert_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->color_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Color</b></div>
                                                        <div class="table-yazi-info1">{{$urun->color_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->clarity_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Clarity</b></div>
                                                        <div class="table-yazi-info1">{{$urun->clarity_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->shape_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Shape</b></div>
                                                        <div class="table-yazi-info1">{{$urun->shape_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->mm_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->mm_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->total_crt_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->total_crt_dia1}}</div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                                <div class="taki-sag-yazi-urun-yazi ">Stone counts and weights are based on a size 7 for women and a size 10 for men, and may vary slightly for different sizes.</div>

                                <div class="taki-sag-yazi-urun-yazi ">All items are delivered within 7-10 business days with free shipping. We offer one free resize and a craftsmanship warranty during the first year, and returns within 45 days.</div>




                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section style="margin-top: 35px; margin-bottom: -55px" class="section section-background section-height-3" data-plugin-image-background data-plugin-options="{'imageUrl': '/frontend/assets/img/diff.png'}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold text-light mb-0">EXPERT ADVICE FROM OUR Jewelry Consultants</h2>
                        <p class="font-weight-light text-light mb-0">Our Consultants are here to help every step of the way, from selecting the perfect
                            setting and stones to ensuring a seamless delivery.</p>
                        <a class="btn btn-sqr" href="{{route('contact-us')}}">SEND US A MESSAGE</a>
                        <a class="btn btn-sqr" href="tel:+1234567890">Call Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- page main wrapper end -->
    @endif

    @if($urun->defination == 'Chain')
        <form action="{{route('cart.ekle')}}" method="post">
            <!-- page main wrapper start -->
            <section style="margin-top: 25px;" class="inner-page">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 offset-lg-1 one">
                            <div class="product-header">
                                <h6 class="product-heading">Create Your</h6>
                                <h4 class="product-name">{{$urun->urun_adi}}</h4>
                            </div>

                            <div id="accordion">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                    @if($urun->stone == '-')

                                    @else
                                        <!--Ring Layer 1-->
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Center Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola" style="background-image: url(/frontend/assets/img/gems/{{$urun->stone.'.png'}});" class="gem-1"></span>
                                                        <span class="gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 1 Ends-
                                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">



                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Diamond" @if($urun->stone == 'Diamond') checked="checked"@endif >
                                                                    <img src="/frontend/assets/img/gems/diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name"> Diamond</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Ruby" @if($urun->stone == 'Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Sapphire" @if($urun->stone == 'Blue Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Emerald" @if($urun->stone == 'Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Amethyst" @if($urun->stone == 'Amethyst') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/amethyst.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Amethyst</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Aquamarine" @if($urun->stone == 'Aquamarine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Aquamarine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Citrine" @if($urun->stone == 'Citrine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/citrine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Citrine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Red Garnet" @if($urun->stone == 'Red Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Red Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rhodolite Garnet" @if($urun->stone == 'Rhodolite Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/gem-9.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Tourmaline" @if($urun->stone == 'Pink Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Tourmaline</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Black Onyx" @if($urun->stone == 'Black Onyx') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Black Onyx</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Peridot" @if($urun->stone == 'Peridot') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/peridot.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Peridot</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Sapphire" @if($urun->stone == 'Pink Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Yellow Sapphire" @if($urun->stone == 'Yellow Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Yellow Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Tanzanite" @if($urun->stone == 'Tanzanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Tanzanite</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Topaz" @if($urun->stone == 'Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Tourmaline" @if($urun->stone == 'Green Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Tourmaline</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rose Quartz" @if($urun->stone == 'Rose Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rose Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Smoky Quartz" @if($urun->stone == 'Smoky Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Smoky Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Quartz" @if($urun->stone == 'Green Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Quartz</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Iolite" @if($urun->stone == 'Iolite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lolite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Iolite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Fire Opal" @if($urun->stone == 'Fire Opal') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Fire Opal</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="London Blue Topaz" @if($urun->stone == 'London Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">London Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Moissanite" @if($urun->stone == 'Moissanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/moissanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Moissanite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Grown Diamond" @if($urun->stone == 'Lab Grown Diamond') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Emerald" @if($urun->stone == 'Lab Created Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Ruby" @if($urun->stone == 'Lab Created Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Sapphire" @if($urun->stone == 'Lab Created Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Morganite" @if($urun->stone == 'Morganite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/morganite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Morganite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Alexandrite" @if($urun->stone == 'Lab Alexandrite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Alexandrite</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>




                                                </div>
                                            </div>
                                            -->
                                            </li>
                                    @endif
                                    <!--Ring Layer 1 Ends--->

                                        <!--Ring Layer 2--->
                                        @if($urun->stone_dia1 == '-')

                                        @else
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Accent Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone_dia1}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola2" class="gem-2"></span>
                                                        <span class="bx bx-chevron-down gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 2
                                                <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                    <div class="card-body">
                                                        <div class="clearfix"></div>

                                                        <div class="swatches">

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="diamond" @if($urun->stone_dia1 == 'diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Diamond</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="ruby" @if($urun->stone_dia1 == 'ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Sapphire" @if($urun->stone_dia1 == 'Blue Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Emerald" @if($urun->stone_dia1 == 'Emerald') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Emerald</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Amethyst" @if($urun->stone_dia1 == 'Amethyst') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/amethyst.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Amethyst</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Aquamarine" @if($urun->stone_dia1 == 'Aquamarine') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Aquamarine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Citrine" @if($urun->stone_dia1 == 'Citrine') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/citrine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Citrine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Red Garnet" @if($urun->stone_dia1 == 'Red Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Red Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rhodolite Garnet" @if($urun->stone_dia1 == 'Rhodolite Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/gem-9.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Tourmaline" @if($urun->stone_dia1 == 'Pink Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Tourmaline</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Black Onyx" @if($urun->stone_dia1 == 'Black Onyx') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Black Onyx</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Peridot" @if($urun->stone_dia1 == 'Peridot') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/peridot.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Peridot</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Sapphire" @if($urun->stone_dia1 == 'Pink Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Yellow Sapphire" @if($urun->stone_dia1 == 'Yellow Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Yellow Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Tanzanite" @if($urun->stone_dia1 == 'Tanzanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Tanzanite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">
                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Topaz" @if($urun->stone_dia1 == 'Blue Topaz') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Green Tourmaline" @if($urun->stone_dia1 == 'Green Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Green Tourmaline</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rose Quartz" @if($urun->stone_dia1 == 'Rose Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rose Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Smoky Quartz" @if($urun->stone_dia1 == 'Smoky Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Smoky Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Iolite" @if($urun->stone_dia1 == 'Iolite') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lolite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Iolite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">




                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Fire Opal" @if($urun->stone_dia1 == 'Fire Opal') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Fire Opal</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="London Blue Topaz" @if($urun->stone_dia1 == 'London Blue Topaz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">London Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Moissanite" @if($urun->stone_dia1 == 'Moissanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/moissanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Moissanite</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Grown Diamond" @if($urun->stone_dia1 == 'Lab Grown Diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Emerald" @if($urun->stone_dia1 == 'Lab Created Emerald') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">



                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Ruby" @if($urun->stone_dia1 == 'Lab Created Ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Sapphire" @if($urun->stone_dia1 == 'Lab Created Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Alexandrite" @if($urun->stone_dia1 == 'Lab Alexandrite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Alexandrite</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </div>






                                                    </div>
                                                </div>
                                                --->
                                            </li>
                                            <!--Ring Layer 2 Ends-->
                                    @endif
                                    <!--Ring Layer 3---->
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" >


                                                <div class="col-lg-8 col-8 product-info">

                                                    <div class="layer-type">Primary Metal</div>
                                                    <div class="layer-desc" >{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                                </div>

                                                <div class="col-lg-4 col-4 swatch-box ">
                                                    <span style="background-image: url(/frontend/assets/img/metals/{{$urun->main_metal_k }}{{$urun->metal_color.'.png'}});" class="gem-3"></span>
                                                    <span class="bx bx-chevron-down gemchevron"></span>
                                                </div>


                                            </div>
                                            <!--Ring Layer 3 Ends
                                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Platinum"  >
                                                                    <img src="/frontend/assets/img/metals/platinum.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Platinum</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Palladium">
                                                                    <img src="/frontend/assets/img/metals/palladium.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Palladium</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Silver">
                                                                    <img src="/frontend/assets/img/metals/silver.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Silver</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K White Gold</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K White Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K White Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>



                                                        <div class="gems-5-row row">



                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/14kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/10kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Yellow Gold</span>
                                                                </label>
                                                            </div>




                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Rose Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                    <div class="option-sub-description-title">Free engraving available in Cart</div>
                                                    <div class="option-info stone">

                                                        <span class="short-title">18K Yellow Gold</span>
                                                        <div class="short-body">A premium gold hypoallergenic alloy, 18-karat yellow gold is 75% pure gold, with a rich buttery golden color.</div>
                                                    </div>



                                                </div>
                                            </div>
                                            -->
                                        </li>
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" id="headingOne" >

                                                <div class="col-lg-6 col-8 product-info">

                                                    <div class="layer-type">Perlantz Logo </div>
                                                    <div class="layer-desc" >Inside</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">
                                                        <div class="card">

                                                            <div class="designbutton">
                                                                <input type="checkbox" checked="checked" name="perlog" value="yes" class="flipswitch" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                        <!--Ring Layer 3 Ends-->

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- Orta Slider Starts --->
                        <div class="col-lg-5 two">
                            <div class="main-product-slider text-center">
                                <div class="product-header-mobile">
                                    <h6 class="product-heading">Create Your</h6>
                                    <h4 class="product-name">{{$urun->urun_adi}}</h4>
                                </div>
                                <div class="main-product-slider text-center">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img  src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div style="" class="pro-large-img img-zoom">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div class="pro-nav-thumb">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/assets/img/360-logo.png" alt="product-details" />
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--- Orta Slider---->

                        <div  class="col-lg-2 three ">


                            @if($urun->shape == '-')

                            @else
                                <div style="margin-top: 8px;" class="cut-info" class="hidden-xs">{{$urun->shape}} Cut</div>
                            @endif
                            @if($urun->stone == '-')

                            @else
                                <div style="margin-top: 8px;" class="primary-stone-info">Stone Type: {{$urun->stone}}</div>
                            @endif
                            @if($urun->seo_description == '-')

                            @else
                                <div style="margin-top: 8px;" class="material-description">
                                    {{$urun->seo_description}}
                                </div>
                            @endif
                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="all-prices-container">
                                    <span class="product-price">Price: € {{$urun->fiyat_eur}}</span>
                                </div>
                            @endif

                            @if($urun->est_delivery == '-')

                            @else
                                <div style="margin-top: 8px;" class="learn-more-link">
                                    <span>Estimated Delivery:{{$urun->est_delivery}}</span>
                                </div>
                            @endif

                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="add-to-cart text-center">

                                    @csrf

                                    <input type="hidden" name="id" value="{{$urun->id}}">

                                    <input style=" justify-content: center;" type="submit" class="btn btn-sqr " value="Add To Card">




                                </div>
                            @endif





                        </div>
                        <div class="col-lg-1">
                        </div>
            </section>
        </form>







        <section  class="about-us section-padding pb-0">
            <div class="container">
                <div  class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="about-content text-center">
                            <div class="taki-sag-yazi">ABOUT YOUR</div>
                            <div class="taki-sag-yazi-urun-isim">{{$urun->urun_adi}}</div>
                            <div class="taki-sag-yazi-urun-yazi">
                                {{$urun->about_urun_yazi}}
                            </div>
                            <div style="margin-top: 45px;" class="row">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <th class="table-yazi-baslik">
                                                <div class="br"></div>
                                                General
                                            </th>
                                            <td>
                                                <div class="table-yazi-info1"><b>Color / Metal</b></div>
                                                <div class="table-yazi-info1">{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                            </td>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="table-yazi-info1"><b>Average Weight</b></div>
                                                <div class="table-yazi-info1">
                                                    @if($urun->eightk_weight != '-')
                                                        {{$urun->eightk_weight}}
                                                    @endif
                                                    @if($urun->ninek_weight != '-')
                                                        {{$urun->ninek_weight}}
                                                    @endif
                                                    @if($urun->forteenk_weight != '-')
                                                        {{$urun->forteenk_weight}}
                                                    @endif
                                                    @if($urun->eighteenk_weight != '-')
                                                        {{$urun->eighteenk_weight}}
                                                    @endif
                                                    @if($urun->twentyfivek_weight != '-')
                                                        {{$urun->twentyfivek_weight}}
                                                    @endif
                                                    @if($urun->ninefiveplt_weight != '-')
                                                        {{$urun->ninefiveplt_weight}}
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-yazi-baslik"> <div class="br"></div>Center Stone</th>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            @if($urun->stone_dia1 == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Stone dia1</b></div>
                                                    <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                </td>
                                            @endif
                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Carat</b></div>
                                                    <div class="table-yazi-info1">{{$urun->total_crt}}</div>
                                                </td>
                                            @endif

                                            @if($urun->color == '-' and $urun->clarity == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Color / Clarity</b></div>
                                                    <div class="table-yazi-info1">{{$urun->color}} /  {{$urun->clarity}}</div>
                                                </td>
                                            @endif

                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Size</b></div>
                                                    <div class="table-yazi-info1">{{$urun->mm}}mm</div>
                                                </td>
                                            @endif

                                            @if($urun->certificate == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Certificate</b></div>
                                                    <div class="table-yazi-info1">{{$urun->certificate}}</div>
                                                </td>
                                            @endif


                                        </tr>
                                        @if($urun->stone_dia1 == '-')
                                        @else
                                            <tr>
                                                <th class="table-yazi-baslik"> <div class="br"></div>Accent Stone</th>
                                                @if($urun->stone_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Stone</b></div>
                                                        <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->cert_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Certificate</b></div>
                                                        <div class="table-yazi-info1">{{$urun->cert_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->color_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Color</b></div>
                                                        <div class="table-yazi-info1">{{$urun->color_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->clarity_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Clarity</b></div>
                                                        <div class="table-yazi-info1">{{$urun->clarity_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->shape_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Shape</b></div>
                                                        <div class="table-yazi-info1">{{$urun->shape_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->mm_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->mm_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->total_crt_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->total_crt_dia1}}</div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                                <div class="taki-sag-yazi-urun-yazi ">Stone counts and weights are based on a size 7 for women and a size 10 for men, and may vary slightly for different sizes.</div>

                                <div class="taki-sag-yazi-urun-yazi ">All items are delivered within 7-10 business days with free shipping. We offer one free resize and a craftsmanship warranty during the first year, and returns within 45 days.</div>




                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section style="margin-top: 35px; margin-bottom: -55px" class="section section-background section-height-3" data-plugin-image-background data-plugin-options="{'imageUrl': '/frontend/assets/img/diff.png'}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold text-light mb-0">EXPERT ADVICE FROM OUR Jewelry Consultants</h2>
                        <p class="font-weight-light text-light mb-0">Our Consultants are here to help every step of the way, from selecting the perfect
                            setting and stones to ensuring a seamless delivery.</p>
                        <a class="btn btn-sqr" href="{{route('contact-us')}}">SEND US A MESSAGE</a>
                        <a class="btn btn-sqr" href="tel:+1234567890">Call Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- page main wrapper end -->
    @endif

    @if($urun->defination == 'Necklace')
        <form action="{{route('cart.ekle')}}" method="post">
            <!-- page main wrapper start -->
            <section style="margin-top: 25px;" class="inner-page">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 offset-lg-1 one">
                            <div class="product-header">
                                <h6 class="product-heading">Create Your</h6>
                                <h4 class="product-name">{{$urun->urun_adi}}</h4>
                            </div>

                            <div id="accordion">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                    @if($urun->stone == '-')

                                    @else
                                        <!--Ring Layer 1-->
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Center Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola" style="background-image: url(/frontend/assets/img/gems/{{$urun->stone.'.png'}});" class="gem-1"></span>
                                                        <span class="gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 1 Ends-
                                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">



                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Diamond" @if($urun->stone == 'Diamond') checked="checked"@endif >
                                                                    <img src="/frontend/assets/img/gems/diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name"> Diamond</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone"  value="Ruby" @if($urun->stone == 'Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Sapphire" @if($urun->stone == 'Blue Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Emerald" @if($urun->stone == 'Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Amethyst" @if($urun->stone == 'Amethyst') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/amethyst.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Amethyst</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Aquamarine" @if($urun->stone == 'Aquamarine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Aquamarine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Citrine" @if($urun->stone == 'Citrine') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/citrine.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Citrine</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Red Garnet" @if($urun->stone == 'Red Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Red Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rhodolite Garnet" @if($urun->stone == 'Rhodolite Garnet') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/gem-9.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Tourmaline" @if($urun->stone == 'Pink Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Tourmaline</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Black Onyx" @if($urun->stone == 'Black Onyx') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Black Onyx</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Peridot" @if($urun->stone == 'Peridot') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/peridot.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Peridot</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Pink Sapphire" @if($urun->stone == 'Pink Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Pink Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Yellow Sapphire" @if($urun->stone == 'Yellow Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Yellow Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Tanzanite" @if($urun->stone == 'Tanzanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Tanzanite</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Blue Topaz" @if($urun->stone == 'Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Tourmaline" @if($urun->stone == 'Green Tourmaline') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Tourmaline</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Rose Quartz" @if($urun->stone == 'Rose Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Rose Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Smoky Quartz" @if($urun->stone == 'Smoky Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Smoky Quartz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Green Quartz" @if($urun->stone == 'Green Quartz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/green-quartz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Green Quartz</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Iolite" @if($urun->stone == 'Iolite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lolite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Iolite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Fire Opal" @if($urun->stone == 'Fire Opal') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Fire Opal</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="London Blue Topaz" @if($urun->stone == 'London Blue Topaz') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">London Blue Topaz</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Moissanite" @if($urun->stone == 'Moissanite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/moissanite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Moissanite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Grown Diamond" @if($urun->stone == 'Lab Grown Diamond') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Emerald" @if($urun->stone == 'Lab Created Emerald') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Ruby" @if($urun->stone == 'Lab Created Ruby') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Ruby</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Created Sapphire" @if($urun->stone == 'Lab Created Sapphire') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Morganite" @if($urun->stone == 'Morganite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/morganite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Morganite</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="centerstone" value="Lab Alexandrite" @if($urun->stone == 'Lab Alexandrite') checked="checked"@endif>
                                                                    <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Lab Alexandrite</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>




                                                </div>
                                            </div>
                                            -->
                                            </li>
                                    @endif
                                    <!--Ring Layer 1 Ends--->

                                        <!--Ring Layer 2--->
                                        @if($urun->stone_dia1 == '-')

                                        @else
                                            <li class="list-group-item gemlist">
                                                <div class="row layer-info-container" id="headingOne" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">


                                                    <div class="col-lg-8 col-8 product-info">

                                                        <div class="layer-type">Accent Stone</div>
                                                        <div class="layer-desc" >{{$urun->stone_dia1}}</div>
                                                    </div>

                                                    <div class="col-lg-4 col-4 swatch-box ">
                                                        <span id="fotola2" class="gem-2"></span>
                                                        <span class="bx bx-chevron-down gemchevron"></span>
                                                    </div>


                                                </div>
                                            <!--Ring Layer 2
                                                <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                    <div class="card-body">
                                                        <div class="clearfix"></div>

                                                        <div class="swatches">

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="diamond" @if($urun->stone_dia1 == 'diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Diamond</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="ruby" @if($urun->stone_dia1 == 'ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Sapphire" @if($urun->stone_dia1 == 'Blue Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/bluesapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Emerald" @if($urun->stone_dia1 == 'Emerald') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Emerald</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Amethyst" @if($urun->stone_dia1 == 'Amethyst') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/amethyst.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Amethyst</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Aquamarine" @if($urun->stone_dia1 == 'Aquamarine') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/aquamarine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Aquamarine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Citrine" @if($urun->stone_dia1 == 'Citrine') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/citrine.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Citrine</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Red Garnet" @if($urun->stone_dia1 == 'Red Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/red-garnet.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Red Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rhodolite Garnet" @if($urun->stone_dia1 == 'Rhodolite Garnet') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/gem-9.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rhodolite Garnet</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Tourmaline" @if($urun->stone_dia1 == 'Pink Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/ping-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Tourmaline</span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <div class="gems-5-row row">


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Black Onyx" @if($urun->stone_dia1 == 'Black Onyx') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/black-onyx.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Black Onyx</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Peridot" @if($urun->stone_dia1 == 'Peridot') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/peridot.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Peridot</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Pink Sapphire" @if($urun->stone_dia1 == 'Pink Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/pink-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Pink Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Yellow Sapphire" @if($urun->stone_dia1 == 'Yellow Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/yellow-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Yellow Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Tanzanite" @if($urun->stone_dia1 == 'Tanzanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/tanzanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Tanzanite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">
                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Blue Topaz" @if($urun->stone_dia1 == 'Blue Topaz') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Green Tourmaline" @if($urun->stone_dia1 == 'Green Tourmaline') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/green-tourmaline.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Green Tourmaline</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Rose Quartz" @if($urun->stone_dia1 == 'Rose Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/roze-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Rose Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Smoky Quartz" @if($urun->stone_dia1 == 'Smoky Quartz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/smoky-quartz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Smoky Quartz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Iolite" @if($urun->stone_dia1 == 'Iolite') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lolite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Iolite</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">




                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Fire Opal" @if($urun->stone_dia1 == 'Fire Opal') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/fire-opal.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Fire Opal</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="London Blue Topaz" @if($urun->stone_dia1 == 'London Blue Topaz') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/london-blue-topaz.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">London Blue Topaz</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Moissanite" @if($urun->stone_dia1 == 'Moissanite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/moissanite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Moissanite</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Grown Diamond" @if($urun->stone_dia1 == 'Lab Grown Diamond') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-grown-diamond.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Grown Diamond</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Emerald" @if($urun->stone_dia1 == 'Lab Created Emerald') checked="checked"@endif  >
                                                                        <img src="/frontend/assets/img/gems/lab-created-emerald.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">&nbsp;Lab Created Emerald</span>
                                                                    </label>
                                                                </div>

                                                            </div>


                                                            <div class="gems-5-row row">



                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Ruby" @if($urun->stone_dia1 == 'Lab Created Ruby') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-ruby.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Ruby</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Created Sapphire" @if($urun->stone_dia1 == 'Lab Created Sapphire') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-created-sapphire.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Created Sapphire</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label class="gems-inline">
                                                                        <input type="radio" name="accentstone" value="Lab Alexandrite" @if($urun->stone_dia1 == 'Lab Alexandrite') checked="checked"@endif >
                                                                        <img src="/frontend/assets/img/gems/lab-alexandrite.png">
                                                                        <br>
                                                                        <span class="gems-inline-name">Lab Alexandrite</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix"></div>
                                                        </div>






                                                    </div>
                                                </div>
                                                --->
                                            </li>
                                            <!--Ring Layer 2 Ends-->
                                    @endif
                                    <!--Ring Layer 3---->
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" >


                                                <div class="col-lg-8 col-8 product-info">

                                                    <div class="layer-type">Primary Metal</div>
                                                    <div class="layer-desc" >{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                                </div>

                                                <div class="col-lg-4 col-4 swatch-box ">
                                                    <span style="background-image: url(/frontend/assets/img/metals/{{$urun->main_metal_k }}{{$urun->metal_color.'.png'}});" class="gem-3"></span>
                                                    <span class="bx bx-chevron-down gemchevron"></span>
                                                </div>


                                            </div>
                                            <!--Ring Layer 3 Ends
                                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="swatches">


                                                        <div class="gems-5-row row">
                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Platinum"  >
                                                                    <img src="/frontend/assets/img/metals/platinum.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Platinum</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Palladium">
                                                                    <img src="/frontend/assets/img/metals/palladium.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Palladium</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="primarymetal" value="Silver">
                                                                    <img src="/frontend/assets/img/metals/silver.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">Silver</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="gems-5-row row">

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K White Gold</span>
                                                                </label>
                                                            </div>


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K White Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10kwhitegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K White Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>



                                                        <div class="gems-5-row row">



                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/14kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Yellow Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small" checked>
                                                                    <img src="assets/img/metals/10kyellowgold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Yellow Gold</span>
                                                                </label>
                                                            </div>




                                                        </div>

                                                        <div class="gems-5-row row">


                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/18krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">18K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/14krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">14K Rose Gold</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-2">
                                                                <label class="gems-inline">
                                                                    <input type="radio" name="test" value="small">
                                                                    <img src="assets/img/metals/10krosegold.png">
                                                                    <br>
                                                                    <span class="gems-inline-name">10K Rose Gold</span>
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                    <div class="option-sub-description-title">Free engraving available in Cart</div>
                                                    <div class="option-info stone">

                                                        <span class="short-title">18K Yellow Gold</span>
                                                        <div class="short-body">A premium gold hypoallergenic alloy, 18-karat yellow gold is 75% pure gold, with a rich buttery golden color.</div>
                                                    </div>



                                                </div>
                                            </div>
                                            -->
                                        </li>
                                        <li class="list-group-item gemlist">
                                            <div class="row layer-info-container" id="headingOne" >

                                                <div class="col-lg-6 col-8 product-info">

                                                    <div class="layer-type">Perlantz Logo </div>
                                                    <div class="layer-desc" >Inside</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="accordionMinimal" class="accordion accordion-minimal" role="tablist">
                                                        <div class="card">

                                                            <div class="designbutton">
                                                                <input type="checkbox" checked="checked" name="perlog" value="yes" class="flipswitch" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                        <!--Ring Layer 3 Ends-->

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- Orta Slider Starts --->
                        <div class="col-lg-5 two">
                            <div class="main-product-slider text-center">
                                <div class="product-header-mobile">
                                    <h6 class="product-heading">Create Your</h6>
                                    <h4 class="product-name">{{$urun->urun_adi}}</h4>
                                </div>
                                <div class="main-product-slider text-center">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img  src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div style="" class="pro-large-img img-zoom">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/uploads/urun/{{$urun->urun_resmi}}" alt="product-details" />
                                        </div>

                                        @foreach($urun->urdosya as $urx)

                                            <div class="pro-nav-thumb">
                                                <img src="/frontend/uploads/urun/ekfoto/{{$urx->imagex}}" alt="product-details" />
                                            </div>
                                        @endforeach
                                        <div class="pro-nav-thumb">
                                            <img src="/frontend/assets/img/360-logo.png" alt="product-details" />
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--- Orta Slider---->

                        <div  class="col-lg-2 three ">


                            @if($urun->shape == '-')

                            @else
                                <div style="margin-top: 8px;" class="cut-info" class="hidden-xs">{{$urun->shape}} Cut</div>
                            @endif
                            @if($urun->stone == '-')

                            @else
                                <div style="margin-top: 8px;" class="primary-stone-info">Stone Type: {{$urun->stone}}</div>
                            @endif
                            @if($urun->seo_description == '-')

                            @else
                                <div style="margin-top: 8px;" class="material-description">
                                    {{$urun->seo_description}}
                                </div>
                            @endif
                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="all-prices-container">
                                    <span class="product-price">Price: € {{$urun->fiyat_eur}}</span>
                                </div>
                            @endif

                            @if($urun->est_delivery == '-')

                            @else
                                <div style="margin-top: 8px;" class="learn-more-link">
                                    <span>Estimated Delivery:{{$urun->est_delivery}}</span>
                                </div>
                            @endif

                            @if(is_null($urun->fiyat_eur))

                            @else
                                <div style="margin-top: 8px;" class="add-to-cart text-center">

                                    @csrf

                                    <input type="hidden" name="id" value="{{$urun->id}}">

                                    <input style=" justify-content: center;" type="submit" class="btn btn-sqr " value="Add To Card">




                                </div>
                            @endif





                        </div>
                        <div class="col-lg-1">
                        </div>
            </section>
        </form>







        <section  class="about-us section-padding pb-0">
            <div class="container">
                <div  class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="about-content text-center">
                            <div class="taki-sag-yazi">ABOUT YOUR</div>
                            <div class="taki-sag-yazi-urun-isim">{{$urun->urun_adi}}</div>
                            <div class="taki-sag-yazi-urun-yazi">
                                {{$urun->about_urun_yazi}}
                            </div>
                            <div style="margin-top: 45px;" class="row">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <th class="table-yazi-baslik">
                                                <div class="br"></div>
                                                General
                                            </th>
                                            <td>
                                                <div class="table-yazi-info1"><b>Color / Metal</b></div>
                                                <div class="table-yazi-info1">{{$urun->main_metal_k}} / {{$urun->metal_color}}</div>
                                            </td>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="table-yazi-info1"><b>Average Weight</b></div>
                                                <div class="table-yazi-info1">
                                                    @if($urun->eightk_weight != '-')
                                                        {{$urun->eightk_weight}}
                                                    @endif
                                                    @if($urun->ninek_weight != '-')
                                                        {{$urun->ninek_weight}}
                                                    @endif
                                                    @if($urun->forteenk_weight != '-')
                                                        {{$urun->forteenk_weight}}
                                                    @endif
                                                    @if($urun->eighteenk_weight != '-')
                                                        {{$urun->eighteenk_weight}}
                                                    @endif
                                                    @if($urun->twentyfivek_weight != '-')
                                                        {{$urun->twentyfivek_weight}}
                                                    @endif
                                                    @if($urun->ninefiveplt_weight != '-')
                                                        {{$urun->ninefiveplt_weight}}
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-yazi-baslik"> <div class="br"></div>Center Stone</th>
                                            @if($urun->width_thickness == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Dimensions</b></div>
                                                    <div class="table-yazi-info1">{{$urun->width_thickness}}mm</div>
                                                </td>
                                            @endif
                                            @if($urun->stone_dia1 == '-')

                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Stone dia1</b></div>
                                                    <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                </td>
                                            @endif
                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Carat</b></div>
                                                    <div class="table-yazi-info1">{{$urun->total_crt}}</div>
                                                </td>
                                            @endif

                                            @if($urun->color == '-' and $urun->clarity == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Color / Clarity</b></div>
                                                    <div class="table-yazi-info1">{{$urun->color}} /  {{$urun->clarity}}</div>
                                                </td>
                                            @endif

                                            @if($urun->total_crt == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Size</b></div>
                                                    <div class="table-yazi-info1">{{$urun->mm}}mm</div>
                                                </td>
                                            @endif

                                            @if($urun->certificate == '-')
                                            @else
                                                <td>
                                                    <div class="table-yazi-info1"><b>Certificate</b></div>
                                                    <div class="table-yazi-info1">{{$urun->certificate}}</div>
                                                </td>
                                            @endif


                                        </tr>
                                        @if($urun->stone_dia1 == '-')
                                        @else
                                            <tr>
                                                <th class="table-yazi-baslik"> <div class="br"></div>Accent Stone</th>
                                                @if($urun->stone_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Stone</b></div>
                                                        <div class="table-yazi-info1">{{$urun->stone_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->cert_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Certificate</b></div>
                                                        <div class="table-yazi-info1">{{$urun->cert_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->color_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Color</b></div>
                                                        <div class="table-yazi-info1">{{$urun->color_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->clarity_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Clarity</b></div>
                                                        <div class="table-yazi-info1">{{$urun->clarity_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->shape_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent Shape</b></div>
                                                        <div class="table-yazi-info1">{{$urun->shape_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->mm_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->mm_dia1}}</div>
                                                    </td>
                                                @endif

                                                @if($urun->total_crt_dia1 == '-')
                                                @else
                                                    <td>
                                                        <div class="table-yazi-info1"><b>Accent mm</b></div>
                                                        <div class="table-yazi-info1">{{$urun->total_crt_dia1}}</div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                                <div class="taki-sag-yazi-urun-yazi ">Stone counts and weights are based on a size 7 for women and a size 10 for men, and may vary slightly for different sizes.</div>

                                <div class="taki-sag-yazi-urun-yazi ">All items are delivered within 7-10 business days with free shipping. We offer one free resize and a craftsmanship warranty during the first year, and returns within 45 days.</div>




                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section style="margin-top: 35px; margin-bottom: -55px" class="section section-background section-height-3" data-plugin-image-background data-plugin-options="{'imageUrl': '/frontend/assets/img/diff.png'}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold text-light mb-0">EXPERT ADVICE FROM OUR Jewelry Consultants</h2>
                        <p class="font-weight-light text-light mb-0">Our Consultants are here to help every step of the way, from selecting the perfect
                            setting and stones to ensuring a seamless delivery.</p>
                        <a class="btn btn-sqr" href="{{route('contact-us')}}">SEND US A MESSAGE</a>
                        <a class="btn btn-sqr" href="tel:+1234567890">Call Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- page main wrapper end -->
    @endif

    <div style="height: 50px;">

    </div>
@endsection

@section('js-extender')

    <script>
        $('input[type=radio][name=centerstone]').change(function() {
            if (this.value == 'Diamond') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/diamond.png);');
            }
            else if (this.value == 'Ruby') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/ruby.png');
            }
            else if (this.value == 'Blue Sapphire') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/bluesapphire.png');
            }
            else if (this.value == 'Emerald') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/emerald.png');
            }
            else if (this.value == 'Amethyst') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/amethyst.png');
            }
            else if (this.value == 'Aquamarine') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/aquamarine.png');
            }
            else if (this.value == 'Citrine') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/citrine.png');
            }
            else if (this.value == 'Red Garnet') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/red-garnet.png');
            }
            else if (this.value == 'Rhodolite Garnet') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/gem-9.png');
            }
            else if (this.value == 'Pink Tourmaline') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/ping-tourmaline.png');
            }
            else if (this.value == 'Black Onyx') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/black-onyx.png');
            }
            else if (this.value == 'Peridot') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/peridot.png');
            }
            else if (this.value == 'Pink Sapphire') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/pink-sapphire.png');
            }
            else if (this.value == 'Yellow Sapphire') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/yellow-sapphire.png');
            }
            else if (this.value == 'Tanzanite') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/tanzanite.png');
            }
            else if (this.value == 'Blue Topaz') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/blue-topaz.png');
            }
            else if (this.value == 'Green Tourmaline') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/green-tourmaline.png');
            }
            else if (this.value == 'Rose Quartz') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/roze-quartz.png');
            }
            else if (this.value == 'Smoky Quartz') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/smoky-quartz.png');
            }
            else if (this.value == 'Green Quartz') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/green-quartz.png');
            }
            else if (this.value == 'Iolite') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/lolite.png');
            }
            else if (this.value == 'Fire Opal') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/fire-opal.png');
            }
            else if (this.value == 'London Blue Topaz') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/london-blue-topaz.png');
            }
            else if (this.value == 'Moissanite') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/moissanite.png');
            }
            else if (this.value == 'Lab Grown Diamond') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/lab-grown-diamond.png');
            }
            else if (this.value == 'Lab Created Emerald') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/lab-created-emerald.png');
            }
            else if (this.value == 'Lab Created Ruby') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/lab-created-ruby.png');
            }
            else if (this.value == 'Lab Created Sapphire') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/lab-created-sapphire.png');
            }
            else if (this.value == 'Morganite') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/morganite.png');
            }
            else if (this.value == 'Lab Alexandrite') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/gems/lab-alexandrite.png');
            }



        });
    </script>


    <script>
        $('input[type=radio][name=accentstone]').change(function() {
            if (this.value == 'Diamond') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/accent/diamond.png);');
            }
            else if (this.value == 'Ruby') {
                $('#fotola').attr('style', 'background-image: url(/frontend/assets/img/accent/ruby.png');
            }
            else if (this.value == 'Blue Sapphire') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/bluesapphire.png');
            }
            else if (this.value == 'Emerald') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/emerald.png');
            }
            else if (this.value == 'Amethyst') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/amethyst.png');
            }
            else if (this.value == 'Aquamarine') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/aquamarine.png');
            }
            else if (this.value == 'Citrine') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/citrine.png');
            }
            else if (this.value == 'Red Garnet') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/red-garnet.png');
            }
            else if (this.value == 'Rhodolite Garnet') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/gem-9.png');
            }
            else if (this.value == 'Pink Tourmaline') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/ping-tourmaline.png');
            }
            else if (this.value == 'Black Onyx') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/black-onyx.png');
            }
            else if (this.value == 'Peridot') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/peridot.png');
            }
            else if (this.value == 'Pink Sapphire') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/pink-sapphire.png');
            }
            else if (this.value == 'Yellow Sapphire') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/yellow-sapphire.png');
            }
            else if (this.value == 'Tanzanite') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/tanzanite.png');
            }
            else if (this.value == 'Blue Topaz') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/blue-topaz.png');
            }
            else if (this.value == 'Green Tourmaline') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/green-tourmaline.png');
            }
            else if (this.value == 'Rose Quartz') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/roze-quartz.png');
            }
            else if (this.value == 'Smoky Quartz') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/smoky-quartz.png');
            }
            else if (this.value == 'Green Quartz') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/green-quartz.png');
            }
            else if (this.value == 'Iolite') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/lolite.png');
            }
            else if (this.value == 'Fire Opal') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/fire-opal.png');
            }
            else if (this.value == 'London Blue Topaz') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/london-blue-topaz.png');
            }
            else if (this.value == 'Moissanite') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/moissanite.png');
            }
            else if (this.value == 'Lab Grown Diamond') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/lab-grown-diamond.png');
            }
            else if (this.value == 'Lab Created Emerald') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/lab-created-emerald.png');
            }
            else if (this.value == 'Lab Created Ruby') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/lab-created-ruby.png');
            }
            else if (this.value == 'Lab Created Sapphire') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/lab-created-sapphire.png');
            }
            else if (this.value == 'Morganite') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/morganite.png');
            }
            else if (this.value == 'Lab Alexandrite') {
                $('#fotola2').attr('style', 'background-image: url(/frontend/assets/img/accent/lab-alexandrite.png');
            }

        });
    </script>



    <script>
        $('input[type=radio][name=accentstone]').change(function() {
            if (this.value == 'diamond') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/diamond.png);');
            }
            else if (this.value == 'ruby') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/ruby.png');
            }
            else if (this.value == 'Blue Sapphire') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/bluesapphire.png');
            }
            else if (this.value == 'Emerald') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/emerald.png');
            }
            else if (this.value == 'Amethyst') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/amethyst.png');
            }
            else if (this.value == 'Aquamarine') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/aquamarine.png');
            }
            else if (this.value == 'Citrine') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/citrine.png');
            }
            else if (this.value == 'Red Garnet') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/red-garnet.png');
            }
            else if (this.value == 'Rhodolite Garnet') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/gem-9.png');
            }
            else if (this.value == 'Pink Tourmaline') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/ping-tourmaline.png');
            }
            else if (this.value == 'Black Onyx') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/black-onyx.png');
            }
            else if (this.value == 'Peridot') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/peridot.png');
            }
            else if (this.value == 'Pink Sapphire') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/pink-sapphire.png');
            }
            else if (this.value == 'Yellow Sapphire') {
                $('#renkle').attr('style', 'background-image: url(/frontend/assets/img/gems/yellow-sapphire.png');
            }
        });
    </script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script>
        $('.telefon').mask('(000) 000-00-00', { placeholder: "(___) ___-__-__" });
        $('.den').mask('+00-(000) 000-00-00', { placeholder: "+__-(___) ___-__-__" });
        $('.alpha-no-spaces').mask("A", {
            translation: {
                "A": { pattern: /[\w@\-.+]/, recursive: true }
            }
        });
    </script>

    <script>
        $('.js-example-basic-multiple').select2({
            placeholder: 'Select an option'

        })
        ;

    </script>
    <script src="/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!-- Examples -->
    <script src="/frontend/js/examples/examples.gallery.js"></script>

@endsection
