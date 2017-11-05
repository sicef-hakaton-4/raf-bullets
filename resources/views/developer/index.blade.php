@extends('layouts.app')

@section('content')
    <div class="text-center images-slider" style="display: none; position: absolute; top:0; width: 100%; height: 100%; background-color: #3b3c3d;">
        <img class="slide-img" src="{{ $companies[0]->image }}">
        <button class="like" onclick="nextTrue({{ $companies }})">Like</button>
        <button class="dislike" onclick="nextFalse({{ $companies }})">No</button>
        <button class="love" onclick="love({{ $companies }})">Love</button>

        <button class="close-slider" onclick="closeSlider()"> X </button>
    </div>

    <div class="text-center moto-slider" style="">
        <span style="display: block;
  position: relative;
  top: 50%;
  transform: translateY(-50%);">Tekst</span>
        <button class="like" onclick="nextTrue({{ $companies }})">Like</button>
        <button class="dislike" onclick="nextFalse({{ $companies }})">No</button>
        <button class="love" onclick="love({{ $companies }})">Love</button>

        <button class="close-slider" onclick="closeSlider()"> X </button>
    </div>


@endsection
