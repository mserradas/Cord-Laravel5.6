<form action="/coche-delete/{{ $coches->id }}"  method="POST">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger" style="width: 100px">Eliminar</button>
</form>