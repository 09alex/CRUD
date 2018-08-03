@extends('layouts.login_layout')

@section('content')
    <form class="login-form" action="{{ url('/login') }}" method="post">
        {{ csrf_field() }}

        <h3 class="form-title">Iniciar sesión</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Introduce tu usuario y contraseña. </span>
        </div>
        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Usuario</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username" value="{{ old('username') }}" required autofocus />
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password" />
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Entrar</button>
            <a href="{{ url('/password/reset') }}" id="forget-password" class="forget-password">¿Se te olvidó tu contraseña?</a>
        </div>
    </form>
@endsection