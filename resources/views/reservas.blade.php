@extends('layouts.master')

@section('header')
<h2>Llistat Usuaris</h2>
@endsection

@section('content')

<table class="table">
    <thread class="thread-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col" colspan=3></th>
        </tr>
    </thread>
    <tbody>

    @foreach($reservas as $reserva)
    <tr>
        <th scope="row">{{ $reserva->id }}</th>
        <td>{{ $reserva->name }}</td>
        <td>{{ $reserva->email }}</td>
        <td>{{ $reserva->created_at }}</td>
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
