@extends('layouts.app')

@section('content')
<div class="error404">
                <div class="row-12">
                        <div class="col-12">
                                <h1>500</h1>
                        </div>
                        <div class="col-12">
                                <p style="color:red;">Server Error</p>
                        </div>
                        <div class="col-12">
                                <p class="p1" style="color:red;">Please try one of the following pages or fell free to contact us if the problem persists</p>
                                </div>
                        <div class="col-12">
                                <input type="button" class="btn btn-success btn-lg" onclick=" location.href='/' " value="Home" name="boton" /> 
                        </div>
                </div>
        </div>
@endsection