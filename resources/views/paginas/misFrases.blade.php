@extends('plantilla')

@section('contenido')
<h3 class="text-center">Mi Coleccion</h3> 
<a href="{{url('/form')}}" class="btn btn-secondary mb-4">Guardar Frase</a>
@foreach ($frases as $item)
<p class="mb-2"><b>Frase </b> <br>{{$item->palabra}}</p>
<p><b>Traduccion </b> <br>{{ $item->traduccion}}</p> 

<form action="{{route('edit',$item->id_palabras)}}" method="POST">

    @csrf
    <button class="btn btn-primary">Editar<i class="bi bi-pencil-fill"></i></button>
</form>

<button class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar</button>
@endforeach
@endsection
