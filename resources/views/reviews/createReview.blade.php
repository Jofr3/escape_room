@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url('reviews/createPost') }}">
                @csrf
                <div class="mb-3">
                    <label for="grade" class="form-label">Puntuacio</label>
                    <select class="form-select" name="grade" id="grade">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Commentari</label>
                    <input name="comment" type="text" class="form-control" id="comment">
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">Usuari</label>
                    <select class="form-select" name="user" id="user">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="room" class="form-label">Habitacio</label>
                    <select class="form-select" name="room" id="room">
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Crea</button>
                <a href="/reviews" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
