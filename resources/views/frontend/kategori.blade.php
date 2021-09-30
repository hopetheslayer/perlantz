@extends('layouts.anatema')

@section('aside-page-title','HOME')

@section('sayfa-title')
    <title>Perlantz</title>
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
                        <li class="active">OEM</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-weight-bold text-uppercase">{{$kategori->kategori_adi}}</h2>

                </div>
            </div>
        </div>
    </section>

    @if (count($urunler)>0)
        <div class="container">
            <div class="row">
                <aside class="sidebar col-md-4 col-lg-3 order-2 order-md-1">
                    <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">

                        <div class="card">

                            <div class="card-header accordion-header" role="tab" id="categories">
                                <h5 class="mb-0">
                                    <a href="#" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">{{$kategori->kategori_adi}}</a>
                                </h5>
                            </div>
                            <div id="toggleCategories" class="accordion-body collapse show" role="tabpanel" aria-labelledby="categories">

                                <div class="card-body">
                                    <ul class="list list-unstyled mb-0">
                                        @if(count($alt_kategori)>0)
                                            @foreach($alt_kategori as $l)
                                                <li><a href="{{route('kategori',$l->slug)}}">{{$l->kategori_adi}}</a></li>

                                            @endforeach

                                        @else

                                            <h4>There are no other subcategories in this category.</h4>

                                        @endif
                                    </ul>
                                </div>


                            </div>
                        </div>


                    </div>
                </aside>
                <div class="col-md-8 col-lg-9 order-1 order-md-2 mb-5 mb-md-0">
                    @if(count($urunler)>0)
                        <div class="row align-items-center justify-content-between mb-4">
                            <div class="col-auto mb-3 mb-sm-0">
                                <form method="get">
                                    <div class="custom-select-1">
                                        <select class="form-control border">
                                            <option value="popularity"><a href="?sirala=coksatanlar">Sort by popularity</a></option>
                                            <option value="date" selected="selected"><a href="?sirala=yeni">Sort by newness</a></option>
                                        </select>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="row">
                            @foreach($urunler as $urunx)
                                <div class="col-sm-6 col-md-4 mb-4">
                                    <div class="product portfolio-item portfolio-item-style-2">
                                        <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
											<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
												<a href="shop-product-detail-right-sidebar.html">
													<img src="/frontend/img/products/product-1.jpg" class="img-fluid" alt="">
												</a>
												<span class="image-frame-action">
													<a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
                                                    <a style="margin-left: 15px;" href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">QUOTE</a>
												</span>
											</span>
                                        </div>
                                        <div class="product-info d-flex flex-column flex-lg-row ">
                                            <div class="product-info-title">
                                                <h3 class="text-color-default text-2 line-height-1 mb-1"><a  href="shop-product-detail-right-sidebar.html">{{$urunx->urun_adi}}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <hr class="mt-5 mb-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mb-2 mb-sm-0">

                            </div>
                            <div class="col-auto mb-5">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination mb-0">
                                        {{request()->has('sirala') ? $urunler->appends(['sirala'=>request('sirala')])->links() :$urunler->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    @endif


                </div>

            </div>
        </div>

    @else

        <section class="section pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($alt_kategori as $kat)
                        <div style="margin: 15px;" class="col-8 col-md-5 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                            <a href="{{route('kategori',$kat->slug)}}">
                                <div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-2 image-frame-style-1">
                                    <div class="image-frame-wrapper">
                                        <img src="/frontend/img/shop/categorie-bg-1.jpg" class="img-fluid" alt="">
                                        <div class="image-frame-info image-frame-info-show">
                                            <div class="image-frame-info-box-style-1">
                                                <h3 class="font-weight-bold text-color-default text-uppercase text-1 m-0 p-0">{{$kat->kategori_adi}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif



@endsection


