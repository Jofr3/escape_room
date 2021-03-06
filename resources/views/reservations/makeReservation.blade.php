@extends('layout')

@section('content')
    <div class="container d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url('reservations/makePost') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="org" class="form-label">Organitzacio</label>
                    <input  name="org" type="text" class="form-control" id="org">
                    @error('org')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}" name="email" type="email" class="form-control" id="email">
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
                <button type="submit" class="btn btn-secondary">Reserva</button>
                <a href="/main" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>

        <div class="m-4" style="width: 500px;">
            <h2>El sistema de reserves</h2>
            <p>El sistema de reserves de les Oliveres del Convent, S.L., a trav??s d'Internet li permet realitzar reserves en temps real, per a qualsevol data de l'any, d'acord amb les condicions establertes a aquest efecte.</p>

            <p>??s imprescindible en aquesta aplicaci?? facilitar el seu n??mero de targeta de cr??dit, per a confirmar la seva reserva, i el seu correu electr??nic, per a poder enviar-li qualsevol comunicaci?? relativa a l'estat de la seva reserva.</p>

            <p>Aquest sistema li permet realitzar reserves per al mateix dia de l'arribada.</p>

            <h2>Confirmaci?? de reserves</h2>
            <p>El sistema li facilitar?? les dades de la reserva efectuada, juntament amb un n??mero de reserva, que haur?? de ser utilitzat per a qualsevol altra operaci??, consulta o comunicaci??.</p>

            <p>La confirmaci?? de reserva, facilitada pel sistema, quedar?? subjecta a la validaci?? de les dades relatives a la seva targeta de cr??dit, per part de les Oliveres del Convent, S.L. Conseq??entment d'haver-hi errors en la targeta de cr??dit facilitada la seva reserva quedar?? anul??lada.</p>
        </div>
    </div>
@endsection
