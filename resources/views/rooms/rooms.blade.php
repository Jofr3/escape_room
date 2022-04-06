@extends('layout')

@section('content')

    <div class="usuaris-wrapper container">
        <div class="d-flex justify-content-center mt-5">
            <a href="/rooms/create" class="btn btn-secondary">Crea una habitacio</a>
        </div>
        <div class="p-3 rounded m-5">
            <table class="table p-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Imatge</th>
                    <th scope="col">Joc</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Edita</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <th>{{ $room->id }}</th>
                        <td>{{ $room->name }}</td>
                        <td><img src="{{ 'images/' . $room->image }}" alt="{{ $room->image }}"></td>
                        @if($room->game != null)
                            <td>{{ $room->game->name }}</td>
                        @else
                            <td></td>
                        @endif
                        <td>
                            <a class="btn btn-danger" href="/rooms/delete/{{$room->id}}">Del</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/rooms/edit/{{$room->id}}">Edit</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
