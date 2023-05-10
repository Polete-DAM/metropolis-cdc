@extends('layouts.master')

@section('header')
<h2>Información espacio: {{ $espacio->id }}</h2>
@endsection

@section('content')
<a href="{{url('espacios')}}" class="btn btn-link"><< Inicio</a>
<form action='/reservas/{{$espacio->id}}' method='POST'>
        @csrf
        @method('put')
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre del espacio</label>
    <input type="text" class="form-control" id="nombre" disabled value="{{ $espacio->nombre }}">
</div>
<div class="mb-3">
    <label for="evento" class="form-label">Area</label>
    <input type="text" class="form-control" id="area" disabled value="{{ $espacio->area }}">
</div>
<div class="mb-3">
    <label for="dia" class="form-label">Capacidad</label>
    <input type="datetime" class="form-control" id="capacidad" disabled value="{{ $espacio->capacidad }}">
</div>
<div class="mb-3">
    <label for="estado" class="form-label">Disponibilidad</label>
    <input type="text" class="form-control" id="disponibilidad" disabled value="{{ $espacio->disponibilidad }}">
</div>

</form>

@endsection