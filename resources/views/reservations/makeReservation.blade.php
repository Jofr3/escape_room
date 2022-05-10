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
            <p>El sistema de reserves de les Oliveres del Convent, S.L., a través d'Internet li permet realitzar reserves en temps real, per a qualsevol data de l'any, d'acord amb les condicions establertes a aquest efecte.</p>

            <p>És imprescindible en aquesta aplicació facilitar el seu número de targeta de crèdit, per a confirmar la seva reserva, i el seu correu electrònic, per a poder enviar-li qualsevol comunicació relativa a l'estat de la seva reserva.</p>

            <p>Aquest sistema li permet realitzar reserves per al mateix dia de l'arribada.</p>

            <h2>Confirmació de reserves</h2>
            <p>El sistema li facilitarà les dades de la reserva efectuada, juntament amb un número de reserva, que haurà de ser utilitzat per a qualsevol altra operació, consulta o comunicació.</p>

            <p>La confirmació de reserva, facilitada pel sistema, quedarà subjecta a la validació de les dades relatives a la seva targeta de crèdit, per part de les Oliveres del Convent, S.L. Conseqüentment d'haver-hi errors en la targeta de crèdit facilitada la seva reserva quedarà anul·lada.</p>
        </div>
    </div>
@endsection
