@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Kategori Oluştur</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <form method="post" action="{{route('admin.urunkategori.guncelle',$kategori->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-left: 10px;" class="form-group text-center">

                        {!! Form::text('slug',$kategori->slug, ['class' => 'form-control text-center ','placeholder' => 'Kategori Slug Giriniz', 'required' => '']) !!}

                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('kategori_adi',$kategori->kategori_adi, ['class' => 'form-control text-center ',  'placeholder' => 'Kategori Başlığını Giriniz']) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('seo_title',$kategori->seo_title, ['class' => 'form-control text-center ',  'placeholder' => 'Seo Baslik' ]) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('seo_description',$kategori->seo_description, ['class' => 'form-control text-center ',  'placeholder' => 'Seo Aciklama']) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::text('seo_keywords',$kategori->seo_keywords, ['class' => 'form-control text-center ',  'placeholder' => 'Seo Keywords']) !!}
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::textarea('aciklama',$kategori->aciklama, ['class' => 'form-control text-center ',  'placeholder' => 'Kategori Aciklama']) !!}
                    </div>



                    <div style="margin-top: 50px; margin-bottom: 20px;" class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-line">
                            @if($kategori->kategori_resmi !=null)
                                <img  class=" pull-right" src="/frontend/uploads/category/{{$kategori->kategori_resmi}}" style="height:250px; width: 250px;" >
                            @endif
                            <br>

                            <div class="pull-left">
                                <label for="kategori_resmi">Ürün Resmi</label>
                                <br>
                                <input type="file" id="kategori_resmi" name="kategori_resmi">
                            </div>
                        </div>
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
