@extends('layouts.master')

@section('header')
<br />
<h2>Listado Reservas</h2>
@endsection

@section('content')
<a href="{{url('espacios')}}" class="btn btn-link"><< Ir a Espacios -</a>
<br />
<a href="{{url('dashboard')}}" class="btn btn-link"><< Ir a tu Dashboard >></a>
<br />
<table class="table">
    <thread class="thread-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Evento</th>
            <th scope="col">Email</th>
            <th scope="col">Nombre de la compañía</th>
            <th scope="col">Espacio</th>
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
