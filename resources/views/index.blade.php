@extends('layout')

@section('content')
    <div id="app">
        <index></index>
    </div>
    <div class="container d-flex justify-content-center">
        <form class="m-5" method="post" action="{{ url('/login') }}">
            @csrf
            <h1 class="m-3" style="margin-left: 126px !important;">Log-in</h1>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="name" class="col-form-label float-end">Nom</label></div>
                <div class="col-auto"><input value="{{  isset($input) ? ($input['name'] != null ? $input['name'] : "") : ""}}" name="name" type="text" id="name" class="form-control"></div>
                <div class="col-auto" style="width: 140px"><span class="form-text">Requerit</span></div>
            </div>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="surname" class="col-form-label float-end">Cognom</label></div>
                <div class="col-auto"><input value="{{  isset($input) ? ($input['surname'] != null ? $input['surname'] : "") : ""}}" name="surname" type="text" id="surname" class="form-control"></div>
                <div class="col-auto" style="width: 140px"><span class="form-text">Requerit</span></div>
            </div>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="password" class="col-form-label float-end">Contrassenya</label></div>
                <div class="col-auto"><input value="{{  isset($input) ? ($input['password'] != null ? $input['password'] : "") : ""}}" name="password" type="password" id="password" class="form-control"></div>
                <div class="col-auto" style="width: 140px"><span class="form-text">Requerit</span></div>
            </div>
            <button type="submit" class="btn btn-danger float-end m-3" style="margin-right: 135px !important;">Log-in</button>
        </form>

    </div>

    <div class="position-absolute signin m-3">
        <a href="/signup" class="btn btn-secondary">Sign-in</a>
    </div>
@endsection
