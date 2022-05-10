@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url('users/createPost') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input name="name" type="text" class="form-control" id="name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Cognom</label>
                    <input name="surname" type="text" class="form-control" id="surname">
                    @error('surname')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input name="dni" type="text" class="form-control" id="dni">
                    @error('dni')
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
                    <label for="password" class="form-label">Contrassenya</label>
                    <input name="password" type="password" class="form-control"
                           id="password">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Crea</button>
                <a href="/users" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
