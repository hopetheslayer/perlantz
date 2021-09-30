@extends('arka')

@section('content')

    <div class="col-md-9">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Blog Yazısı Oluştur</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <form method="post" action="{{route('admin.blog.kaydet')}}" enctype="multipart/form-data">
                    @csrf

                        <div class="row">
                            <div style="margin-left: 10px;" class="form-group col-md-6">
                                <label>Yazı Basliği Giriniz</label>
                                {!! Form::text('post_baslik',null, ['class' => 'form-control ', 'style'=> 'width:450px;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '']) !!}

                            </div>

                            <div style="margin-left: 10px;" class="form-group col-6">
                                <label>Ön Yazi Giriniz</label>
                                {!! Form::text('onyazi',null, ['class' => 'form-control ', 'style'=> 'width:450px;' ,'placeholder' => 'Ön Yazı Giriniz', 'required' => '']) !!}

                            </div>
                        </div>




                    <div class="col-12">
                        {!! Form::textarea('yazi', null, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                    </div>

                    <div style="margin-top: 25px;" class="col-6">
                        <h5><b>Kapak Fotoğrafı Belirle</b></h5>

                        {!! Form::file('kimage', array('class' => 'form-control')) !!}
                    </div>

            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>

    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Öne Çıkan Görsel Belirle</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                {!! Form::file('gimage', array('class' => 'form-control')) !!}
            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>
    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Yazı Özellikleri</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <div class="form-group">

                    {!! Form::text('blog_aciklama',null, ['class' => 'form-control date',  'placeholder' => 'Blog Açıklama', 'required' => '']) !!}
                </div>
                <div class="form-group">

                    {!! Form::text('blog_keyword',null, ['class' => 'form-control date',  'placeholder' => 'Anahtar Kelimeleri giriniz', 'required' => '']) !!}
                </div>



            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>

    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Yazı Kategori</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <div class="form-group">

                    <select id="blogkategori" type="blogkategori" class="form-control" name="blogkategori">
                        <option value="">--Kategori Seçiniz--</option>
                        @foreach ($blogkategori as $bk)

                            <option value="{{ $bk->id }}">{{ $bk->kategori_adi }}</option>


                        @endforeach



                    </select>
                </div>




            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>

    <div class="col-md-3">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Yayımlanma Ayarları</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <div class="form-group">

                    <div class="form-group">
                        <label class="col-md-6 label-control" for="userinput5">Oluşturulma zamanı :</label>
                        {!! Form::date('created_at', \Carbon\Carbon::now()->format('D/M/Y'), ['class' => 'form-control', 'required' => true]) !!}

                        <label class="col-md-6 label-control" for="userinput5">Guncellenme zamanı :</label>
                        {!! Form::date('updated_at', \Carbon\Carbon::now()->format('D/M/Y'), ['class' => 'form-control', 'required' => true]) !!}
                    </div>
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput5">Yayınlansın mı ? :</label>
                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" name="yayın" value="1"> evet
                            </label>
                        </div>
                    </div>
                </div>




            </div><!-- .widget-body -->


        </div><!-- .widget -->
    </div>

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header text-center">
                <a href="{{route('admin.blog.index')}}" class="btn btn-danger">Geri Dön</a>
                {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-success gradient-mint ']) !!}
            </header><!-- .widget-header -->
        </div><!-- .widget -->
    </div>
    {!! Form::close() !!}
@endsection



@section('js')

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


