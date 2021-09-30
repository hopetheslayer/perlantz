@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Slider Oluştur</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">

                <form method="post" action="{{route('slider.kaydet')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dil Adı</label>
                        {!! Form::text('name', null, array('placeholder' => '','class' => 'form-control border-primary')) !!}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dil Kodu</label>
                        {!! Form::text('code', null, array('placeholder' => '','class' => 'form-control border-primary')) !!}
                    </div>

                    <button type="submit" class="btn btn-primary btn-md">Oluştur</button>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
@endsection
