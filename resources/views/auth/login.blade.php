@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center h-100 mt-5 pt-5">
    <section class="h-100">
        <div class="card-wrapper">
            <div class="card fat">
                <div class="card-body">
                    <h4 class="card-title">Iniciar Sessión</h4>
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="form-group mt-3 pt-3">
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
                        <div class="form-group no-margin">
                        <button type="submit" class="btn btn-success btn-block">Iniciar Sessión</button>
                        <a class=" nav-link active btn btn-facebook btn-block" href="auth/facebook"><i class="fab fa-facebook-square"></i>  Facebook</a>
                        <a class=" nav-link active btn btn-google btn-block" href="auth/google"><i class="fab fa-google"></i>  Google</a>
                        </div>
                                        <div class="margin-top20 text-center">
                                            No tienes una cuenta? <a href="{{ route('register') }}">Crear Cuenta</a>
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
