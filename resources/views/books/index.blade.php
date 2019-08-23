@extends('layouts.dashboard')

@section('contenido')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books  as $book)
                                    <tr>    
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->nombre }}</td>
                                        <td>{{ $book->descripcion }}</td>
                                    <tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $books->links() }}
                    </div>
                <div>
            </div>
        </div>
    </div>
</div>


@endsection