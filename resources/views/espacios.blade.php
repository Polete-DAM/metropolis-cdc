@extends('layouts.master')

@section('header')
<br />
<h2>Listado Espacios</h2>
@endsection

@section('content')
<a href="{{url('reservas')}}" class="btn btn-link">- Ir a Reservas >></a>
<br />
<a href="{{url('dashboard')}}" class="btn btn-link"><< Ir a tu Dashboard >></a>
<br />
<table class="table">
    <thread class="thread-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Area</th>
            <th scope="col">Capacidad</th>
            <th scope="col">Disponibilidad</th>
            <th scope="col">URL Imagen</th>
            <th scope="col" colspan=3></th>
        </tr>
    </thread>
    <tbody>

    @foreach($espacios as $espacio)
    <tr>
        <th scope="row">{{ $espacio->id }}</th>
        <td>{{ $espacio->nombre }}</td>
        <td>{{ $espacio->area }}</td>
        <td>{{ $espacio->capacidad }}</td>
        <td>{{ $espacio->disponibilidad }}</td>
        <td>{{ $espacio->imagen_url }}</td>
        <td>
            <a href="{{ url('espacios/' . $espacio->id )}}" class="btn btn-primary">Show</a>
        </td>
        <td>
            <a href="{{ url('espacios/' . $espacio->id . '/edit')}}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ url('espacios',$espacio->id)}}" method='POST'>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
@endsection
