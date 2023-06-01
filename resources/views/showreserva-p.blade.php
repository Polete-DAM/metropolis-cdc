@extends('layouts.master')

@section('header')
<h2>Información reserva: {{ $reserva->id }}</h2>
@endsection

@section('content')
<a href="{{url('reservas')}}" class="btn btn-link"><< Inicio</a>
<form action='/reservas/{{$reserva->id}}' method='POST'>
<div class="mb-3">
    <label for="event" class="form-label">Evento</label>
    <input type="text" class="form-control" id="event" disabled value="{{ $reserva->event }}">

    <label for="email" class="form-label">Email cliente</label>
    <input type="text" class="form-control" id="email" disabled value="{{ $reserva->email }}">

    <label for="company_name" class="form-label">Nombre de la compañía</label>
    <input type="text" class="form-control" id="company_name" disabled value="{{ $reserva->company_name }}">

    <label for="space" class="form-label">Espacio</label>
    <input type="text" class="form-control" id="space" disabled value="{{ $reserva->space }}">

    <label for="start_date" class="form-label">Fecha de inicio</label>
    <input type="datetime" class="form-control" id="start_date" disabled value="{{ $reserva->start_date }}">

    <label for="end_date" class="form-label">Fecha final</label>
    <input type="datetime" class="form-control" id="end_date" disabled value="{{ $reserva->end_date }}">

    <label for="n_attendees" class="form-label">Numero de asistentes</label>
    <input type="integer" class="form-control" id="n_attendees" disabled value="{{ $reserva->n_attendees }}">

    <label for="n_bus_pass" class="form-label">Pase de bus</label>
    <input type="integer" class="form-control" id="n_bus_pass" disabled value="{{ $reserva->n_bus_pass }}">

    <label for="n_staff_pass" class="form-label">Pase de staff</label>
    <input type="integer" class="form-control" id="n_staff_pass" disabled value="{{ $reserva->n_staff_pass }}">

    <label for="n_parking_pass" class="form-label">Pase de aparcamiento</label>
    <input type="integer" class="form-control" id="n_parking_pass" disabled value="{{ $reserva->n_parking_pass }}">

    <label for="accepted" class="form-label">Estado</label>
    <input type="integer" class="form-control" id="accepted" disabled value="{{ $reserva->accepted }}">
</div>

</form>

@endsection