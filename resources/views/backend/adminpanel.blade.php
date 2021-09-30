@extends('arka')

@section('content')
    <div class="row">
        <a href="{{route('admin.urun')}}">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">{{$urun->count()}}</span></h3>
                            <small class="text-color">Urun Sayısı</small>
                        </div>
                    </div>
                </div><!-- .widget -->
            </div>
        </a>

        <a href="{{route('admin.urunkategori.index')}}">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">{{$urunkategori->count()}}</span></h3>
                            <small class="text-color">Urun Kategori Sayısı</small>
                        </div>

                    </div>

                </div><!-- .widget -->
            </div>
        </a>
        <a href="{{route('admin.blog.index')}}">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">{{$blog->count()}}</span></h3>
                            <small class="text-color">Yayınlanan Blog Sayısı</small>
                        </div>

                    </div>
                </div><!-- .widget -->
            </div>
        </a>
        <a href="{{route('admin.blogkategori.index')}}">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">{{$blogkategori->count()}}</span></h3>
                            <small class="text-color">Blog Kategori</small>
                        </div>

                    </div>
                </div><!-- .widget -->
            </div>
        </a>
        <a href="{{route('subscriber.index')}}">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-dark"><span class="counter" data-plugin="counterUp">{{$sbs->count()}}</span></h3>
                            <small class="text-color">Bültene Kayıt olan Kullanıcılar</small>
                        </div>

                    </div>
                </div><!-- .widget -->
            </div>
        </a>
        <a href="{{route('admin.contact.index')}}">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">{{$iletisimliste->count()}}</span></h3>
                            <small class="text-color">Sistemden bizimle İletişim Kuran Sayısı</small>
                        </div>

                    </div>
                </div><!-- .widget -->
            </div>
        </a>

        <a href="{{route('admin.ticket')}}">
            <div class="col-md-3 col-sm-6">
                <div class="widget stats-widget">
                    <div class="widget-body clearfix">
                        <div class="pull-left">
                            <h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">{{$ticket->count()}}</span></h3>
                            <small class="text-color">Aktif Destek Biletleri</small>
                        </div>

                    </div>
                </div><!-- .widget -->
            </div>
        </a>

        <div class="col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
                {!! $chart->container() !!}
            </div>
            <div class="col-md-6 col-sm-6">
                {!! $chart2->container() !!}
            </div>
        </div>

        <div style="margin-top: 50px;" class="col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
                {!! $chart3->container() !!}
            </div>
            <div class="col-md-6 col-sm-6">
                {!! $chart4->container() !!}
            </div>
        </div>


        {!! $chart->script() !!}
        {!! $chart2->script() !!}
        {!! $chart3->script() !!}
        {!! $chart4->script() !!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    </div>
@endsection
