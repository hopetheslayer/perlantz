@extends('layouts.anatema')

@section('aside-page-title','Urun Bilgileri')

@section('css')

@endsection

@section('content')






    <section  class="section futura-section-color">

        <div style="margin-top:-74px;" class="container" >
            <div class="rd-shadow2"></div>

            <div class="row flex-column-reverse flex-md-row">
                <div class="col-lg-4 col-xl-4 mb-4 mb-xl-0  appear-animation animated fadeInUpShorter appear-animation-visible p-0 m-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <div class="card bg-primary border-0">
                        <div class="card bg-primary border-0 h-100 py-2 ">
                            <div class="card-body p-4 text-justify">

                                <br>
                                <h2 class="text-color-light text-right text-5 mb-1">VenaBLOCK</h2>

                                <h2 class=" text-color-light text-right  text-1 mb-1">Vein Sealing System<br>Non Thermal Ablation</h2>
                                <br>
                                <div class="text-color-light text-1   mb-2">VenaBlock offers a unique treatment for
                                     venous insufficiency. Treatment is simply
                                    delivering cyanoacrylate inside of
                                     disfunctioning vein segment (VSM, VSP
                                     or perforator veins) continuously while
                                     applying pressure over target vein
                                     segments.
                                </div>
                              <br>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0 ">
                    <div class="image-frame min-height-300 h-100" data-plugin-image-background="" data-plugin-options="{'imageUrl': 'frontend/img/anasayfa/alt-slider1.png'}" style=" background-size: cover; background-position: center center; background-repeat: no-repeat;"></div>
                </div>

            </div>

        </div>




    </section>

    <section class="section futura-section-color">
        <div class="container-fluid">

            <div  style="margin-top: -148px;" class="multi-dev-urun"></div>

        </div>

    </section>


    <section class="section futura-section-color">
        <div class="container">

            <div style="margin-top: -265px;" class="col-md-12 mb-5 mb-md-0">

                <ul class="nav nav-tabs  nav-tabs-centered" id="tabCentered" role="tablist">
                    <li class="nav-item tab-margin">
                        <button type="button" class="btn tab-button btn-block text-color-light-2 btn-4 btn-v-3 mb-2"  id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" >OVERVIEW</button>
                    </li>
                    <li class="nav-item tab-margin">
                        <button type="button" class="btn tab-button btn-block text-color-light-2 btn-4 btn-v-3 mb-2"  id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" >FEATURES</button>
                    </li>
                    <li class="nav-item tab-margin">
                        <button type="button" class="btn tab-button btn-block text-color-light-2 btn-4 btn-v-3 mb-2"  id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" >SPECS</button>
                    </li>
                    <li class="nav-item tab-margin">
                        <button type="button" class="btn tab-button btn-block text-color-light-2 btn-4 btn-v-3 mb-2"  id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" >ORDERING INFO</button>
                    </li>

                </ul>
                <div class="tab-content" id="tabCenteredContent">
                    <div class="tab-pane fade pt-4 pb-4 show active tab-content-color" id="tab1" role="tabpanel" >
                        tab1
                    </div>
                    <div class="tab-pane fade pt-4 pb-4 show tab-content-color " id="tab2" role="tabpanel" >
                        tab2
                    </div>
                    <div class="tab-pane fade pt-4 pb-4 show tab-content-color " id="tab3" role="tabpanel" >
                        tab3
                    </div>
                    <div class="tab-pane fade pt-4 pb-4 show tab-content-color " id="tab4" role="tabpanel" >
                        tab4
                    </div>

                </div>

            </div>

        </div>

    </section>




@endsection


@section('js')



@endsection
