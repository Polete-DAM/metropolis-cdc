@extends('layouts.master')

@section('header')
<h2>Información reserva: {{ $reserva->id }}</h2>
@endsection

@section('content')

<a href="{{ url('reservas/') }}" class="btn btn-primary">Volver</a> 

<form action='/reservas/{{$reserva->id}}' method='POST'>
        @csrf
        @method('put')
<div class="mb-3">
    <label for="event" class="form-label">Evento</label>
    <input type="text" class="form-control" id="event" disabled value="{{ $reserva->event }}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email cliente</label>
    <input type="text" class="form-control" id="email" disabled value="{{ $reserva->email }}">
</div>
<div class="mb-3">
    <label for="company_name" class="form-label">Nombre de la compañía</label>
    <input type="text" class="form-control" id="company_name" disabled value="{{ $reserva->company_name }}">
</div>
<div class="mb-3">
    <label for="space" class="form-label">Espacio</label>
    <input type="text" class="form-control" id="space" disabled value="{{ $reserva->space }}">
</div>
<div class="mb-3">
    <label for="start_date" class="form-label">Fecha de inicio</label>
    <input type="datetime" class="form-control" id="start_date" disabled value="{{ $reserva->start_date }}">
</div>
<div class="mb-3">
    <label for="end_date" class="form-label">Fecha final</label>
    <input type="datetime" class="form-control" id="end_date" disabled value="{{ $reserva->end_date }}">
</div>
<div class="mb-3">
    <label for="n_attendees" class="form-label">Numero de asistentes</label>
    <input type="integer" class="form-control" id="n_attendees" disabled value="{{ $reserva->n_attendees }}">
</div>
<div class="mb-3">
    <label for="n_bus_pass" class="form-label">Pase de bus</label>
    <input type="integer" class="form-control" id="n_bus_pass" disabled value="{{ $reserva->n_bus_pass }}">
</div>
<div class="mb-3">
    <label for="n_staff_pass" class="form-label">Pase de staff</label>
    <input type="integer" class="form-control" id="n_staff_pass" disabled value="{{ $reserva->n_staff_pass }}">
</div>
<div class="mb-3">
    <label for="n_parking_pass" class="form-label">Pase de aparcamiento</label>
    <input type="integer" class="form-control" id="n_parking_pass" disabled value="{{ $reserva->n_parking_pass }}">
</div>
<div class="mb-3">
    <label for="accepted" class="form-label">Estado</label>
    <input type="integer" class="form-control" id="accepted" disabled value="{{ $reserva->accepted }}">
</div>

</form>

<form action='/reservas/{{$reserva->id}}' method='POST'>
        @csrf
        @method('put')
        <input type="hidden" name="accepted" id="accepted" value="Aceptada">
        <Button type="Submit" class="btn btn-success">Aceptar</Button>
</form>
<form action='/reservas/{{$reserva->id}}' method='POST'>
        @csrf
        @method('put')
        <input type="hidden" name="accepted" id="accepted" value="Denegada">
        <Button type="Submit" class="btn btn-danger">Denegar</Button> 
</form>
@endsection