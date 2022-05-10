@extends('layout')

@section('content')

    <div class="usuaris-wrapper container">
        <div class="d-flex justify-content-center mt-5">
            <a href="/reviews/create" class="btn btn-secondary">Crea una experiencia</a>
        </div>
        <div class="p-3 rounded m-5">
            <table class="table p-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Puntuacio</th>
                    <th scope="col">Commentari</th>
                    <th scope="col">Usuari</th>
                    <th scope="col">Joc</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Edita</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <th>{{ $review->id }}</th>
                        <td>{{ $review->grade}}</td>
                        <td>{{ $review->comment }}</td>
                        <td>{{ $review->user->name }}</td>
                        <td>{{ $review->game->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/reviews/delete/{{$review->id}}">Del</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/reviews/edit/{{$review->id}}">Edit</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
