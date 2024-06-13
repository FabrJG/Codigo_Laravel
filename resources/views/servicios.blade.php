@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>Servicios</h2>
    <tr>
        <td colspan="4">
            <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>
        </td>
    </tr>
    <tr>
        <th colspan="4">Listado de Servicios</th>
    </tr>
    <tr>
        @if ($servicios)
            @foreach ($servicios as $servicio)
            <td><a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a><br>{{$servicio->descripcion}}</td>
            @endforeach
        @else
            <td>No existe ningun servicio que mostrar</td>
        @endif
    </tr>
    <tr>
        <td colspan="4">{{$servicios->links()}}</td>
    </tr>
@endsection