@extends('arka')

@section('content')



    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center" id="striped-row-layout-card-center ">Şifre Değiştir</h4>

                    </div>
                    <div class="card-body">
                        <div class="px-3">
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
                        </div>
                            <form class="form-horizontal" method="POST" action="{{route('admin.mail.degistir')}}">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label for="new-password" class="col-md-3 label-control">Şuanki Şifreniz</label>

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
                                        <label class="col-md-3 label-control" for="eventRegInput2">Yeni Şifreniz</label>
                                        <div class="col-md-9">
                                            <input id="new-password" type="password" class="form-control" name="new-password" required>

                                            @if ($errors->has('new-password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="eventRegInput3">Şifrenizi Doğrulayınız</label>
                                        <div class="col-md-9">
                                            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions center">
                                    <button type="submit" class="btn btn-primary">
                                        Şifreyi Değiştir
                                    </button>
                                    <a class="btn btn-info" href="{{ route('admin.dashboard') }}"> Geri</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div style="margin-top: 50px;">

</div>
@endsection
