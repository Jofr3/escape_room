@extends('layout')

@section('content')
    <div class="container d-flex justify-content-center">
        <form class="m-5" method="post" action="{{ url('signupPost') }}">
            @csrf
            <h1 class="m-3" style="margin-left: 126px !important;">Sign-up</h1>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="name"
                                                                  class="col-form-label float-end">Nom</label></div>
                <div class="col-auto"><input name="name" type="text" id="name" class="form-control"></div>
                <div class="col-auto" style="width: 140px">
                    @error('surname')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="surname"
                                                                  class="col-form-label float-end">Cognom</label></div>
                <div class="col-auto"><input name="surname" type="text" id="surname" class="form-control"></div>
                <div class="col-auto" style="width: 140px">
                    @error('surname')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="email" class="col-form-label float-end">Email</label>
                </div>
                <div class="col-auto"><input name="email" type="email" id="email" class="form-control"></div>
                <div class="col-auto" style="width: 140px">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="dni" class="col-form-label float-end">DNI</label>
                </div>
                <div class="col-auto"><input name="dni" type="text" id="dni" class="form-control"></div>
                <div class="col-auto" style="width: 140px">
                    @error('dni')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center m-2">
                <div class="col-auto" style="width: 140px"><label for="password" class="col-form-label float-end">Contrassenya</label>
                </div>
                <div class="col-auto"><input name="password" type="password" id="password" class="form-control"></div>
                <div class="col-auto" style="width: 140px">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-danger float-end m-3" style="margin-right: 135px !important;">Sign-up
            </button>
        </form>

    </div>

    <div class="position-absolute signin m-3">
        <a href="/" class="btn btn-secondary">Log-in</a>
    </div>
@endsection
