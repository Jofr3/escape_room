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
                    <th scope="col">Usuari</th>
                    <th scope="col">Habitacio</th>
                    <th scope="col">Joc</th>
                    @if(auth()->user()->role == '2')
                        <th scope="col">Confirma</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    @if(auth()->user()->role == '2' || $reservation->user_id == auth()->user()->id)
                        <tr>
                            <th>{{ $reservation->id }}</th>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->user->name }}</td>
                            <td>{{ $reservation->room->name }}</td>
                            @if($reservation->room->game != null)
                                <td>{{ $reservation->room->game->name }}</td>
                            @else
                                <td></td>
                            @endif
                            @if(auth()->user()->role == '2')
                                <td>
                                    <a class="btn btn-secondary" href="/confirmReservations/{{$reservation->id}}">Confirma</a>
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
