@extends('layout')

@section('content')
    <div class="usuaris-wrapper container">
        <div class="d-flex justify-content-center mt-5">
            <a href="/users/create" class="btn btn-secondary">Crea un usuari</a>
        </div>
        <div class="p-3 rounded m-5">
            <table class="table p-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Cognom</th>
                    <th scope="col">DNI</th>
                    <th scope="col">email</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Edita</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->dni }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-danger" href="/users/delete/{{$user->id}}">Del</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/users/edit/{{$user->id}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
