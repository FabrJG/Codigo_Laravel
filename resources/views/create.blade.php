@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Crear Nuevo Servicio</th>
        </tr>
        <form action="{{ route('servicios.store') }}" method="post">
        @csrf
        <tr>
            <th>Título: </th>
            <td><input type="text" name="titulo"><br> {{$errors->first('titulo')}} </td>
        </tr>
        <tr>
            <th>Descripción:</th>
            <td><input type="text" name="descripcion"><br> {{$errors->first('descripcion')}} </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
        </form>
    </table>
@endsection