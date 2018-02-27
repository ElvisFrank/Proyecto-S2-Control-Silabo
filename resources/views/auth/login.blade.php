@extends('template.main')
@section('title-body','Iniciar sesión')
@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            <div class="row">

                <div class="col s10 m6 offset-s1 offset-m3">
                    <form class="" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="input-field">
                            <label for="email">E-Mail Address</label>
                                <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required autofocus minlength="4" maxlength="50">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-field">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <input id="password" type="password" class="validate" name="password" required minlength="4" maxlength="50">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="">
                                <p>
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Recordarme</label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="center-align">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
