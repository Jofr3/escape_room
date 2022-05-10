@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url('reservations/createPost') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input name="name" type="text" class="form-control" id="name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="org" class="form-label">Organitzacio</label>
                    <input name="org" type="text" class="form-control" id="org">
                    @error('org')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phoneNum" class="form-label">Numero de telefon</label>
                    <input name="phoneNum" type="text" class="form-control" id="phoneNum">
                    @error('phoneNum')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Pais</label>
                    <input name="country" type="text" class="form-control" id="country">
                    @error('country')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">Usuari</label>
                    <select class="form-select" name="user" id="user">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
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
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                    @error('room')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Crea</button>
                <a href="/reservations" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
