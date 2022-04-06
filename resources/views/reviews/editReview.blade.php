@extends('layout')

@section('content')
    <div class="container  d-flex justify-content-center">

        <div class="form-wrapper m-5">
            <form method="post" action="{{ url("reviews/editPost/$review->id") }}">
                @csrf
                <div class="mb-3">
                    <label for="grade" class="form-label">Puntuacio</label>
                    <select class="form-select" name="grade" id="grade">
                        @for($i = 0;$i<5;$i++)
                            @if($i!=$review->grade)
                                <option value="{{$i}}">{{$i}}</option>
                            @else
                                <option selected value="{{$i}}">{{$i}}</option>
                            @endif
                        @endfor
                    </select>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Commentari</label>
                    <input name="comment" value="{{ $review->comment }}" type="text" class="form-control" id="comment">
                </div>
                <div class="mb-3">
                    <label for="user" class="form-label">Usuari</label>
                    <select class="form-select" name="user" id="user">
                        @foreach($users as $user)
                            @if($user->id != $review->user->id)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @else
                                <option selected value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="room" class="form-label">Habitacio</label>
                    <select class="form-select" name="room" id="room">
                        @foreach($rooms as $room)
                            @if($room->id != $review->room->id)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @else
                                <option selected value="{{ $room->id }}">{{ $room->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Edita</button>
                <a href="/reservations" type="submit" class="btn btn-danger">Cancela</a>
            </form>
        </div>
    </div>
@endsection
