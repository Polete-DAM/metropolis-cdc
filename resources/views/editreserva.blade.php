@extends('layouts.master')

@section('header')
<h2>Información reserva: {{ $reserva->id }}</h2>
@endsection

@section('content')
<a href="{{url('reservas')}}" class="btn btn-link"><< Inicio</a>
<form action='/reservas/{{$reserva->id}}' method='PUT'>
        @csrf
        @method('put')
<div class="mb-3">
    <label for="cliente" class="form-label">ID del Cliente</label>
    <input type="text" class="form-control" id="cliente" value="{{ $reserva->client_id }}">
</div>
<div class="mb-3">
    <label for="evento" class="form-label">Evento</label>
    <input type="text" class="form-control" id="evento" value="{{ $reserva->event }}">
</div>
<div class="mb-3">
    <label for="dia" class="form-label">Dia</label>
    <input type="datetime" class="form-control" id="dia" value="{{ $reserva->day }}">
</div>
<div class="mb-3">
    <label for="estado" class="form-label">Estado</label>
    <input type="text" class="form-control" id="estado" value="{{ $reserva->estado }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection