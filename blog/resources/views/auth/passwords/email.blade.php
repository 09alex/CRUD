@extends('layouts.login_layout')

<!-- Main Content -->
@section('content')
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}
        <h3>¿Olvidaste tu contraseña?</h3>
        <p> Ingrese su dirección de correo electrónico a continuación para restablecer su contraseña. </p>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required/> </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-actions">
            <a href="{{ url('/login') }}" id="back-btn" class="uppercase btn red btn-outline">Regresar</a>
            <button type="submit" class="uppercase btn green pull-right"> Enviar </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
@endsection