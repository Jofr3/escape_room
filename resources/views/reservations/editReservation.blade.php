@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url("reservations/editPost/$reservation->id") }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input name="name" value="{{$reservation->name}}" type="text" class="form-control" id="name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="org" class="form-label">Organitzacio</label>
                    <input name="org" value="{{$reservation->org}}" type="text" class="form-control" id="org">
                    @error('org')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" value="{{$reservation->email}}" type="email" class="form-control" id="email">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phoneNum" class="form-label">Numero de telefon</label>
                    <input name="phoneNum" value="{{$reservation->phoneNum}}" type="text" class="form-control"
                           id="phoneNum">
                    @error('phoneNum')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Pais</label>
                    <input name="country" value="{{$reservation->country}}" type="text" class="form-control"
                           id="country">
                    @error('country')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">Usuari</label>
                    <select class="form-select" name="user" id="user">
                        @foreach($users as $user)
                            @if($user->id != $reservation->user->id)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @else
                                <option selected value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('user')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="room" class="form-label">Habitacio</label>
                    <select class="form-select" name="room" id="room">
                        @foreach($rooms as $room)
                            @if($room->id != $reservation->room->id)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @else
                                <option selected value="{{ $room->id }}">{{ $room->name }}</optionse>
                            @endif
                        @endforeach
                    </select>
                    @error('room')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Edita</button>
                <a href="/reservations" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
