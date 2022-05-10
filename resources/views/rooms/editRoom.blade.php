@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url("rooms/editPost/$room->id") }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input name="name" value="{{$room->name}}" type="text" class="form-control" id="name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input name="image" type="file" class="form-control" id="image">
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="game" class="form-label">Joc</label>
                    <select class="form-select" name="game" id="game">
                        @foreach($games as $game)
                            @if($room->game != null)
                                @if($game->id != $room->game->id)
                                    <option value="{{ $game->id }}">{{ $game->name }}</option>
                                @else
                                    <option selected value="{{ $game->id }}">{{ $game->name }}</option>
                                @endif
                            @else

                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="rented" class="form-label">Disponible</label>
                    <select class="form-select" name="rented" id="rented">
                        <option value="0" selected>Si</option>
                        <option value="1">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Edita</button>
                <a href="/rooms" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
