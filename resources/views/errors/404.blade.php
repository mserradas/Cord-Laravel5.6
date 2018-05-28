@extends('layouts.app')

@section('content')
<div class="error404">
        <div class="row-12">
                <div class="col-12">
                        <h1>404</h1>
                </div>
                <div class="col-12">
                        <p>NOT FOUNT</p>
                </div>
                <div class="col-12">
                                <p class="p1">Please try one of the following pages:</p>
                        </div>
                <div class="col-12">
                                <input type="button" class="btn btn-success btn-lg" onclick=" location.href='/' " value="Home" name="boton" /> 
                </div>
        </div>
</div>
@endsection