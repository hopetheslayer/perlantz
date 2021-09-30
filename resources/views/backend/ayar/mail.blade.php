@extends('arka')

@section('content')

    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title text-center">Admin Mail Değiştir</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            @if (session('error'))
                <div style="color: white;" class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div style="color: white;" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="widget-body">

                <form class="form-horizontal" method="POST" action="{{route('admin.mail.degistir')}}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group row">
                            <label for="new-password" class="col-md-3 label-control">Yeni Mailiniz</label>

                            <div class="col-md-9">
                                <input id="new-mail" type="email" class="form-control" name="new-mail" required>
                                @if ($errors->has('current-mail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-mail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="eventRegInput2">Mailiniz Doğrulayınız</label>
                            <div class="col-md-9">
                                <input id="new-mail-confirm" type="email" class="form-control" name="new-mail_confirmation" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="eventRegInput3">Şuanki Şifreniz</label>
                            <div class="col-md-9">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="eventRegInput3">Gizli Sorunuz</label>
                            <div class="col-md-9">
                                <input id="current-gsor" type="text" class="form-control" name="current-gsor" required>

                                @if ($errors->has('current-gsor'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('current-gsor') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-actions center">
                            <button type="submit" class="btn btn-primary">
                                Maili Değiştir
                            </button>
                            <a class="btn btn-info" href="{{ route('admin.dashboard') }}"> Geri</a>
                        </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div>

@endsection
