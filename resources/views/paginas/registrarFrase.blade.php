@extends('plantilla')

@section('contenido')
   <h3 class="text-center text-success">Guardar Frase </h3>
  <form action="{{route('save')}}" method="POST">
    @csrf
   <label for="">Palabra</label>
   <input type="text" class="form-control" name="palabra">

   <label for="">Traduccion </label>
   <input type="text" class="form-control" name="traduccion">

   <input type="submit" class="btn btn-success mt-3" value="Guardar Frase">
  </form>
@endsection