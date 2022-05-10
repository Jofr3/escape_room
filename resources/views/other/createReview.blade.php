@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">
        <div class="form-wrapper m-5">
            <form method="post" action="{{ url('account/reviewPost') }}">
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
                    @error('grade')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Commentari</label>
                    <input name="comment" type="text" class="form-control" id="comment">
                    @error('comment')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 d-none">
                    <label for="user" class="form-label">User</label>
                    <input name="user" type="text" class="form-control" id="user" value="{{ $user->id }}">
                </div>
                <div class="mb-3 d-none">
                    <label for="room" class="form-label">Joc</label>
                    <input name="room" type="text" class="form-control" id="room" value="{{ $room->id }}">
                </div>
                <div class="mb-3 d-none">
                    <label for="game" class="form-label">Joc</label>
                    <input name="game" type="text" class="form-control" id="game" value="{{ $room->game->id }}">
                </div>
                <button type="submit" class="btn btn-secondary">Crea</button>
                <a href="/account" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
