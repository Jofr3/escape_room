@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url("users/editPost/$user->id") }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input name="name" value="{{$user->name}}" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Cognom</label>
                    <input name="surname" value="{{$user->surname}}" type="text" class="form-control" id="surname">
                </div>
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input name="dni" value="{{$user->dni}}" type="text" class="form-control" id="dni">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" value="{{$user->email}}" type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contrassenya</label>
                    <input name="password" value="{{$user->password}}" type="password" class="form-control"
                           id="password">
                </div>
                <button type="submit" class="btn btn-secondary">Edita</button>
                <a href="/users" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
