@extends('layouts.app', [
'class' => 'off-canvas-sidebar',
'classPage' => 'login-page',
'activePage' => 'login',
'title' => __('RCS Dashboard'),
'pageBackground' => asset("material").'/img/login.jpg'
])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif
            <br />
            <form class="form" method="POST" action="{{ route('login.store') }}">
                @csrf

                <div class="card card-login">
                    <div class="card-header card-header-rose text-center">
                        <h4 class="card-title">{{ __('Login') }}</h4>
                    </div>
                    <div class="card-body ">
                        <span class="form-group  bmd-form-group email-error {{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">email</i>
                                    </span>
                                </div>
                                <input type="email" class="form-control err-email" id="exampleEmails" name="email" placeholder="{{ __('Email...') }}" required>
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                        </span>
                        <span class="form-group bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" id="examplePassword" name="password" placeholder="{{ __('Password...') }}" required>
                                @include('alerts.feedback', ['field' => 'password'])
                            </div>
                        </span>
                        <div class="form-check mr-auto ml-3 mt-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <button type="submit" class="btn btn-rose btn-link btn-lg">{{ __('Lets Go') }}</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-6">
                    <a href="" class="text-light">
                        <small>{{ __('Forgot password?') }}</small>
                    </a>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('register') }}" class="text-light">
                        <small>{{ __('Create new account') }}</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection