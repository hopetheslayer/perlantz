@extends('arka')

@section('content')
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">

                <h4 class="widget-title text-center">Gödnerilme Tarihi = {{$contact->created_at}}</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                <form action="#" class="form-horizontal">
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Ad</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->name, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Email</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->email, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Konu</label>
                        <div class="col-sm-5">
                            {!! Form::text('yazibaslik',$contact->subject, ['class' => 'form-control ', 'style'=> 'width:100%;' ,'placeholder' => 'Yazı Başlığını Giriniz', 'required' => '','disabled']) !!}
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Gönderen Kisi Mesaj</label>

                        <div class="col-sm-5">
                            <textarea class="form-control" id="textarea1"   disabled>{{$contact->message}}</textarea>
                        </div>
                    </div><!-- .form-group -->
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>
@endsection

