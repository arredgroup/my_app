@extends('template')

@section('content')
    <div class="container">
        <h1>Nómina de Boletas</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Monto</th>
            </tr>
            </thead>
            <tbody>
            @foreach($boletas as $boleta)
                <tr>
                    <td>{{ $boleta->numero }}</td>
                    <td>{{ $boleta->fecha }}</td>
                    <td>{{ $boleta->monto }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection