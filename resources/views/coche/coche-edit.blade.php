@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center h-100 mt-5 pt-5">
    <section class="h-100">
        <div class="card-wrapper-list">
        <div class="card fat">
        <div class="card-body">
                <form action="/coche-update/{{ $coches->id }}"  method="POST">
                    {{ csrf_field() }}
            <div class="row">
                <div class="col">
                    <h1 class="card-title">Detalle de Coche</h1>
                </div>
                <div class="col">
                    <div class="text-right">
                        <div class="btn-group">
                            <a class=" nav-link active btn btn-secondary" style="width: 100px" href="/">Cancelar</a> 
                            <button type="submit" class="btn btn-primary" style="width: 100px">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="bg-info">
                        <div class="row">
                            <div class="col">
                                <div class="col form-group col-lg-12">
                                    <label class="col-form-label">Marca del Coche <span class="text-danger">*</span></label>
                                    <input type="text" name="marca_coche" class="form-control @if($errors->has('marca_coche')) is-invalid @endif" placeholder="Marca del Coche" value="{{ $coches->marca_coche }}">
                                    @if($errors->has('marca_coche'))
                                    @foreach($errors->get('marca_coche') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="col form-group col-lg-12">
                                    <label class="col-form-label">Modelo <span class="text-danger">*</span></label>
                                    <input type="text" name="modelo" class="form-control @if($errors->has('modelo')) is-invalid @endif" placeholder="Modelo del Coche" value="{{ $coches->modelo }}">
                                    @if($errors->has('modelo'))
                                    @foreach($errors->get('modelo') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="col form-group col-lg-12">
                                    <label class="col-form-label">Color <span class="text-danger">*</span></label>
                                    <input type="text" name="color" class="form-control @if($errors->has('color')) is-invalid @endif" placeholder="Color del Coche" value="{{ $coches->color }}">
                                    @if($errors->has('color'))
                                    @foreach($errors->get('color') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="col form-group col-lg-12">
                                    <label class="col-form-label">Km <span class="text-danger">*</span></label>
                                    <input type="text" name="kilometraje" class="form-control @if($errors->has('kilometraje')) is-invalid @endif" placeholder="Kilometraje del Coche" value="{{ $coches->kilometraje }}">
                                    @if($errors->has('kilometraje'))
                                    @foreach($errors->get('kilometraje') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col">
                                    <div class="col form-group col-lg-12">
                                        <label class="col-form-label">Combustible <span class="text-danger">*</span></label>
                                        <input type="text" name="combustible" class="form-control @if($errors->has('combustible')) is-invalid @endif" placeholder="Marca del Coche" value="{{ $coches->combustible }}">
                                                @if($errors->has('combustible'))
                                        @foreach($errors->get('combustible') as $error)
                                            <div class="invalid-feedback">{{ $error }}</div>   
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col form-group col-lg-12">
                                        <label class="col-form-label">Tipo de Cambio <span class="text-danger">*</span></label>
                                        <select class="custom-select" name="tipo_cambio" value="{{ $coches->tipo_cambio }}">
                                            <option value="Automatico">Automatico</option>
                                            <option value="Manual">Manual</option>
                                        </select>
                                              @if($errors->has('tipo_cambio'))
                                        @foreach($errors->get('tipo_cambio') as $error)
                                            <div class="invalid-feedback">{{ $error }}</div>   
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col">
                                        <div class="col form-group col-lg-12">
                                            <label class="col-form-label">Precio <span class="text-danger">*</span></label>
                                            <input type="text" name="precio" class="form-control @if($errors->has('precio')) is-invalid @endif" placeholder="Precio del Coche" value="{{ $coches->precio }}">
                                            @if($errors->has('precio'))
                                            @foreach($errors->get('precio') as $error)
                                                <div class="invalid-feedback">{{ $error }}</div>   
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col"></div>
                            </div>
                        </form>
                        <div class="row">
                                <div class="col"></div>
                                <div class="col text-right form-group col-lg-12">
                                    @include('partials.button-delete')
                                </div>
                        </div>
            </div>
            </div>
           </div>
            </section>
</div>
@endsection