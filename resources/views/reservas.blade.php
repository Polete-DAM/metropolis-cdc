@extends('layouts.master')

@section('header')
<h2>Listado Reservas</h2>
@endsection

@section('content')

<table class="table">
    <thread class="thread-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Evento</th>
            <th scope="col">Email</th>
            <th scope="col">Nombre de la compañía</th>
            <th scope="col">Espacio</th>
            <th scope="col">Fecha inicial</th>
            <th scope="col">Fecha final</th>
            <th scope="col">Estado de la reserva</th>
            <th scope="col" colspan=3></th>
        </tr>
    </thread>
    <tbody>

    @foreach($reservas as $reserva)
    <tr>
        <th scope="row">{{ $reserva->id }}</th>
        <td>{{ $reserva->event }}</td>
        <td>{{ $reserva->email }}</td>
        <td>{{ $reserva->company_name }}</td>
        <td>{{ $reserva->space }}</td>
        <td>{{ $reserva->start_date }}</td>
        <td>{{ $reserva->end_date }}</td>
        <td>{{ $reserva->accepted }}</td>
        <td>
            <a href="{{ url('reservas/' . $reserva->id )}}" class="btn btn-primary">Show</a>
        </td>
        <td>
            <a href="{{ url('reservas/' . $reserva->id . '/gestion')}}" class="btn btn-warning">Gestionar</a>
        </td>
    </tr>
    @endforeach

    </tbody>
@endsection
