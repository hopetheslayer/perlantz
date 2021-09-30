@extends('layouts.anatema-app')

@section('content')
    <div style="margin-top: 50px; margin-bottom: 50px;" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Change Password</div>

                    <div class="card-body">
                        <div class="contact-message">
                        <form class="form-horizontal contact-form" method="POST" action="/change-password">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                                <div class="col-md-6">
                                    <input id="current-password" type="password"  name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control bg-light-5 rounded border-0 text-1 " name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Your Password') }}</label>

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control bg-light-5 rounded border-0 text-1 " name="new-password_confirmation" required>

                                    @if ($errors->has('new-password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-sqr">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
