@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center h-100 mt-5 pt-5">
    <section class="h-100">
        <div class="card-wrapper">
            <div class="card fat">
                <div class="card-body">
                    <h4 class="card-title">Registrar Usuario</h4>
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mt-3 pt-3">
                                <label for="name">Nombre y Apellidos</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña
                            </label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" data-eye>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Repetir Contraseña
                            </label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" data-eye>
                        </div>
                        <div class="form-group no-margin">
                        <button type="submit" class="btn btn-success btn-block">Registrar Usuario</button>
                        <a class=" nav-link active btn btn-secondary btn-block" href="/">Cancelar</a>
                        </div>
                    </form>
                                </div>
                            </div>
                            <div class="footer">
                                Copyright &copy; Digital Green 2018
                            </div>
                        </div>
                    </div>
            </section>
</div>
@endsection
