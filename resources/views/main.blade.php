@extends('layout')

@section('content')
    <div class="container">
        <div class="jocs-wrapper">
            @foreach($games as $game)
                <div class="row joc-element m-5 rounded-3">
                    <div class="col-4 p-4">
                        <h1 class="">{{ $game->name }}</h1>
                        <hr style="height: 3px" class="rounded">
                        <div class="review-item-wrapper">
                            <div class="review-wrapper">
                                @if($game->reviews != null)
                                    @foreach($game->reviews as $review)
                                        <div class="review-item p-3 rounded my-2">
                                            <h5 class="fst-italic">{{$review->user->name . ' ' . $review->user->surname}}
                                                ~</h5>
                                            <div>
                                                @for($i = 0; $i<$review->grade;$i++)
                                                    <img class="mx-1"
                                                         src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png"
                                                         alt="star">
                                                @endfor

                                                @for($i = 0; $i < 5 - $review->grade;$i++)
                                                    <img class="mx-1"
                                                         src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png"
                                                         alt="star">
                                                @endfor
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="review-item p-3 rounded my-2">
                                        <h5 class="fst-italic">No hi han reviews</h5>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col m-4">
                        <div id="carouselExampleControls{{ $game->name }}" class="carousel slide"
                             data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @if($game->rooms != null)
                                    @foreach($game->rooms as $room)
                                        <div class="carousel-item @if($loop->first) active @endif">
                                            <img src="{{ 'images/' . $room->image }}" style="width: 500px; height: auto"
                                                 class="d-block w-100"
                                                 alt="{{ $room->image }}">
                                            <div class="carousel-caption d-none d-md-block">
                                                @if($room->rented)
                                                    <p class="btn btn-danger">Llogat</p>
                                                @else
                                                    <p class="btn btn-success">Lliure</p>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="review-item p-3 rounded my-2">
                                        <h5 class="fst-italic">No te habitacions</h5>
                                    </div>
                                @endif
                            </div>

                            @if($game->rooms != null)
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls{{ $game->name }}"
                                        data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls{{ $game->name }}"
                                        data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
