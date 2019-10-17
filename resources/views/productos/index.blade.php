@extends('template')

@section('content')
    <div class="container">
        <h1>Nómina de Productos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->numero }}</td>
                        <td>{{ $producto->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
