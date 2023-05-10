@extends('layouts.master')

@section('header')
<h2>Información espacio: {{ $espacio->id }}</h2>
@endsection

@section('content')
<a href="{{url('espacios')}}" class="btn btn-link"><< Inicio</a>
<form action='/espacios/{{$espacio->id}}' method='PUT'>
        @csrf
        @method('put')
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre del espacio</label>
    <input type="text" class="form-control" id="nombre" value="{{ $espacio->nombre }}">
</div>
<div class="mb-3">
    <label for="area" class="form-label">Area</label>
    <input type="text" class="form-control" id="area" value="{{ $espacio->area }}">
</div>
<div class="mb-3">
    <label for="capacidad" class="form-label">Capacidad</label>
    <input type="datetime" class="form-control" id="capacidad" value="{{ $espacio->capacidad }}">
</div>
<div class="mb-3">
    <label for="disponibilidad" class="form-label">Disponibilidad</label>
    <input type="text" class="form-control" id="disponibilidad" value="{{ $espacio->disponibilidad }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection