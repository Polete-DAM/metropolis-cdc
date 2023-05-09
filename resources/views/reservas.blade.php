@extends('layouts.master')

@section('header')
<h2>Llistat Usuaris</h2>
@endsection

@section('content')

<table class="table">
    <thread class="thread-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Evento</th>
            <th scope="col">Dia</th>
            <th scope="col">Estado Reserva</th>
            <th scope="col" colspan=3></th>
        </tr>
    </thread>
    <tbody>

    @foreach($reservas as $reserva)
    <tr>
        <th scope="row">{{ $reserva->id }}</th>
        <td>{{ $reserva->client_id }}</td>
        <td>{{ $reserva->event }}</td>
        <td>{{ $reserva->day }}</td>
        <td>{{ $reserva->estado }}</td>
        <td>
            <a href="{{ url('reservas/' . $reserva->id )}}" class="btn btn-primary">Show</a>
        </td>
        <td>
            <a href="{{ url('reservas/' . $reserva->id . '/edit')}}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ url('reservas/',$reserva->id)}}" method='POST'>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
@endsection
