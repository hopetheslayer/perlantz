@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Kategori Oluştur</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                @include('backend-layouts.alert')
                <form method="post" action="{{route('admin.urunkategori.kaydet')}}" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-left: 10px;" class="form-group text-center">

                        {!! Form::text('slug',null, ['class' => 'form-control text-center ','placeholder' => 'Kategori Slug Giriniz', 'required' => '']) !!}

                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('kategori_adi',null, ['class' => 'form-control text-center ',  'placeholder' => 'Kategori Başlığını Giriniz']) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('seo_title',null, ['class' => 'form-control text-center ',  'placeholder' => 'Seo Baslik' ]) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('seo_description',null, ['class' => 'form-control text-center ',  'placeholder' => 'Seo Aciklama']) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('seo_keywords',null, ['class' => 'form-control text-center ',  'placeholder' => 'Seo Keywords']) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::textarea('aciklama',null, ['class' => 'form-control text-center ',  'placeholder' => 'Kategori Aciklama']) !!}
                    </div>

                    <div style="margin-top: 25px;" class="col-6">
                        <h5><b>Kapak Fotoğrafı Belirle</b></h5>

                        {!! Form::file('kategori_resmi', array('class' => 'form-control')) !!}
                    </div>


            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>



    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header text-center">
                <a href="{{route('admin.urunkategori.index')}}" class="btn btn-danger">Geri Dön</a>
                {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-success gradient-mint ']) !!}
            </header><!-- .widget-header -->
        </div><!-- .widget -->
    </div>
    {!! Form::close() !!}
@endsection



@section('js')


@endsection
