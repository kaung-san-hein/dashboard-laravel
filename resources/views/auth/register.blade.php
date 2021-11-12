@extends('layouts.app', [
'class' => 'off-canvas-sidebar',
'classPage' => 'register-page',
'activePage' => 'register',
'title' => __('RCS Dashboard'),
'pageBackground' => asset("material").'/img/register.jpg'
])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 ml-auto mr-auto">
            <div class="card card-signup">
                <h2 class="card-title text-center">{{ __('Register') }}</h2>
                <div class="card-body">

                    <form class="form" method="POST" action="{{ route('register.store') }}">
                        @csrf

                        <div class="has-default{{ $errors->has('name') ? ' has-danger' : '' }} mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">face</i>
                                    </span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                    <strong class="errors-field-name">{{ $errors->first('name') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="has-default{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">mail</i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="email" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <div id="email-error" class="error text-danger pl-3" for="name" style="display: block;">
                                    <strong class="errors-field-email">{{ $errors->first('email') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="has-default{{ $errors->has('password') ? ' has-danger' : '' }} mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input type="password" name="password" placeholder="{{ __('Password...') }}" class="form-control" required>
                                @if ($errors->has('password'))
                                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                    <strong class="errors-field-pass">{{ $errors->first('password') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="has-default mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-round mt-4">{{ __('Register') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection