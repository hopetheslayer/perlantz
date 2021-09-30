@extends('arka')

@section('content')

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h3 class="text-center">About Gemstone Sayfa Ayarları</h3>
            </header><!-- .widget-header -->

            <div class="widget-body">


                <form method="POST" class="form-horizontal" action="{{route('admin.gemstone.kaydet')}}" enctype="multipart/form-data">

                    @csrf
                    <hr style="margin-top: 10px;" class="widget-separator">
                    @foreach($gemstonebilgi as $a)
                        <div class="col-12">
                            {!! Form::textarea('aciklama',$a->aciklama, array('class' => 'ckeditor','style'=>'height:100px')) !!}
                        </div>
                    @endforeach



                    <div class="form-actions text-center">
                        {!! Form::submit(trans('Gönder'), ['class' => 'btn btn-primary gradient-mint ']) !!}
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>

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
