@extends('layout')

@section('content')
    <div class="container-fluid ">
        <div class="row">

            <div class="col-5 d-flex justify-content-center">
                <form class="mt-5" method="post" action="{{ url("accountPost/$user->id") }}">
                    @csrf
                    <h1 class="m-3" style="margin-left: 126px !important;">Edita dades</h1>
                    <div class="row g-3 align-items-center m-2">
                        <div class="col-auto" style="width: 140px"><label for="name"
                                                                          class="col-form-label float-end">Nom</label>
                        </div>
                        <div class="col-auto"><input name="name" type="text" id="name" class="form-control"
                                                     value="{{$user->name}}">
                        </div>
                        <div class="col-auto" style="width: 140px"><span class="form-text">Requerit</span></div>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row g-3 align-items-center m-2">
                        <div class="col-auto" style="width: 140px"><label for="surname"
                                                                          class="col-form-label float-end">Cognom</label>
                        </div>
                        <div class="col-auto"><input name="surname" type="text" id="surname"
                                                     class="form-control" value="{{ $user->surname }}"></div>
                        <div class="col-auto" style="width: 140px"><span class="form-text">Requerit</span></div>
                        @error('surname')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger float-end m-3" style="margin-right: 135px !important;">
                        Confirma
                    </button>
                </form>
            </div>

            <div class="col-7">

                <div class="row" style="height: 45vh">

                    <div class="usuaris-wrapper container">
                        <h4 class="mt-1">Experiencies no realitzades</h4>
                        <div class="p-3 rounded  me-5" style="height: 35vh; overflow-y: scroll; overflow-x: clip;">
                            <table class="table p-3">
                                <thead>
                                <tr>
                                    <th scope="col">Organitzacio</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Habitacio</th>
                                    <th scope="col">Joc</th>
                                    <th scope="col">Crear expediencia</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reservationsNoReview as $reservation)
                                    <tr>
                                        <td>{{ $reservation->org }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->room->name }}</td>
                                        @if($reservation->room->game != null)
                                            <td>{{ $reservation->room->game->name }}</td>
                                        @else
                                            <td></td>
                                        @endif
                                        <td><a href="account/review/{{ $reservation->room->id }}"
                                               class="btn btn-danger">Crear</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="row" style="height: 38vh">

                    <div class="usuaris-wrapper container">
                        <h4>Experiencies realitzades</h4>
                        <div class="p-3 rounded mt-1 me-5" style="height: 35vh; overflow-y: scroll; overflow-x: clip;">
                            <table class="table p-3">
                                <thead>
                                <tr>
                                    <th scope="col">Organitzacio</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Habitacio</th>
                                    <th scope="col">Joc</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reservationsReview as $reservation)
                                    <tr>
                                        <td>{{ $reservation->org }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->room->name }}</td>
                                        @if($reservation->room->game != null)
                                            <td>{{ $reservation->room->game->name }}</td>
                                        @else
                                            <td></td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
