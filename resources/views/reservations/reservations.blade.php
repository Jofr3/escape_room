@extends('layout')

@section('content')

    <div class="usuaris-wrapper container">
        @if(auth()->user()->role == '2')
            <div class="d-flex justify-content-center mt-5">
                <a href="/reservations/create" class="btn btn-secondary">Crea una reserva</a>
            </div>
        @endif
        <div class="p-3 rounded m-5">
            <table class="table p-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Organitzacio</th>
                    <th scope="col">Email</th>
                    <th scope="col">Numero de telefon</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Usuari</th>
                    <th scope="col">Habitacio</th>
                    <th scope="col">Joc</th>
                    <th scope="col">Experiencia</th>
                    @if(auth()->user()->role == '2')
                        <th scope="col">Eliminar</th>
                        <th scope="col">Edita</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    @if(auth()->user()->role == '2' || $reservation->user_id == auth()->user()->id)
                        <tr>
                            <th>{{ $reservation->id }}</th>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->org }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phoneNum }}</td>
                            <td>{{ $reservation->country }}</td>
                            <td>{{ $reservation->user->name }}</td>
                            <td>{{ $reservation->room->name }}</td>
                            @if($reservation->room->game != null)
                                <td>{{ $reservation->room->game->name }}</td>
                            @else
                                <td></td>
                            @endif
                            <td>{{ $reservation->hasReview }}</td>
                            @if(auth()->user()->role == '2')
                                <td>
                                    <a class="btn btn-danger" href="/reservations/delete/{{$reservation->id}}">Del</a>
                                </td>
                                <td>
                                    <a class="btn btn-secondary" href="/reservations/edit/{{$reservation->id}}">Edit</a>
                                </td>
                            @endif
                        </tr>
                    @endif

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
