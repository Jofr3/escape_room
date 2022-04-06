@extends('layout')

@section('content')

    <div class="usuaris-wrapper container">
        <div class="d-flex justify-content-center mt-5">
            <a href="/games/create" class="btn btn-secondary">Crea un joc</a>
        </div>
        <div class="p-3 rounded m-5">
            <table class="table p-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Imatge</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Edita</th>
                </tr>
                </thead>
                <tbody>
                @foreach($games as $game)
                    <tr>
                        <th>{{ $game->id }}</th>
                        <td>{{ $game->name }}</td>
                        <td><img src="{{ 'images/' . $game->image }}" alt="{{$game->image}}"></td>
                        <td>
                            <a class="btn btn-danger" href="/games/delete/{{$game->id}}">Del</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/games/edit/{{$game->id}}">Edit</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
