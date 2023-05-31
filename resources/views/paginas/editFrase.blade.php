@extends('plantilla')

@section('contenido')
   <h3 class="text-center text-success">Modificando  Frase</h3>
   {{-- <form action="{{ route('edit',$item->id_palabras)}}" method="POST"> --}}
    <form action="{{ route('edit',$frase->id_palabras)}}" method="POST">
    @method('GET')
    @csrf
   <label for="">Palabra</label>
   <input type="text" class="form-control" name="palabra" value="{{$frase->palabra}}">

   <label for="">Traduccion </label>
   <input type="text" class="form-control" name="traduccion" value="{{$frase->traduccion}}">

   <input type="submit" class="btn btn-success mt-3" value="Modificando Frase">
  </form>
@endsection