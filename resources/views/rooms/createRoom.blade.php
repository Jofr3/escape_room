@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url('rooms/createPost') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imatge</label>
                    <input name="image" type="file" class="form-control" id="image">
                </div>
                <div class="mb-3">
                    <label for="game" class="form-label">Joc</label>
                    <select class="form-select" name="game" id="game">
                        @foreach($games as $game)
                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Crea</button>
                <a href="/rooms" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
