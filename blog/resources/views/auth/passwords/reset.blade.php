@extends('layouts.login_layout')

@section('content')
    @if (session('status'))
        <div class="custom-alerts alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('status') }}
        </div>
    @endif

    <!-- BEGIN REGISTRATION FORM -->
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <h3 class="font-green">Restablecer la contraseña</h3>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Correo electrónico</label>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off"  placeholder="Correo electrónico" name="email" value="{{ $email or old('email') }}" required autofocus />
            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Contraseña" name="password" required/>
            @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Confirmar contraseña</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirmar contraseña" name="password_confirmation" required/>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Enviar</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
@endsection