@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Kategori Oluştur</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <form method="post" action="{{route('admin.blogkategori.kaydet')}}" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-left: 10px;" class="form-group text-center">

                        {!! Form::text('slug',null, ['class' => 'form-control text-center ','placeholder' => 'Kategori Slug Giriniz', 'required' => '']) !!}

                    </div>

                    <div class="col-12 text-center">
                        {!! Form::text('kategori_adi',null, ['class' => 'form-control text-center ',  'placeholder' => 'Kategori Başlığını Giriniz', 'required' => '']) !!}
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
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

    <script src="/toast/toast.js"></script>


@endsection
